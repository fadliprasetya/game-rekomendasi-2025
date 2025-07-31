<?php
namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $games = Game::all();
        return view('admin.index', compact('games'));
    }

    public function tambah() {
        return view('admin.tambah');
    }

    public function store(Request $request) {
        Game::create($request->all());
        return redirect()->route('admin.index');
    }
}
