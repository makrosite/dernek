@extends('home-layout')
@section('page')
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
                                    <h1 class="breadcrumbs-title">İş Birlikleri</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
<style>
    .isbirligi-card {
        display: flex;
        flex-direction: row;
        align-items: stretch;
        gap: 28px;
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.07);
        padding: 28px 32px;
        margin-bottom: 32px;
        border: none;
        transition: box-shadow 0.2s, transform 0.2s;
        position: relative;
    }
    .isbirligi-card:hover {
        box-shadow: 0 8px 32px rgba(0,128,0,0.13), 0 2px 16px rgba(0,0,0,0.10);
        transform: translateY(-4px) scale(1.01);
    }
    .isbirligi-img, .isbirligi-noimg {
        width: 160px;
        height: 160px;
        min-width: 160px;
        min-height: 160px;
        object-fit: cover;
        border-radius: 14px;
        box-shadow: 0 2px 8px rgba(0,128,0,0.07);
        background: #f4f6f8;
        border: 2.5px solid #e6f4ea;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .isbirligi-noimg {
        background: linear-gradient(135deg, #e6f4ea 60%, #f4f6f8 100%);
        color: #aaa;
        font-size: 1.1rem;
        font-weight: 500;
    }
    .isbirligi-content {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .isbirligi-title {
        font-size: 1.35rem;
        font-weight: 700;
        color:rgb(56, 69, 167);
        margin-bottom: 0.5rem;
        word-break: break-word;
    }
    .isbirligi-desc {
        color: #444;
        font-size: 1.08rem;
        line-height: 1.7;
        margin-bottom: 0;
        word-break: break-word;
    }
    @media (max-width: 992px) {
        .isbirligi-img, .isbirligi-noimg {
            width: 110px;
            height: 110px;
            min-width: 110px;
            min-height: 110px;
        }
    }
    @media (max-width: 768px) {
        .isbirligi-card {
            flex-direction: column;
            align-items: flex-start;
            padding: 18px 12px;
            gap: 16px;
        }
        .isbirligi-img, .isbirligi-noimg {
            width: 80px;
            height: 80px;
            min-width: 80px;
            min-height: 80px;
        }
        .isbirligi-title {
            font-size: 1.08rem;
        }
        .isbirligi-desc {
            font-size: 0.98rem;
        }
    }
</style>
<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            @forelse($data as $veri)
                <div class="isbirligi-card">
                    @if($veri->resim)
                        <div class="isbirligi-img">
                            <img src="{{ asset('isbirlikleri/' . $veri->resim) }}" alt="İş Birliği Görseli" style="max-width:100%; max-height:100%; object-fit:contain; object-position:center; display:block;">
                        </div>
                    @else
                        <div class="isbirligi-noimg">
                            <span>Görsel Yok</span>
                        </div>
                    @endif
                    <div class="isbirligi-content">
                        <div class="isbirligi-title">{{ $veri->unvan }}</div>
                        <div class="isbirligi-desc">{{ $veri->metin }}</div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info text-center">Henüz iş birliği eklenmemiştir.</div>
            @endforelse
        </div>
    </div>
</div>
  @include('inc.igalani')



@endsection
