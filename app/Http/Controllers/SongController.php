<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SongModel;
use \App\Models\VerseModel;

class SongController extends Controller
{
    public function addSong (Request $request){
        $validated = $request->validate([
            'song-title' => 'required|max:255',
            'verse-title' => 'required|max:255',
            'verse-content' => 'required',
        ]);
        
        $newSong = SongModel::create([
            'song-title' => $request->input('song-title'),
            'song-status' => 1,
        ]);

        if($newSong){
            $song = SongModel::where('song-title', $request->input('song-title'))->first();
            $newVerse = VerseModel::create([
                'verse-title' => $request->input('verse-title'),
                'verse-content' => $request->input('verse-content'),
                'song-id' => $song->id,
            ]);

            if($newVerse){
                return response()->json([
                    'status' => 'success',
                    'message' => 'Song Added Successfully',
                ]);
            }
        }

        
        //return response("This is the title: $request->input('song-title')")->header('Content-Type', 'text/plain');
    }
}
