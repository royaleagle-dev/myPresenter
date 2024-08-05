<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SongModel;

class SongController extends Controller
{
    public function addSong (Request $request){
        $validated = $request->validate([
            'song-title' => 'required|max:255',
            'verse-title' => 'required|max:255',
            'verse-content' => 'required',
        ]);
        return response("This is the title: $request->input('song-title')")->header('Content-Type', 'text/plain');
    }
}
