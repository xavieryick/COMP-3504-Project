<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'spotify_id', 'name', 'release_date', 'album_type', 'total_tracks', 'image_url'
    ];

    public function tracks() {
        return $this->hasMany(Track::class);
    }
    public function artists() {
        return $this->belongsToMany(Artist::class);
    }
}
