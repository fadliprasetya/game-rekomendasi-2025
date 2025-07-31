<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run()
    {
        $games = [
            ['title' => 'Elden Ring', 'genre' => 'RPG', 'rating' => 9.5],
            ['title' => 'FIFA 23', 'genre' => 'Sports', 'rating' => 8.2],
            ['title' => 'Valorant', 'genre' => 'FPS', 'rating' => 8.9],
            ['title' => 'Stardew Valley', 'genre' => 'Simulation', 'rating' => 9.0],
            ['title' => 'Dota 2', 'genre' => 'MOBA', 'rating' => 8.7],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
