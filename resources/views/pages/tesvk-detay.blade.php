@extends('home-layout')
@section('page')

     <div class="back-wrapper">
            <div class="back-wrapper-inner">
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
                                    <h1 class="breadcrumbs-title">{{{$tesvik->baslik}}}</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Back Breadcrumbs End Here -->

                <!-- Start Blog here -->
                <div id="back-blog" class="back-blog-single">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                   <h1 class="mb-4">{{{$tesvik->baslik}}}</h1><hr>
                                <div class="blog-single-inner">
                                    <div class="row align-items-start">

                                        <!-- Sol: Resim -->
                                        <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                                            <div class="blog-image">
                                                <img src="{{ asset('kurum/' . $kurumlogo) }}" alt="" class="img-fluid w-100" style="object-fit:cover;">
                                            </div>
                                        </div>
                                        <!-- Sağ: Başlık ve Metin -->
                                        <div class="col-lg-7 col-md-12">
                                            <div class="blog-content">

                                            <p>{{$tesvik->metin}}</p>

                                            </div> <!-- blog-content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog here -->
            </div>
        </div>
@endsection
