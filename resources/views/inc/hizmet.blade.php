@php
    use App\Models\YonetimKurulu;
    use App\Models\Ayarlar;
    $kaymaHizi = 3000; // Otomatik kaydırma hızı (milisaniye)
    $masaustuSlideSayisi = 5; // Masaüstünde yan yana gösterilecek kutu sayısı
    $mobilSlideSayisi = 1;    // Mobilde yan yana gösterilecek kutu sayısı
    $yonetimkurulu = YonetimKurulu::all();
    $site = Ayarlar::find(1);
    $maviRenk = $site->renk ?? '#0d1e50';
@endphp
<br><br><br>
<div class="container-fluid">
    {{-- Modern ve Süslenmiş Başlık Bölümü --}}
    <div class="back-sec-title text-center mb-50 md-mb-30" style="position: relative;">
        <div style="display: flex; justify-content: center; align-items: center; gap: 18px; margin-bottom: 10px;">
            <span style="display: inline-block; width: 48px; height: 3px; border-radius: 2px; background: linear-gradient(90deg, {{ $maviRenk }}, #4e8cff 80%);"></span>
            <svg width="38" height="38" viewBox="0 0 38 38" fill="none" style="vertical-align: middle;">
                <circle cx="19" cy="19" r="19" fill="{{ $maviRenk }}" fill-opacity="0.12"/>
                <path d="M19 10L22.09 16.26L29 17.27L23.5 21.97L24.82 28.72L19 25.27L13.18 28.72L14.5 21.97L9 17.27L15.91 16.26L19 10Z" fill="{{ $maviRenk }}"/>
            </svg>
            <span style="display: inline-block; width: 48px; height: 3px; border-radius: 2px; background: linear-gradient(90deg, #4e8cff 20%, {{ $maviRenk }} 100%);"></span>
        </div>
        <h2 class="back-subtitle" style="color: {{ $maviRenk }}; font-size: 2.2rem; font-weight: 800; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 0; line-height: 1.1; font-family: 'Montserrat', 'Poppins', Arial, sans-serif; text-shadow: 0 2px 8px rgba(77, 130, 255, 0.08);">
            Yönetim Kurulu
        </h2>
        <div style="margin-top: 12px; color: #555; font-size: 1.08rem; font-weight: 400; letter-spacing: 0.2px;">
            <span style="opacity: 0.85;">Birlikte güçlüyüz! Yönetim kurulu üyelerimizi keşfedin.</span>
        </div>
    </div>

    <div class="uye-slider owl-carousel owl-theme"
         data-desktop-slides="{{ $masaustuSlideSayisi }}"
         data-mobile-slides="{{ $mobilSlideSayisi }}"
         data-scroll-speed="{{ $kaymaHizi }}">
        @foreach ($yonetimkurulu as $uye)
            <div class="uye-card" style="background: #fff; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.10); overflow: hidden; margin: 0 10px; display: flex; flex-direction: column; align-items: center; min-height: 500px; position: relative;">
                <div class="uye-card-img" style="width: 100%; height: 370px; background: #f5f5f5; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                    <img src="{{ asset('kurul/' . $uye->resim) }}" alt="Yönetim Kurulu Üyesi" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                {{-- Beyaz alan: sadece 4px bırak, çizgi gibi dursun --}}
                <div style="width: 100%; height: 4px; background: #fff;"></div>
                {{-- Mavi alan başlıyor --}}
                <div class="uye-card-blue" style="width: 100%; background: {{ $maviRenk }}; padding: 18px 12px 12px 12px; text-align: center;">
                    <div class="uye-card-name" style="font-weight: 700; color: #fff; font-size: 18px; margin-bottom: 2px;">
                        {{ $uye->adsoyad }}
                    </div>
                    <div class="uye-card-meslek" style="font-size: 15px; color: #fff; margin-bottom: 8px;">
                        {{ $uye->statu ?? '-' }}
                    </div>
                </div>
                {{-- Mavi alan bitiyor --}}
                <div class="uye-card-footer" style="width: 100%; background: #f8f8f8; border-top: 1px solid #eee; padding: 10px 0;">
                    <span style="font-size: 14px; color: {{ $maviRenk }}; font-weight: 600;">

                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){
    $('.uye-slider').owlCarousel({
        loop: true,
        margin: 24,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: {{ $kaymaHizi ?? 3000 }},
        responsive: {
            0: {
                items: {{ $mobilSlideSayisi ?? 1 }}
            },
            768: {
                items: {{ $masaustuSlideSayisi ?? 3 }}
            }
        }
    });
});
</script>
