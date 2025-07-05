@extends('home-layout')

@section('page')
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
                                    <h1 class="breadcrumbs-title">{{$sayfa->sayfa_adi}}</h1>
                                    <div class="back-nav">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Back Breadcrumbs End Here -->

                <!-- Start About here -->
                <div class="back-about pt-120 md-pt-60 pb-120 md-pb-100">
                    <div class="
                               @php
                        if(empty($sayfa->resim)){

                                    echo "container";
                        }else{

                            echo "container-fluid";
                        }
                                @endphp

                  ">


                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="back-sec-title text-center mb-40">
                                    {{-- <h5 class="back-subtitle">Hakkımızda</h5> --}}
                                    <h2 class="back-title">{{$sayfa->baslik}}</h2>
                                </div>
                                <div class="back-desc text-center" style="font-size: 1.2rem; line-height: 2; color: #444;">
                                    <p>
                                {{$sayfa->metin}}

                                    </p>

                                        <img src="{{$sayfa->resim}}" class="rounded" alt="...">
                                           <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End About here -->

                <!-- Start Counter here -->
                    @include('inc.kayan-logolar')
                <!-- End Counter here -->


                <!-- Start Team here -->

                <!-- End Team here -->

                <!-- Start Contact Box here -->
                    @include('inc.igalani')
                <!-- End Contact Box here -->

            </div>
        </div>


@endsection
