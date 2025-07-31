@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-center">Rekomendasi Game 2025</h1>
    <p class="text-center text-gray-600">Selamat datang, {{ Auth::user()->name }}</p>
</div>
@endsection
