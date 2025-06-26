@extends('home-layout')
@section('page')

     <div class="back-wrapper">
            <div class="back-wrapper-inner">
                <!-- Back Breadcrumbs Start Here -->
                <div class="back-breadcrumbs back-blog-breadcrumbs">
        <div class="back-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="{{asset('assets/images/breadcrumbs/blog-banner.jpg')}}" alt="Breadcrumbs Image">
                        <img class="mobile" src="{{asset('assets/images/breadcrumbs/blog-banner-mobile.jpg')}}" alt="Breadcrumbs Image">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Blog Grid</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li>Blog</li>
                                        </ul>
                                    </div>
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
                                   <h1 class="mb-4">{{{$haber->baslik}}}</h1><hr>
                                <div class="blog-single-inner">
                                    <div class="row align-items-start">

                                        <!-- Sol: Resim -->
                                        <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                                            <div class="blog-image">
                                                <img src="{{{$haber->resim}}}" alt="" class="img-fluid w-100" style="object-fit:cover;">
                                            </div>
                                        </div>
                                        <!-- Sağ: Başlık ve Metin -->
                                        <div class="col-lg-7 col-md-12">
                                            <div class="blog-content">

                                            <p>{{$haber->metin}}</p>

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
