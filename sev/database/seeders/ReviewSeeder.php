<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([

            'id' => 1,
            'movie_id' => 1,
            'user'=> 'Abryan',
            'rating'=> '9/10',
            'date' => '21 May 2024',
        ]);

        Review::create([

            'id' => 2,
            'movie_id' => 2,
            'user'=> 'Ara',
            'rating'=> '0/10',
            'date' => '20 Mar 2024',
        ]);

    Review::create([

            'id' => 3,
            'movie_id' => 3,
            'user'=> 'Dava',
            'rating'=> '8/10',
            'date' => '20 Mei 2024',
    
        ]);

        
    }
}
