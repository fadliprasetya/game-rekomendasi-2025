<!DOCTYPE html>
<html>

<head>
    <title>Rekomendasi Game</title>
    <style>
        body { font-family: sans-serif; background: #f2f2f2; padding: 20px; }
        .card { background: white; padding: 20px; margin-bottom: 10px; border-radius: 8px; }
    </style>
</head>
<body>
    <h1>Rekomendasi Game</h1>
    @forelse ($games as $game)
        <div class="card">
            <strong>{{ $game['title'] }}</strong><br>
            Genre: {{ $game['genre'] }}<br>
            Rating: {{ $game['rating'] }}
        </div>
    @empty
        <p>Tidak ada rekomendasi yang sesuai.</p>
    @endforelse
</body>
</html>
