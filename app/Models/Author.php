<?php

namespace App\Models;

class Author
{
    public static function allData()
    {
        return [
            ['id' => 1, 'nama' => 'Tere Liye', 'email' => 'tereliye@example.com'],
            ['id' => 2, 'nama' => 'Andrea Hirata', 'email' => 'andrea@example.com'],
            ['id' => 3, 'nama' => 'Dee Lestari', 'email' => 'dee@example.com'],
            ['id' => 4, 'nama' => 'Pramoedya Ananta Toer', 'email' => 'pram@example.com'],
            ['id' => 5, 'nama' => 'Raditya Dika', 'email' => 'raditya@example.com']
        ];
    }
}