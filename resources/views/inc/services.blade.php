@php
    use App\Models\Hizmet;
    use App\Models\Ayarlar;
    $hizmetler = Hizmet::where('durum', 1)->get();
    $ayar = Ayarlar::first();
    $hizmetler_bg = $ayar && $ayar->renk ? $ayar->renk : '#0d1e50';
@endphp
<div class="back-case-studies" style="background: {{ $hizmetler_bg }}; padding-top: 40px; padding-bottom: 40px;">
    <div class="container">
        <div class="row align-items-end mb-30 md-mb-20">
            <div class="col-lg-12">
                <div class="back-sec-title md-text-center text-center">
                    {{-- <h5 class="back-subtitle">Our Case Studies</h5> --}}
                    <h2 class="back-title white-color mb-0" style="text-align:center;">Hizmetlerimiz</h2>
                </div>
            </div>
            <div class="col-lg-4">
               
            </div>
        </div>
    </div>

    <div class="case-studies-slider">
        @foreach($hizmetler as $hizmet)
            <div class="single-case-studies">
                <div class="case-img">
                    @if(!empty($hizmet->resim))
                        <img  src="{{ asset('hizmet/' . $hizmet->resim) }}" alt="{{ $hizmet->baslik }}">
                    @else
                        <img src="assets/images/case/1.jpg" alt="Case Studies Image">
                    @endif
                </div>
                <div class="case-content">
                    <h5 class="case-subtitle">{{ $hizmet->menu }}</h5>
                    <h4 class="case-title">
                        <a href="{{ route('hizmetdetay', $hizmet->id) }}">{{ $hizmet->baslik }}</a>
                    </h4>
                </div>
            </div>
        @endforeach
    </div>
</div>