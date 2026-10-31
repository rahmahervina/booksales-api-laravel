<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // READ ALL (GET /api/author)
    public function index()
    {
        return response()->json(Author::all(), 200);
    }

    // CREATE (POST /api/author)
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email',
        ]);

        $author = Author::create($validatedData);

        return response()->json([
            'message' => 'Author berhasil ditambahkan!',
            'data' => $author
        ], 201);
    }

    // SHOW DETAIL (GET /api/author/{id})
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'message' => 'Data Author tidak ditemukan!'
            ], 404);
        }

        return response()->json($author, 200);
    }

    // UPDATE (PUT/PATCH /api/author/{id})
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'message' => 'Data Author tidak ditemukan!'
            ], 404);
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email,' . $id,
        ]);

        $author->update($validatedData);

        return response()->json([
            'message' => 'Author berhasil diperbarui!',
            'data' => $author
        ], 200);
    }

    // DESTROY / DELETE (DELETE /api/author/{id})
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'message' => 'Data Author tidak ditemukan!'
            ], 404);
        }

        $author->delete();

        return response()->json([
            'message' => 'Author berhasil dihapus!'
        ], 200);
    }
}