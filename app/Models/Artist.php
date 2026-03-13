<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'spotify_id', 'name', 'popularity', 'image_url', 'genres'
    ];

    protected $casts = [
        'genres' => 'array',
    ];

    public function tracks() {
        return $this->belongsToMany(Track::class)->withTimestamps();
    }

    public function albums() {
        return $this->belongsToMany(Album::class)->withTimestamps();
    }
}
