<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'spotify_id', 'name', 'description', 'public',
        'owner_name', 'owner_spotify_id', 'image_url'
    ];

    public function tracks() {
        return $this->belongsToMany(Track::class)->withPivot('position');
    }
}
