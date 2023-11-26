<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    // Display a listing of the songs
    public function index()
    {
        $songs = Song::all();
        return view('dashboard', compact('songs'));
    }

    // Show the form for creating a new song
    public function create()
    {
        return view('songs.create');
    }

    // Store a newly created song in the database
    public function store(Request $request)
    {
        $request->validate([
            'thumb' => 'required|file|mimes:jpeg,jpg,png,gif,webp',
            'title' => 'required|string',
            'genres' => 'required|string',
            'artists' => 'required|string',
            'audio' => 'required|file|mimes:mp3',
        ]);

        $song = new Song();
        $song->thumb = $request->file('thumb')->store('public/thumbs');
        $song->title = $request->input('title');
        $song->genres = $request->input('genres');
        $song->artists = $request->input('artists');
        $song->audio = $request->file('audio')->store('public/audios');
        $song->save();

        return redirect()->route('dashboard')->with('success', 'Song created successfully.');
    }

    // Display the specified song
    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    // Show the form for editing the specified song
    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    // Update the specified song in the database
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'thumb' => 'nullable|file|mimes:jpeg,jpg,png,gif,webp',
            'title' => 'required|string',
            'genres' => 'required|string',
            'artists' => 'required|string',
            'audio' => 'nullable|file|mimes:mp3',
        ]);

        if ($request->hasFile('thumb')) {
            $song->thumb = $request->file('thumb')->store('public/thumbs');
        }
        if ($request->hasFile('audio')) {
            $song->audio = $request->file('audio')->store('public/audios');
        }
        $song->title = $request->input('title');
        $song->genres = $request->input('genres');
        $song->artists = $request->input('artists');
        $song->save();

        return redirect()->route('dashboard')->with('success', 'Song updated successfully.');
    }

    // Remove the specified song from the database
    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('dashboard')->with('success', 'Song deleted successfully.');
    }
}
