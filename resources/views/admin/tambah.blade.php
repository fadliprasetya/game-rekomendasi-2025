@extends('layouts.app')

@section('title', 'Tambah Game')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tambah Game Baru</h1>

    <form method="POST" action="{{ route('admin.games.store') }}" class="space-y-4">
        @csrf
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Game</label>
            <input type="text" name="nama" id="nama" class="mt-1 p-2 w-full border rounded" required>
        </div>

        <div>
            <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
            <input type="text" name="genre" id="genre" class="mt-1 p-2 w-full border rounded" required>
        </div>

        <div>
            <label for="tahun_rilis" class="block text-sm font-medium text-gray-700">Tahun Rilis</label>
            <input type="number" name="tahun_rilis" id="tahun_rilis" class="mt-1 p-2 w-full border rounded" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
@endsection
