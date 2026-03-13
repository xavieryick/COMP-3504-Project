<?php 
class Filter {
  /*
  TO DO:
  - Laravel Integration (October 31)
  - Preserve buffer array data between GET operations (November 1-5)
  - Reformat filter array references to fit Spotify Schema (November 1-5)
  - Access arrays of tracks, albums and artists (SEE MODEL DEV)
  */
    public $filterArray;
    public $outputArray;


    function __construct() {
    }

    //Return to this after implementation of filter through the view component (Xavier)
    // function getFilter($raw) {
    //   if(isset($raw)) {
    //     $this->filterArray["star"] = [];

    //     if(isset($raw["star"])) {
    //       foreach($raw["star"] as $starItem) {
    //         $this->filterArray["star"][] = $starItem;
    //       }
    //     }
    
    //     $this->filterArray["oil"] = (int) $raw["oil"];
    //     $this->filterArray["gas"] = (int) $raw["gas"];
    //     $this->filterArray["rock"] = (int) $raw["rock"];
    //     $this->filterArray["water"] = (int) $raw["water"];
    //     $this->filterArray["ore"] = (int) $raw["ore"];
    //     $this->filterArray["solar"] = (int) $raw["solar"];
    //     $this->filterArray["wind"] = (int) $raw["wind"];

    //     if(isset($raw["habitable"])) {
    //       $this->filterArray["habitable"] = true;
    //     } else {
    //       $this->filterArray["habitable"] = false;
    //     }

    //     if(isset($raw["cool"])) {
    //       $this->filterArray["cool"] = true;
    //     } else {
    //       $this->filterArray["cool"] = false;
    //     }

    //     if(isset($raw["ephemeral"])) {
    //       $this->filterArray["ephemeral"] = true;
    //     } else {
    //       $this->filterArray["ephemeral"] = false;
    //     }

    //     if(isset($raw["aliens"])) {
    //       $this->filterArray["aliens"] = true;
    //     } else {
    //       $this->filterArray["aliens"] = false;
    //     }

    //     echo "<p> RAW: ".var_dump($raw)."</p>";
    //     echo "<p> FILTERED: ".var_dump($this->filterArray)."</p>";
    //   }
    // }


    /*
    Temporary filter function for testing purposes. Takes filter items and builds them into a filter list.
    */
    public function getFilter($filterGenres, $filterArtists, $DurationMax, $DurationMin, $IsExplicit) {
      $this->filterArray["filterGeneres"] = $filterGenres;
      $this->filterArray["filterArtists"] = $filterArtists;
      $this->filterArray["DurationMin"] = $DurationMin;
      $this->filterArray["DurationMax"] = $DurationMax;
      $this->filterArray["IsExplicit"] = $IsExplicit;
    }

    function filterSongs($toFilter) {
      $filteredList = null;
      foreach($toFilter as $track) {
        //This is laravel stuff. Check if you know what you're doing.
        $thisAlbum = $track->album();
        $Artists = $track->artists();

        $genreList = null;
        foreach($Artists as $artist) {
          foreach($artist->genres() as $genre) {
            $genreList[] = $genre;
          }
        }



        $valid = false;
        if(empty($this->filterArray["filterGenres"])) {
          $valid = true;
        } else {
          foreach($this->filterArray["filterGenres"] as $filterGenre) {
            foreach($genreList as $genre) {
              if($filterGenre == $genre) {
                $valid = true;
              }
            }
            
          }
        }

        if(empty($this->filterArray["filterArtists"])) {
          $valid = true;
        } else {
          foreach($this->filterArray["filterArtists"] as $filteredArtist) {
            foreach($Artists as $artist) {
              if($filteredArtist == $artist->name) {
                $valid = true;
              }
            }
          }
        }


        if(isset($track["duration_ms"])) {
          if($track["duration_ms"] < $this->filterArray["duration_min"] || $track["duration_ms"] > $this->filterArray["duration_max"]) {
            $valid = false;
          }
        }

        if($track["explicit"]==1 && $this->filterArray["explicit"]==false) {
          $valid = false;
        }

        if($valid == true) {
          $filteredList[] = $track;
        }
      }


      return $filteredList;
      
    }

    function applyFilters($inputList) {
      if(isset($inputList)) {
        return $this->filterSongs($inputList);
        
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
}
?>

