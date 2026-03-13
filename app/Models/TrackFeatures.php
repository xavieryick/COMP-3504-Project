<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackFeatures extends Model
{
    protected $fillable = [
        'track_id',
        'danceability',
        'energy',
        'speechiness',
        'acousticness',
        'instrumentalness',
        'liveness',
        'valence',
        'tempo',
        'loudness',
        'key',
        'mode',
        'time_signature',
        'duration_ms',
        'analysis_url',
    ];
    public function track()
    {
        return $this->belongsTo(Track::class);
    }
}
