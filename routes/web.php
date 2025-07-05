<?php


use App\Http\Controllers\AyarlarController;
use App\Http\Controllers\BagisController;
use App\Http\Controllers\BankalarController;
use App\Http\Controllers\HizmetController;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\MesajlarController;
use App\Http\Controllers\SssController;
use App\Models\Isbirlikleri;
use App\Models\YonetimKuruluModel;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaberController;
use App\Http\Controllers\KurumController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TesvikController;
use App\Http\Controllers\UyelerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TarihceController;
use App\Http\Controllers\SayfalarController;
use App\Http\Controllers\HakkimizdaController;
use App\Http\Controllers\IsbirlikleriController;
use App\Http\Controllers\SabitSayfalarController;
use App\Http\Controllers\YonetimKuruluController;
use App\Http\Controllers\BaskaninMesajlariController;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/yonetim/yonetici-bilgileri', [\App\Http\Controllers\ProfileController::class, 'yoneticiBilgileri'])->name('admin.info');
    Route::post('/yonetim/yonetici-bilgileri', [\App\Http\Controllers\ProfileController::class, 'yoneticiBilgileriGuncelle'])->name('admin.update');
});
/// frontend Routeları


Route::get('/', function () {return view('pages.anasayfa');})->name('anasayfa');
Route::get('/hakkinda',[HakkimizdaController::class,'index'])->name('hakkinda');
Route::get('/yonetim-kurulu',[YonetimKuruluController::class,'index'])->name('yonetim');
Route::get('/baskan',[BaskaninMesajlariController::class,'index'])->name('baskan');
Route::get('/tarihce',[TarihceController::class,'index'])->name('tarihce');
Route::get('/uyelerimiz',[UyelerController::class,'index'])->name('uyelerimiz');
Route::get('/haberler',[HaberController::class,'index'])->name('haberler');
Route::get('/iletisim',[IletisimController::class,'index'])->name('iletisim');
Route::post('/mesajgonder',[IletisimController::class,'mesajgonder'])->name('mesajgonder');
Route::get('/duyurular',[HaberController::class,'duyurular'])->name('duyurular');
Route::get('/etkinlikler',[HaberController::class,'etkinliksayfa'])->name('etkinlikler');
Route::get('/haber/{id}',[HaberController::class,'haberdetay'])->name('haberdetay');
Route::get('/isbirliklerimiz',[HaberController::class,'isbirlikleri'])->name('isbirlikleri');
Route::get('/sayfa/{id}',[SayfalarController::class,'index'])->name('sayfa');
Route::get('/tesvik',[TesvikController::class,'index'])->name('tesvikhibe');
Route::get('/tesvikdetay/{id}',[TesvikController::class,'tesvikdetay'])->name('tesvikdetay');
Route::get('/hizmetdetay/{id}',[HizmetController::class,'hizmetdetay'])->name('hizmetdetay');

// Üye Kayıt Sayfası
Route::get('/uye-kayit', function () {
    return view('pages.uye-kayit');
})->name('uye.kayit');

// Üye Kayıt Formu POST
Route::post('/uye-kayit', [App\Http\Controllers\UyelerController::class, 'uyeKayitPost'])->name('uye.kayit.post');


///  ADMİN ERİŞİMİ BURDAN SONRA
// backend routerları
Route::middleware('auth')->group(function () {
    Route::get('/yonetim',function(){ return view('panel.pages.mian');})->name('panel');
    Route::get('/yonetim/hakkimizda',[HakkimizdaController::class,'update'])->name('hakkimizda-panel');
    Route::post('/yonetim/hakkimizda-post',[HakkimizdaController::class,'hakkimizdaPost'])->name('hakkimizda-update');
    Route::get('/yonetim/slider',[SliderController::class,'slider'])->name('slider');
    Route::post('/yonetim-slider-ekle',[SliderController::class,'sliderEkle'])->name('slider-ekle');
    Route::get('/yonetim-slide-sil/{id}',[SliderController::class,'sliderSil'])->name('slide-sil');
    Route::get('/yonetim-slide-duzenle/{id}',[SliderController::class,'SlideDuzenle'])->name('slide-duzenle');
    Route::post('/yonetim-slider-guncelle/{id}',[SliderController::class,'SliderGuncelle'])->name('slider-guncelle');
    Route::get('/yonetin/sayfalar',[SayfalarController::class,'PanelSayfa'])->name('panel-sayfalar');
    Route::get('/yonetim/sayfalar/ekle',[SayfalarController::class,'PanelSayfaEkle'])->name('panel-sayfa-ekle');
    Route::post('/yonetim/sayfalar/ekle/post',[SayfalarController::class,'PanelSayfaEklePost'])->name('panel-sayfa-ekle-post');
    Route::get('/sayfaguncelle/{id}',action: [SayfalarController::class,'PanelSayfaGuncelle'])->name('sayfaguncelle');
    Route::post('sayfaguncellepost/{id}',[SayfalarController::class,'PanelSayfaGuncellePost'])->name('sayfaguncellepost');
    Route::get('/yonetim/sayfalar/sil/{id}',[SayfalarController::class,'PanelSayfaSil'])->name('panel-sayfa-sil');
    Route::get('/yonetim//sabitsayfalar',[SabitSayfalarController::class,'index'])->name('sabitsayfalar');
    Route::post('yonetin/baskaninmesaji',[BaskaninMesajlariController::class,'guncelle'])->name('baskanguncelle');
    Route::get('panel/haberler',[HaberController::class,'haberler'])->name('panel-haberler');
    Route::get('/yonetim/haber-duzenle/{id}',[HaberController::class,'haberduzenle'])->name('haber-duzenle');
    Route::post('yonetim/haber-duzenlePost/{id}',[HaberController::class,'haberduzenlePost'])->name('haber-duzenlePost');
    Route::get('yonetim/habersil/{id}',[HaberController::class,'haberSil'])->name('habersil');
    Route::get('/yonetim/haberekle',[HaberController::class,'HaberEkle'])->name('haberekle');
    Route::post('/yonetim/habereklePost',[HaberController::class,'HaberEklePost'])->name('habereklePost');
    Route::get('/yonetim/duyuru',[HaberController::class,'panelDuyurular'])->name('panelDuyuru');
    Route::get('/yonetim/duyuruekle',[HaberController::class,'DuyuruEkle'])->name('duyuruekle');
    Route::post('/yonetim/duyurueklepost',[HaberController::class,'DuyuruEklePost'])->name('duyurueklepost');
    Route::get('/yonetim/duyuruguncelle/{id}',[HaberController::class,'DuyuruGuncelle'])->name('duyuruguncelle');
    Route::post('/yonetim/duyuruguncellepost/{id}',[HaberController::class,'DuyuruGuncellePost'])->name('duyuruguncellepost');
    Route::get('/yonetim/duyurusil/{id}',[HaberController::class,'DuyuruSil'])->name('duyurusil');
    Route::get('/yonetim/etkinlik',[HaberController::class,'panelEtkinlik'])->name('paneletkinlik');
    Route::get('/yonetim/etkinlikekle',[HaberController::class,'EtkinlikEkle'])->name('etkinlikekle');
    Route::post('/yonetim/etkinlikeklepost',[HaberController::class,'EtkinlikEklePost'])->name('etkinlikeklepost');
    Route::get('/yonetim/etkinlikguncelle/{id}',[HaberController::class,'EtkinlikGuncelle'])->name('etkinlikguncelle');
    Route::post('/yonetim/etkinlikguncellepost/{id}',[HaberController::class,'EtkinlikGuncellePost'])->name('etkinlikguncellepost');
    Route::get('/yonetim/etkinliksil/{id}',[HaberController::class,'EtkinlikSil'])->name('etkinliksil');
    Route::get('/yonetim/Kurumlar',[KurumController::class,'index'])->name('panelkurumlar');
    Route::post('/yonetim/Kurumekle',[KurumController::class,'KurumEklePost'])->name('kurumelkepost');
    Route::get('/yonetim/kurumsil/{id}',[KurumController::class,'KurumSil'])->name('kurumsil');
    Route::get('/yonetim/tesvik',[TesvikController::class,'panel'])->name('paneltesvik');
    Route::post('/yonetim/tesvikekle',[TesvikController::class,'ekle'])->name('tesvikekle');
    Route::get('/yonetim/tesviksil/{id}',[TesvikController::class,'tesviksil'])->name('tesviksil');
    Route::get('/yonetim/isbirlikleri',[IsbirlikleriController::class,'panel'])->name('panelisbirlikleri');
    Route::post('/yonetim/isbirlikleriekle',[IsbirlikleriController::class,'ekle'])->name('isbirlikleriekle');
    Route::get('/yonetim/isbirliklerisil/{id}',[IsbirlikleriController::class,'sil'])->name('isbirliklerisil');
    Route::get('/yonetim/uyeler',[UyelerController::class,'panel'])->name('uyelerpanel');
    Route::get('/yonetim/uyeekle',[UyelerController::class,'ekle'])->name('uyeekle');
    Route::post('/yonetim/uyeeklepost',[UyelerController::class,'eklepost'])->name('uyeeklepost');
    Route::get('/yonetim/uyeguncelle/{id}',[UyelerController::class,'uyeguncelle'])->name('uyeguncelle');
    Route::post('/yonetim/uyeguncellepost/{id}',[UyelerController::class,'uyeguncellepost'])->name('uyeguncellepost');
    Route::get('/yonetim/uyesil/{id}',[UyelerController::class,'uyesil'])->name('uyesil');
    Route::get('yonetim/uyedurum/{id}',[UyelerController::class,'durum'])->name('uyedurumu');
    Route::get('/yonetim/kurul',[YonetimKuruluController::class,'panel'])->name('panelkurul');
    Route::post('/yonetim/kurulekle',[YonetimKuruluController::class,'ekle'])->name('panelkurulekle');
    Route::get('/yonetim/kurulsil/{id}',[YonetimKuruluController::class,'sil'])->name('panelkurulsil');
    Route::get('/yonetim/bagis/',[BagisController::class,'panel'])->name('panelbagis');
    Route::get('/yonetim/bagissil/{id}',[BagisController::class,'sil'])->name('bagissil');
    Route::post('/yonetim/bagisekle',[BagisController::class,'ekle'])->name('bagisekle');
    Route::get('/yonetim/bagisdurum/{id}',[BagisController::class,'durum'])->name('bagisdurum');
    Route::get('/yonetim/hizmet/',[HizmetController::class,'panel'])->name('panelhizmet');
    Route::post('/yonetim/hizmetekle',[HizmetController::class,'ekle'])->name('hizmetekle');
    Route::get('/yonetim/hizmetsil/{id}',[HizmetController::class,'sil'])->name('hizmetsil');
    Route::get('/yonetim/hizmetdurum/{id}',[HizmetController::class,'durum'])->name('hizmetdurum');
    Route::get('yonetim/genelayarlar',[AyarlarController::class,'genelayarlar'])->name('genelayarlar');
    Route::post('yonetim/genelayarlarpost',[AyarlarController::class,'genelayarlarpost'])->name('genelayarlarpost');
    Route::get('yonetim/iletisimayar',[AyarlarController::class,'iletisimayar'])->name('iletisimayar');
    Route::post('yonetim/iletisimayarpost',[AyarlarController::class,'iletisimayarpost'])->name('iletisimayarpost');
    Route::get('yonetim/smayar',[AyarlarController::class,'smayar'])->name('smayar');
    Route::post('yonetim/smayarpost',[AyarlarController::class,'smayarpost'])->name('smayarpost');
    Route::get('yonetim/logoayar',[AyarlarController::class,'logoayar'])->name('logoayar');
    Route::post('yonetim/logopost',[AyarlarController::class,'logopost'])->name('logopost');
    Route::get('yonetim/logosil/{id}',[AyarlarController::class,'logosil'])->name('logosil');
    Route::get('yonetim/bankalar',[BankalarController::class,'panel'])->name('bankalarpanel');
    Route::get('yonetim/bankasil/{id}',[BankalarController::class,'sil'])->name('bankasil');
    Route::get('yonetim/bankadurum/{id}',[BankalarController::class,'durum'])->name('bankadurum');
    Route::post('yonetim/bankaekle',[BankalarController::class,'ekle'])->name('bankaekle');
    Route::get( 'yonetim/sss',[SssController::class,'panel'])->name('ssspanel');
    Route::post('yonetim/ekle',[SssController::class,'eklepost'])->name('ssspost');
    Route::get('yonetim/sil/{id}',[SssController::class,'sil'])->name('sssSil');
    Route::get( 'yonetim/mesajlar',[MesajlarController::class,'panel'])->name('mesajlarpanel');
    Route::get('yonetim/mesajgoster/{id}',[MesajlarController::class,'goster'])->name('mesajgoster');
    Route::get('yonetim/mesajsil/{id}',[MesajlarController::class,'sil'])->name('mesajsil');
});

// /makropanel login ekranı
Route::get('/makropanel', function() {
    return view('auth.login');
})->name('login');

// /makropanel POST login işlemi
// Tüm diğer istekleri anasayfaya yönlendir

require __DIR__.'/auth.php';

Route::get('/bagis-yap', function () {
    return view('pages.bagis-yap');
})->name('bagis.yap');

Route::post('/bagis-yap', [App\Http\Controllers\BagisController::class, 'store'])->name('bagis.store');
