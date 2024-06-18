<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::paginate(9);
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'director' => 'required',
            'release_date' => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');
            $data['image'] = basename($path);
        }

        Movie::create($data);

        return redirect()->route('movies.index')->with('success', '映画が追加されました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
            'director' => 'required',
            'release_date' => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($movie->image) {
                Storage::delete('public/images/' . $movie->image);
            }
            $path = $request->file('image')->store('public/images');
            $data['image'] = basename($path);
        }

        $movie->update($data);

        return redirect()->route('movies.index')->with('success', '映画が更新されました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')
                        ->with('success', 'Movie deleted successfully.');
    }
}
