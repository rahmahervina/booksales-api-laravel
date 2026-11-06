<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // Read All (Hanya Admin)
    public function index()
    {
        $transactions = Transaction::with(['user', 'book'])->get();
        return response()->json(['data' => $transactions], 200);
    }

    // Create (Customer)
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|integer',
        ]);

        $transaction = Transaction::create($validatedData);

        return response()->json([
            'message' => 'Transaksi berhasil dibuat!',
            'data' => $transaction
        ], 201);
    }

    // Show per ID (Customer)
    public function show($id)
    {
        $transaction = Transaction::with(['user', 'book'])->find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Data tidak ditemukan!'], 404);
        }

        return response()->json(['data' => $transaction], 200);
    }

    // Update (Customer)
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Data tidak ditemukan!'], 404);
        }

        $validatedData = $request->validate([
            'quantity' => 'sometimes|integer|min:1',
            'total_price' => 'sometimes|integer',
        ]);

        $transaction->update($validatedData);

        return response()->json([
            'message' => 'Transaksi berhasil diperbarui!',
            'data' => $transaction
        ], 200);
    }

    // Destroy (Hanya Admin)
    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Data tidak ditemukan!'], 404);
        }

        $transaction->delete();

        return response()->json(['message' => 'Transaksi berhasil dihapus!'], 200);
    }
}