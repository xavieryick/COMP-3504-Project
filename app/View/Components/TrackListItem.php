<?php

namespace App\View\Components;

use App\Models\Artist;
use App\Models\Track;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TrackListItem extends Component
{
    /**
     * Create a new component instance.
     */

    public Track $track;
    public string $artistNames;
    public function __construct(Track $track)
    {
        $this->track = $track;

        $this->artistNames = "";
        foreach($track->artists as $artist) {
            if($this->artistNames == "") {
                $this->artistNames = $artist->name;
            }else {
                $this->artistNames = $this->artistNames . ", " . $artist->name;
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.track-list-item');
    }
}
