<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function create()
    {
        return view('admin.tambah');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'tahun_rilis' => 'required|integer',
        ]);

        Game::create($validated);
        return redirect()->back()->with('success', 'Game berhasil ditambahkan!');
    }
}
