@extends('home-layout')
@section('page')

<div class="container py-5">
    <h1 class="mb-4">İş Birliklerimiz</h1>
    <div class="row">
        <div class="col-12">
            @foreach($data as $veri)
                <div class="d-flex align-items-start mb-4 p-3 border rounded bg-white shadow-sm">
                    @if($veri->resim)
                        <img src="{{ $veri->resim }}" alt="Duyuru Resmi" class="me-3" style="width:100px; height:100px; object-fit:cover; border-radius:8px;">
                    @else
                        <div class="me-3" style="width:100px; height:100px; background:#eee; display:flex; align-items:center; justify-content:center; border-radius:8px;">
                            <span class="text-muted">Resim Yok</span>
                        </div>
                    @endif
                    <div>
                        <h5 class="mb-2">{{ $veri->unvan }}</h5>
                        <p class="mb-0">{{ $veri->metin }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>



@endsection
