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
                                    <h1 class="breadcrumbs-title">Haberler</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Back Breadcrumbs End Here -->

                <!-- Start Blog here -->
                <div id="back-blog" class="back-blog back-blog-page pt-120">
                    <div class="container-fluid" style="padding-left:120px; padding-right:120px;">
                        <div class="row">
                            <div class="col-lg-12 back-content-sticky">
                                <div class="row blog-grid">


                                    @foreach($haberler as $haber)
                                    <div class="single-blog col-md-4">
                                        <div class="inner-blog">
                                            <div class="blog-img">
                                                <img src=" {{$haber->resim}}" alt="Blog Image">
                                            </div>
                                            <div class="blog-content">
                                                <div class="top-part">
                                                    <div class="date-part">
                                                        <span aria-hidden="true" class="date-icon icon_clock_alt"></span>
                                                       {{$haber->created_at}}
                                                    </div>
                                                    <h3 class="blog-title">
                                                        <a href="{{ route('haberdetay', ['id' => $haber->id]) }}"> {{$haber->baslik}}</a>
                                                    </h3>
                                                    <p class="blog-desc">
                                                    {{$haber->metin}}

                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Blog here -->
            </div>
        </div>
          @include('inc.igalani')

@endsection
