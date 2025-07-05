    <div class="back-blog-section" style="padding: 80px 0; background-color: #f8f8f8;">
                    <div class="container">
                        {{-- Başlık Bölümü --}}
                        <div class="back-sec-title text-center mb-50">
                            <h5 class="back-subtitle" style="color: #0d1e50; font-size: 18px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Son Haberler</h5>
                            {{-- <h2 class="back-title mb-0" style="font-size: 42px; color: #0d1e50; font-weight: 700; line-height: 1.2;">Güncel <br>Bilgiye Ulaşın</h2> --}}
                        </div>

                        {{-- Slider Ayarları --}}
                        @php
                            $kaymaHizi = 3000; // Otomatik kaydırma hızı (milisaniye)
                            $masaustuSlideSayisi = 3; // Masaüstünde yan yana gösterilecek slide sayısı
                            $mobilSlideSayisi = 1;    // Mobilde yan yana gösterilecek slide sayısı
                            use App\Models\Haber;
                            $haberler = Haber::all();
                        @endphp
   <div class="blog-slider owl-carousel"
                             data-desktop-slides="{{ $masaustuSlideSayisi }}"
                             data-mobile-slides="{{ $mobilSlideSayisi }}"
                             data-scroll-speed="{{ $kaymaHizi }}">
                             @foreach ($haberler as $haber )


                            {{-- Örnek Blog Kartı 1 --}}
                            <div class="single-blog-card" style="background-color: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); transition: transform 0.3s ease-in-out; margin: 0 15px;">
                                <div class="blog-image" style="height: 250px; overflow: hidden;">
                                    <a href="#" style="display: block;"><img src="{{ asset('haber/' . $haber->resim) }}" alt="Blog Görseli" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"></a>
                                </div>
                                <div class="blog-content" style="padding: 25px;">
                                    <h3 class="blog-title" style="font-size: 24px; color: #0d1e50; font-weight: 700; margin-bottom: 15px;"><a href="#" style="color: #0d1e50; text-decoration: none; transition: color 0.3s ease-in-out;">{{$haber->baslik }}</a></h3>
                                    {{-- <p class="blog-description" style="font-size: 16px; color: #555; line-height: 1.6; margin-bottom: 20px;"></p> --}}
                                    <div class="blog-meta">
                                        <a href="#" class="read-more-btn" style="display: inline-block; color: #0d1e50; font-weight: 600; text-decoration: none; transition: color 0.3s ease-in-out;">Devamını Oku <i class="fa fa-arrow-right" style="margin-left: 8px;"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- Örnek Blog Kartı 2 --}}
    @endforeach
                        </div>
                        {{-- Not: Bu alana bir JS slider kütüphanesi (örn. Owl Carousel, Swiper) entegre edilmelidir. --}}
                    </div>
                </div>
