<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Countries::create([
            'id' => 1,
            'name' => 'United States',
            'flag_url' => 'https://cdn.countryflags.com/thumbs/united-states-of-america/flag-800.png',
        ]);
        Countries::create([
            'id' => 2,
            'name' => 'United Kingdom',
            'flag_url' => 'https://cdn.countryflags.com/thumbs/united-kingdom/flag-800.png',
        ]);
        Countries::create([
            'id' => 3,
            'name' => 'Canada',
            'flag_url' => 'https://cdn.countryflags.com/thumbs/canada/flag-800.png',
        ]);
        Countries::create([
            'id' => 4,
            'name' => 'Australia',
            'flag_url' => 'https://cdn.countryflags.com/thumbs/australia/flag-800.png',
        ]);
        Countries::create([
            'id' => 5,
            'name' => 'India',
            'flag_url' => 'https://cdn.countryflags.com/thumbs/india/flag-800.png',
        ]);
        Countries::create([
            'id' => 6,
            'name' => 'Indonesia',
            'flag_url' => 'https://cdn.countryflags.com/thumbs/indonesia/flag-800.png',
        ]);
    }
}
