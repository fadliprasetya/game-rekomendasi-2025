<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Riwayat;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $genre = $request->input('genre');
        $minRating = $request->input('min_rating', 8.5);

        $games = Game::all()->toArray();

        $rekomendasi = array_filter($games, function ($game) use ($genre, $minRating) {
            return (!$genre || $game['genre'] === $genre) && $game['rating'] >= $minRating;
        });

        foreach ($rekomendasi as $game) {
            Riwayat::create([
                'game' => $game['title'],
                'genre' => $game['genre'],
                'rating' => $game['rating'],
            ]);
        }

        return view('games.rekomendasi', ['games' => $rekomendasi]);
    }
}
