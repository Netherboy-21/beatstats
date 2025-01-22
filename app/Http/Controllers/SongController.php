<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSongRequest;
use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Contracts\View\View;

class SongController extends Controller
{

    /**
     * Displays the list of songs
     * @return View
     */
    public function index() {
        $songs = Song::all();

        return view("song-index", ["songs"=>$songs]);
    }

    public function show($id) {
        $song = Song::find($id);
    }

    /**
     * Form for song data entry
     * @param \Illuminate\Http\Request $request
     * @return View
     */
    public function create(Request $request) {
        return view("song-create");
    }

    /**
     * Store song data in the database
     * @param \Illuminate\Http\Request $request
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function store(StoreSongRequest $request) {
        $request = $request->validated();
        
        $song = Song::create($request);
        return response()->json($song,200);
    }
}
