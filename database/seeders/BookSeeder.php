<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Bumi', 'price' => 95000],
            ['title' => 'Laskar Pelangi', 'price' => 85000],
            ['title' => 'Perahu Kertas', 'price' => 90000],
            ['title' => 'Bumi Manusia', 'price' => 110000],
            ['title' => 'Manusia Setengah Salmon', 'price' => 75000],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}