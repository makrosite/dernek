@php
    use App\Models\Slider;
    $slider = Slider::all();
    $sliderHeight = '700px'; // Buradan yüksekliği kolayca değiştirebilirsin
@endphp

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

<style>
    @media (min-width: 992px) {
        .mySwiper .swiper-slide img {
            height: {{ $sliderHeight }};
        }
    }
    @media (max-width: 991px) {
        .mySwiper .swiper-slide img {
            height: 220px;
        }
    }
    .slider-caption {
        position: absolute;
        left: 0; top: 0; width: 100%; height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: linear-gradient(120deg, rgba(0,0,0,0.45) 60%, rgba(0,0,0,0.15) 100%);
        color: #fff;
        text-align: center;
        padding: 0 2rem;
        z-index: 2;
    }
    .slider-caption h2 {
        color: #fff;
        font-size: 3.2rem;
        font-weight: 900;
        letter-spacing: 2px;
        margin-bottom: 1.2rem;
        text-shadow: 0 6px 32px rgba(0,0,0,0.7), 0 1px 0 #222;
        line-height: 1.1;
        text-transform: uppercase;
        display: inline-block;
        padding: 0 1.5rem 0.3rem 1.5rem;
        border-radius: 8px;
        background: rgba(0,0,0,0.18);
        box-shadow: 0 2px 16px rgba(0,0,0,0.18);
    }
    .slider-caption p {
        color: #fff;
        font-size: 1.5rem;
        font-weight: 400;
        margin-bottom: 2rem;
        margin-top: 0.5rem;
        text-shadow: 0 2px 12px rgba(0,0,0,0.5);
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        letter-spacing: 0.5px;
        background: rgba(0,0,0,0.12);
        padding: 0.7rem 1.5rem;
        border-radius: 6px;
        box-shadow: 0 1px 8px rgba(0,0,0,0.10);
    }
    .slider-caption a.btn-modern {
        background: #fff;
        color: #222;
        font-weight: 600;
        padding: 0.8rem 2.2rem;
        border-radius: 30px;
        font-size: 1.1rem;
        box-shadow: 0 2px 12px rgba(0,0,0,0.12);
        transition: all 0.2s;
        text-decoration: none;
        border: none;
        display: inline-block;
        margin-top: 0.5rem;
    }
    .slider-caption a.btn-modern:hover {
        background: #222;
        color: #fff;
        box-shadow: 0 4px 24px rgba(0,0,0,0.18);
    }
    /* Swiper Pagination (dots) modern ve beyaz */
    .swiper-pagination-bullet {
        background: #fff;
        opacity: 0.7;
        width: 14px;
        height: 14px;
        margin: 0 6px !important;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0,0,0,0.12);
        border: 2px solid #fff;
        transition: all 0.2s;
    }
    .swiper-pagination-bullet-active {
        background: #fff;
        opacity: 1;
        width: 22px;
        height: 14px;
        border-radius: 16px;
        border: 2px solid #fff;
        box-shadow: 0 4px 16px rgba(0,0,0,0.18);
    }
    /* Swiper Navigation (arrows) tamamen beyaz ve modern */
    .swiper-button-next, .swiper-button-prev {
        color: #fff !important;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: rgba(0,0,0,0.22);
        box-shadow: 0 2px 12px rgba(0,0,0,0.18);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s, box-shadow 0.2s;
    }
    .swiper-button-next:hover, .swiper-button-prev:hover {
        background: #fff;
        color: #222 !important;
        box-shadow: 0 4px 24px rgba(0,0,0,0.22);
    }
    .swiper-button-next:after, .swiper-button-prev:after {
        font-size: 2.2rem;
        font-weight: bold;
        color: #fff !important;
        text-shadow: 0 2px 8px rgba(0,0,0,0.18);
    }
    .swiper-button-next:hover:after, .swiper-button-prev:hover:after {
        color: #222 !important;
    }
    @media (max-width: 991px) {
        .slider-caption h2 { font-size: 1.5rem; padding: 0 0.7rem 0.2rem 0.7rem; }
        .slider-caption p { font-size: 1rem; padding: 0.4rem 0.7rem; }
        .swiper-button-next, .swiper-button-prev { width: 36px; height: 36px; }
        .swiper-pagination-bullet { width: 10px; height: 10px; }
        .swiper-pagination-bullet-active { width: 16px; height: 10px; }
    }
</style>

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach($slider as $slide)
            <div class="swiper-slide" style="position: relative;">
                <img src="{{ asset('slider/'.$slide->resim) }}" alt="{{ $slide->baslik }}" style="width: 100%; object-fit: cover;">
                <div class="slider-caption">
                    <h2>{{ $slide->baslik }}</h2>
                    <p>{{ $slide->metin }}</p>
                    @if($slide->link)
                        <a href="{{ $slide->link }}" class="btn-modern">Detay</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.mySwiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'fade',
        speed: 800,
    });
</script>

