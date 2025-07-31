@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-xl font-bold mb-4">Riwayat Rekomendasi Game</h2>
    <ul>
        @foreach ($riwayats as $riwayat)
        <li>{{ $riwayat->game->nama }} - {{ $riwayat->created_at->diffForHumans() }}</li>
        @endforeach
    </ul>
</div>
@endsection
