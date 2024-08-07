<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerseModel extends Model
{
    use HasFactory;
    public $table = 'verses';
    public $fillable = [
        'verse-title',
        'verse-content',
        'song-id',
    ];
}
