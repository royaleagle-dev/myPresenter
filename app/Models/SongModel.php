<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongModel extends Model
{
    use HasFactory;
    public $table = 'songs';
    public $fillable = [
        'song-title',
        'song-status',
    ];
}
