<?php

namespace Database\Seeders;

use App\Models\Comments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comments::create([
            'date' => NOW(),
            'user_id' => 3,
            'movie_id' => 1,
            'comment' => 'As someone who has just seen this film, I was impressed by the deep and moving story. The film depicts life in prison in a powerful way and captures the friendships that develop between the inmates. Brilliant acting and a plot full of surprises kept me engaged throughout the film.',
        ]);
        Comments::create([
            'date' => NOW(),
            'user_id' => 3,
            'movie_id' => 2,
            'comment' => 'As my first experience with The Godfather, I was impressed by the power and complexity of the story. This film takes me to the world of mafia families which is dark and full of intrigue. Superb acting, powerful dialogues and realistic portrayal of the characters make this film truly memorable.',
        ]);
        Comments::create([
            'date' => NOW(),
            'user_id' => 3,
            'movie_id' => 3,
            'comment' => 'I just watched The Dark Knight and this movie really hit the ground running. I was blown away by Heath Ledger`s brilliant acting as the Joker. The story is intense and full of suspense, so I can`t stop watching. Spectacular action scenes and unexpected twists make this film worthy of being called one of the best superhero films.',
        ]);
        Comments::create([
            'date' => NOW(),
            'user_id' => 3,
            'movie_id' => 4,
            'comment' => 'As a new viewer of Schindler`s List, I was impressed by the emotional power of this film. The story of Oskar Schindler`s efforts to save Jews from the Holocaust shook my heart. Impressive acting and powerful direction make this film an unforgettable experience.',
        ]);
        Comments::create([
            'date' => NOW(),
            'user_id' => 3,
            'movie_id' => 5,
            'comment' => 'As someone who recently watched The Lord of the Rings: The Return of the King, I was blown away by the film`s epic scale and incredible visuals. The struggles of the characters to fight against the forces of evil and against incredible obstacles left me in awe. An engaging story, awesome special effects and strong acting make this film an amazing cinematic experience.',
        ]);
    }
}
