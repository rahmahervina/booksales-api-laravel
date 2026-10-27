<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'Tere Liye', 'email' => 'tereliye@example.com'],
            ['name' => 'Andrea Hirata', 'email' => 'andrea@example.com'],
            ['name' => 'Dee Lestari', 'email' => 'dee@example.com'],
            ['name' => 'Pramoedya Ananta Toer', 'email' => 'pram@example.com'],
            ['name' => 'Raditya Dika', 'email' => 'raditya@example.com'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}