@extends('home-layout')
@section('page')
                <div class="back-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="bc.jpg" alt="Breadcrumbs Image">
                        <img class="mobile" src="assets/images/breadcrumbs/blog-banner-mobile.jpg" alt="Breadcrumbs Image">
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
<div class="container py-5">
    <h1 class="mb-4">Etkinlikler</h1>
    <div class="row">
        <div class="col-12">
            @foreach($etkinlikler as $duyuru)
                <div class="d-flex align-items-start mb-4 p-3 border rounded bg-white shadow-sm">
                    @if($duyuru->resim)
                        <img src="{{ asset('etkinlik/' . $duyuru->resim) }}" alt="Duyuru Resmi" class="me-3" style="width:100px; height:100px; object-fit:cover; border-radius:8px;">
                    @else
                        <div class="me-3" style="width:100px; height:100px; background:#eee; display:flex; align-items:center; justify-content:center; border-radius:8px;">
                            <span class="text-muted">Resim Yok</span>
                        </div>
                    @endif
                    <div style="margin-left:50px;">
                          <h4 class="mb-2">{{ $duyuru->tarih }}</h4><hr/>
                        <h5 class="mb-2">{{ $duyuru->baslik }}</h5><hr/>
                   {!! $duyuru->metin !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div style="height:150px;"></div>



@endsection
