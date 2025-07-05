@php
use App\Models\BaskaninMesajlari;

$baskan = BaskaninMesajlari::find(1);
@endphp
<div class="back-about pt-40 md-pt-60 pb-140 md-pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                <div class="about-img">
                    <img class="rounded float-right img-fluid" src="{{ isset($baskan->resim) ? asset('gorseller/' . $baskan->resim) : 'https://www.egesiad.com/imgs/500x400x1/04bd4c28-b894-4637-84b8-256bbf6fe9a8_1.jpg' }}" alt="">
                </div>
                @if($baskan)
                @endif
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="back-sec-title">
                    <h5 class="back-subtitle">{{ $baskan->menu_adi ?? 'Başkanımız' }}</h5>
                    <h2 class="back-title">{!! $baskan->baslik ?? '' !!}</h2>
                    <p class="back-desc">{!! $baskan->mesaj ?? '' !!}</p>
                                        <h4 class="mt-3 mb-1" style="font-weight:700;">{{ $baskan->ad_soyad ?? '' }}</h4>
                    <p class="text-success mb-0" style="font-size:1.1rem; font-weight:600;">{{ $baskan->alt_baslik ?? '' }}</p>

                </div>

            </div>
        </div>
    </div>
</div>
