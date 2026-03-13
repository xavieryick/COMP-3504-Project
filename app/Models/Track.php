<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'spotify_id', 'name', 'album_id', 'duration_ms', 'explicit',
        'popularity', 'track_number', 'preview_url', 'external_url'
    ];

    public function album() {
        return $this->belongsTo(Album::class);
    }

    public function artists() {
        return $this->belongsToMany(Artist::class);
    }

    public function playlists() {
        return $this->belongsToMany(Playlist::class)->withPivot('position');
    }
    public function features()
    {
        return $this->hasOne(SongFeatures::class);
    }
}
