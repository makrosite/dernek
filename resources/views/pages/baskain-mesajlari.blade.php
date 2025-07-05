@extends('home-layout')
@section('page')
@php
use App\Models\BaskaninMesajlari;

$baskan = BaskaninMesajlari::find(1);
@endphp
<div class="back-wrapper">
    <div class="back-wrapper-inner">
        <!-- Back Breadcrumbs Start Here -->
        <div class="back-breadcrumbs">
            <div class="breadcrumbs-wrap">
 @php
    use App\Models\Ayarlar;
    $resim = Ayarlar::find(1);
    $bc = $resim->bc;
@endphp
                <img class="desktop" src="{{ asset('logo/' . $bc) }}" alt="Breadcrumbs Image" style="width:100%; height:430px; object-fit:cover; object-position:center;">
                <img class="mobile" src="{{ asset('logo/' . $bc) }}" alt="Breadcrumbs Image" style="width:100%; height:230px; object-fit:cover; object-position:center;">

                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">Başkanın Mesajı</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back Breadcrumbs End Here -->

        <section class="baskan-mesaji-section py-5" style="background: #f8f9fa;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="back-title mb-2" style="font-weight:700;">{!! $baskan->baslik ?? '' !!}</h2>
                    <p class="lead" style="color:#666;">{{ $baskan->alt_baslik ?? '' }}</p>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-5 mb-4 mb-md-0 text-center">
                        <img src="{{ asset('gorseller/' . $baskan->resim) }}" alt="Başkan" style="width:250px; height:320px; object-fit:cover; border:6px solid #008000; box-shadow: 0 0 0 6px #e6f4ea; border-radius:12px;">
                        <h4 class="mt-3 mb-1" style="font-weight:700;">{{ $baskan->ad_soyad ?? '' }}</h4>
                        <p class="text-success mb-0" style="font-size:1.1rem; font-weight:600;">Yönetim Kurulu Başkanı</p>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="p-4" style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.06); border-left: 5px solid #008000;">
                            <h3 style="font-weight: 600; color: #222;">Değerli Üyelerimiz ve Kıymetli Misafirlerimiz,</h3>
                            <p style="font-size: 1.15rem; color: #444; line-height: 2;">
                                {!! $baskan->mesaj ?? '' !!}
                            </p>
                            <p class="mt-4" style="font-weight:600; color:#008000;">Sevgi ve Saygılarımla,<br>{{ $baskan->ad_soyad ?? '' }}<br>Yönetim Kurulu Başkanı</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Contact Box here -->
        @include('inc.igalani')
        <!-- End Contact Box here -->

    </div>
</div>

@endsection
