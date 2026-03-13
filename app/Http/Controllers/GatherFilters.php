<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GatherFilters extends Controller
{
    //Return to this after implementation of filter through the view component (Xavier)
    // function buildFilter($raw) {
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
}
