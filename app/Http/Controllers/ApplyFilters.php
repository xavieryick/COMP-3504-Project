<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SpotifyRepository;
use App\Models\{Playlist, Track, TrackFeatures, Artist, Album};

class ApplyFilters extends Controller {

  /*
  TO DO:
  - Laravel Integration (October 31)
  - Preserve buffer array data between GET operations (November 1-5)
  - Reformat filter array references to fit Spotify Schema (November 1-5)
  - Access arrays of tracks, albums and artists (SEE MODEL DEV)
  */
    public $filterArray;
    public $outputArray;
    protected $playlist;

    protected $input;

    function __construct() {
    }

    /**
     * Saving playlists as an array due to the complications involved with laravel data pulls.
     * @param \Illuminate\Http\Request $request
     */
    function obtainPlaylist(Request $request) {
       $playlist = Playlist::where('id', 1)
            ->with('tracks','tracks.album','tracks.artists')
            ->first();

      //Let's print off a neat little list of all track objects in here (horror)
      $parsedPlaylist = [];

      foreach($playlist->tracks as $track) {
        $trackInfo = [
          "name"        => $track->name,
          "isExplicit"  => $track->explicit,
          "album"       => $track->album->name ?? null,
          "duration_ms" => $track->duration_ms,
          "artists"     => [],
          "genres"      => [],
        ];

        foreach($track->artists as $artist) {
          $trackInfo["artists"][] = $artist->name;
          foreach ($artist->genres as $genre) {
            $trackInfo["genres"][] = $genre;
          }
        }


        $parsedPlaylist[] = $trackInfo;
      }

      return $parsedPlaylist;
    }


    /*
    Filter builder. Ideally a view item will call this function with what it needs. 
    */
    public function buildFilter($filterGenres, $filterArtists, $DurationMax, $DurationMin, $IsExplicit) {
      //$this->filterArray = GatherFilters::getFilter();
      $filterArray["filterGeneres"] = $filterGenres;
      $filterArray["filterArtists"] = [];

      if(isset($filterArtists)) {
        foreach($filterArtists as $artist) {
          $filterArray["filterArtists"][] = $artist;
        }
      }
      $filterArray["duration_min"] = $DurationMin;
      $filterArray["duration_max"] = $DurationMax;
      $filterArray["noExplicit"] = $IsExplicit;
      return $filterArray;
    }




    function filterSongs($input, $filterArray) {

      $filteredList = [];
      foreach($input as $track) {

        $valid = false;
        //Artist checker


        if(count($filterArray["filterArtists"])>0) {
          $artistMatchFound = false;
          foreach($track["artists"] as $artist) {
            echo "   ".$track["name"]." is by ".$artist."\r\n";
            foreach($filterArray["filterArtists"] as $filterArtist) {
              if($filterArtist == $artist) {
                echo "FOUND! ".$filterArtist." is ".$artist."!\r\n";
                $artistMatchFound = true;
              }
            }
          }
          if($artistMatchFound) $valid = true;
        } else {
          echo "IMPORTANT: Skipped artist check!\r\n";
          $valid = true;
        }
      

        //Duration checker
        if(isset($track["duration_ms"])) {
          if(isset($filterArray["duration_min"])) {
            if($track["duration_ms"] < $filterArray["duration_min"]) {
              echo "Disqualified due to short duration.\r\n";
              $valid = false;
            }
          }
          if(isset($filterArray["duration_max"])) {
            if($track["duration_ms"] > $filterArray["duration_max"]) {
              echo "Disqualified due to long duration.\r\n";
              $valid = false;
            }
          }
        }


        //Explicit Checker
        if($track["isExplicit"]==1 && $filterArray["noExplicit"]==1) {
          echo "Disqualified due to explicitness.\r\n";
          $valid = false;
        }

        if($valid == true) {
          $filteredList[] = $track;
        }
      }
      return $filteredList;
    }

    function applyFilters($inputList, $filterList) {
      if(isset($inputList)) {
        return $this->filterSongs($inputList, $filterList);
        
      } else {
        echo "<h1>ERROR: Invalid List!</h1>";
      }
    }

    function mergeFilters($buffer, $canMerge) {
      if($canMerge==false) {
        return $buffer;
      } else if (!isset($this->outputArray)){
        return $buffer;
      } else {
        foreach($buffer as $bufferItem) {
          $this->outputArray[] = $bufferItem;
        }
        return $this->outputArray;

      }
    }


    function testMe($a, $b, $isStupid) {
      if($isStupid) return $a-$b;
      else return $a+$b;
    }
}
