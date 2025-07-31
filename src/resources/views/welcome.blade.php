<!DOCTYPE html>
<html>
<head>
    <title>Game Rekomendasi 2025</title>
</head>
<body style="font-family: Arial; background-color: #eef;">
    <h1>Selamat Datang di Game Rekomendasi 2025</h1>
    <form action="/rekomendasi" method="GET">
        <label>Genre:</label>
        <select name="genre">
            <option value="">Semua</option>
            <option value="RPG">RPG</option>
            <option value="Sports">Sports</option>
            <option value="FPS">FPS</option>
            <option value="Simulation">Simulation</option>
            <option value="MOBA">MOBA</option>
        </select>

        <label>Minimal Rating:</label>
        <input type="number" step="0.1" name="min_rating" value="8.5">

        <button type="submit">Cari Rekomendasi</button>
    </form>
</body>
</html>
