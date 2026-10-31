<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Read all data (Author)
    public function index()
    {
        $authors = Author::all();
        return response()->json($authors, 200);
    }

    // Create data (Author)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:authors,email',
        ]);

        $author = Author::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return response()->json([
            'message' => 'Author berhasil ditambahkan!',
            'data' => $author
        ], 201);
    }
}