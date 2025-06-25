<?php


use App\Http\Controllers\BaskaninMesajlariController;
use App\Http\Controllers\TarihceController;
use App\Http\Controllers\UyelerController;
use App\Http\Controllers\YonetimKuruluModelController;
use App\Models\YonetimKuruluModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HakkimizdaController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/// frontend Routeları


Route::get('/', function () {return view('pages.anasayfa');})->name('anasayfa');
Route::get('/hakkinda',[HakkimizdaController::class,'index'])->name('hakkinda');
Route::get('/yonetim-kurulu',[YonetimKuruluModelController::class,'index']);
Route::get('/baskan',[BaskaninMesajlariController::class,'index']);
Route::get('/tarihce',[TarihceController::class,'index']);
Route::get('/uyeler',[UyelerController::class,'index']);






require __DIR__.'/auth.php';
