@extends('home-layout')
@section('page')

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
                            <h1 class="breadcrumbs-title">Duyurular</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container py-5">
    <h1 class="mb-4">Duyurular</h1>
    <div class="row">
        <div class="col-12">
            @foreach($duyurular as $duyuru)
                <div class="d-flex align-items-start mb-4 p-3 border rounded bg-white shadow-sm">
                    @if($duyuru->resim)
                        <img src="{{ $duyuru->resim }}" alt="Duyuru Resmi" class="me-3" style="width:100px; height:100px; object-fit:cover; border-radius:8px;">
                    @else
                        <div class="me-3" style="width:100px; height:100px; background:#eee; display:flex; align-items:center; justify-content:center; border-radius:8px;">
                            <span class="text-muted">Resim Yok</span>
                        </div>
                    @endif
                    <div>
                        <h5 class="mb-2">{{ $duyuru->baslik }}</h5>
                        <p class="mb-0">{{ $duyuru->metin }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

  @include('inc.igalani')

@endsection
