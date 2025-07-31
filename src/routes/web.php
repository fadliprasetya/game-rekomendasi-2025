use App\Http\Controllers\GameController;

Route::get('/rekomendasi', [GameController::class, 'index']);
