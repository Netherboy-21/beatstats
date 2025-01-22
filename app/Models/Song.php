<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['name','artist','pack','difficulty','mode','bpm','notes_per_second','notes','walls','bombs','seconds','created_at','updated_at'];

    public function getDifficultyRating() {
        $notes_per_second = $this->notes_per_second;
        $notes = $this->notes;
        $walls = $this->walls;
        $bombs = $this->bombs;

        $rating = (($notes * $notes_per_second) + $walls + $bombs) / 100;

        $rating = floor($rating);

        return $rating;
    }
}
