<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([

            'id' => 1,
            'title' => 'Sofia',
            'genre_id' => 1,
            'poster' => 'movie-01.jpg',
            'synopsis' => 'Sofia bocil kematian',
        ]);

        Movie::create([

            'id' => 2,
            'title' => 'U&I',
            'genre_id' => 2,
            'poster' => 'movie-02.jpg',
            'synopsis' => 'Kembar seiras',
        ]);

        Movie::create([

            'id' => 3,
            'title' => 'Bboiy',
            'genre_id' => 3,
            'poster' => 'movie-03.jpg',
            'synopsis' => 'Kuasa halilintar',
    
        ]);

        
    }
}
