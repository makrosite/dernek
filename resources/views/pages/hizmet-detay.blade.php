@extends('home-layout')
@section('page')
    <!-- Back Breadcrumbs Start Here -->
                <div class="back-breadcrumbs back-blog-breadcrumbs">
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
                                    <h1 class="breadcrumbs-title">{{{$hizmet->baslik}}}</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Back Breadcrumbs End Here -->
  <div class="back-service-single back-gray-bg pt-120 pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="{{ asset('hizmet/' . $hizmet->resim) }}" alt="">
                            </div>
                            <div class="col-lg-7 pl-60">
                                <div class="back-sec-title mb-20">
                                    <h2 class="back-title mb-0">{{{$hizmet->baslik}}}</h2>
                                </div>

                                {{$hizmet->metin}}
                            </div>
                        </div>
                    </div>
                </div>
@endsection
