# 🎮 Game Rekomendasi 2025

Sistem rekomendasi game berbasis Laravel + Docker dengan fitur filtering berdasarkan **genre** dan **rating**.

## 🚀 Fitur

- Rekomendasi Game Berdasarkan Genre
- Filter Berdasarkan Rating
- Tampilan UI Sederhana (Blade)
- Laravel 10
- Docker Compose untuk PHP + MySQL + Nginx
- SSL Self-Signed

## 🧑‍💻 Instalasi

```bash
git clone https://github.com/fadliprasetya/game-rekomendasi-2025.git
cd game-rekomendasi-2025

# Copy environment
cp .env.example .env

# Jalankan Docker
docker-compose up -d --build

# Masuk ke container Laravel
docker exec -it game-app bash

# Jalankan migration dan serve
php artisan migrate
php artisan serve --host=0.0.0.0 --port=9000
