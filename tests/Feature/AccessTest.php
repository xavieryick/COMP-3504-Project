<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\ApplyFilters;
use Illuminate\Http\Request;
class AccessTest extends TestCase
{

    public function test_can_access_filter_class(): void
    {
        $instance = new ApplyFilters();
        $response = $instance->testMe(1,1,false);

        expect($response)->toBe(2);
    }


    
}
