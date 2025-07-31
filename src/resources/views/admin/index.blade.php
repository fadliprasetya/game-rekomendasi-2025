@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-xl font-bold">Daftar Game</h2>
    <a href="{{ route('admin.tambah') }}" class="text-blue-500">+ Tambah Game</a>
    <ul>
        @foreach ($games as $game)
        <li>{{ $game->nama }} ({{ $game->genre }})</li>
        @endforeach
    </ul>
</div>
@endsection
