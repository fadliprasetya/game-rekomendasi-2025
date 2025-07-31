<?php
namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index() {
        $riwayats = Riwayat::with('game')->where('user_id', Auth::id())->get();
        return view('riwayat', compact('riwayats'));
    }
}
