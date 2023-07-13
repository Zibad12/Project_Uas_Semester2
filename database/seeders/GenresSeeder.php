<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genres::create([
            'id' => 1,
            'name' => 'Action',
        ]);
        Genres::create([
            'id' => 2,
            'name' => 'Adventure',
        ]);
        Genres::create([
            'id' => 3,
            'name' => 'Animation',
        ]);
        Genres::create([
            'id' => 4,
            'name' => 'Comedy',
        ]);
        Genres::create([
            'id' => 5,
            'name' => 'Crime',
        ]);
        Genres::create([
            'id' => 6,
            'name' => 'Documentary',
        ]);
    }
}
