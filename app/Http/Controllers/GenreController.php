<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // READ ALL (GET /api/genre)
    public function index()
    {
        return response()->json(Genre::all(), 200);
    }

    // CREATE (POST /api/genre)
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create($validatedData);

        return response()->json([
            'message' => 'Genre berhasil ditambahkan!',
            'data' => $genre
        ], 201);
    }

    // SHOW DETAIL (GET /api/genre/{id})
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'message' => 'Data Genre tidak ditemukan!'
            ], 404);
        }

        return response()->json($genre, 200);
    }

    // UPDATE (PUT/PATCH /api/genre/{id})
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'message' => 'Data Genre tidak ditemukan!'
            ], 404);
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($validatedData);

        return response()->json([
            'message' => 'Genre berhasil diperbarui!',
            'data' => $genre
        ], 200);
    }

    // DESTROY / DELETE (DELETE /api/genre/{id})
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'message' => 'Data Genre tidak ditemukan!'
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'message' => 'Genre berhasil dihapus!'
        ], 200);
    }
}