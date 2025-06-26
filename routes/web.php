<?php


use App\Http\Controllers\BaskaninMesajlariController;
use App\Http\Controllers\HaberController;
use App\Http\Controllers\SayfalarController;
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
Route::get('/yonetim-kurulu',[YonetimKuruluModelController::class,'index'])->name('yonetim');
Route::get('/baskan',[BaskaninMesajlariController::class,'index'])->name('baskan');
Route::get('/tarihce',[TarihceController::class,'index'])->name('tarihce');
Route::get('/uyeler',[UyelerController::class,'index'])->name('uyelerimiz');
Route::get('/haberler',[HaberController::class,'index'])->name('haberler');
Route::get('/duyurular',[HaberController::class,'duyurular'])->name('duyurular');
Route::get('/etkinlikler',[HaberController::class,'etkinlikler'])->name('etkinlikler');
Route::get('/haber/{id}',[HaberController::class,'haberdetay'])->name('haberdetay');
Route::get('/isbirlikleri',[HaberController::class,'isbirlikleri'])->name('isbirlikleri');
Route::get('/sayfa/{id}',[SayfalarController::class,'index'])->name('sayfa');







// backend routerları
Route::get('/yonetim',function(){ return view('panel.pages.mian');});
Route::get('/yonetim/hakkimizda',[HakkimizdaController::class,'update'])->name('hakkimizda-panel');
Route::post('/panel/hakkimizda-post',[HakkimizdaController::class,'hakkimizdaPost'])->name('hakkimizda-update');





require __DIR__.'/auth.php';
