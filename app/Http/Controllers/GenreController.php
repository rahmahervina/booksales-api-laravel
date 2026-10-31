<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Read all data (Genre)
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres, 200);
    }

    // Create data (Genre)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $genre = Genre::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'message' => 'Genre berhasil ditambahkan!',
            'data' => $genre
        ], 201);
    }
}