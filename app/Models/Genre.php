<?php

namespace App\Models;

class Genre
{
    public static function allData()
    {
        return [
            ['id' => 1, 'nama' => 'Fiction', 'deskripsi' => 'Buku karangan atau rekaan.'],
            ['id' => 2, 'nama' => 'Non-Fiction', 'deskripsi' => 'Buku berdasarkan fakta dan realita.'],
            ['id' => 3, 'nama' => 'Fantasy', 'deskripsi' => 'Buku dengan unsur sihir dan keajaiban.'],
            ['id' => 4, 'nama' => 'Mystery', 'deskripsi' => 'Buku bertema teka-teki dan detektif.'],
            ['id' => 5, 'nama' => 'Science Fiction', 'deskripsi' => 'Buku bertema teknologi dan masa depan.']
        ];
    }
}