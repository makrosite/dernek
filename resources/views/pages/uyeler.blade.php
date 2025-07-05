@extends('home-layout')
@section('page')
@php
    use App\Models\Uyeler;
    $uyeler=Uyeler::where('durum',1)->get();
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
                                    <h1 class="breadcrumbs-title">Üyelerimiz</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Back Breadcrumbs End Here -->

                <!-- Profile Start here -->
                <div class="profile-card pt-120 pb-120">
                    <div class="container-fluid ">
                        <div class="row">
                        @foreach ($uyeler as $uye)
                             <div stlye="margin-top:20px;" class="col-lg-2 col-md-6 mb-30">
                                <div class="card">
                                    <div class="card-image" style="display: flex; justify-content: center; align-items: center; background: #f8f9fa; height: 300px;">
                                        <img src="{{ asset('uyeler/' . $uye->resim) }}" alt="" style="width:100%; height:100%; object-fit:cover; display:block; margin:auto;">
                                    </div>
                                    <div class="back-content">
                                        <h5 class="title">{{$uye->adi}} {{$uye->soyadi}}</h5>
                                        <p class="back-sec">{{$uye->meslegi}}</p>
                                        {{-- <ul>
                                            <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                            <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                            <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                            <li><a href="#"><span aria-hidden="true" class="social_vimeo"></span></a></li>
                                        </ul> --}}
                                    </div>
                                    <a href="tel:{{$uye->cep_telefonu}}" class="back-btns">İletişime Geç</a>
                                </div>
                            </div>
                             @endforeach
                         </div>
                    </div>
                </div>
                <!-- Profile End here -->

                <!-- Start Design Tool here -->
                  @include('inc.igalani')

            </div>
        </div>
        <div style="height:150px;"></div>
@endsection
