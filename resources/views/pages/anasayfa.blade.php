@extends('home-layaut')


@section('page')

  <div class="back-wrapper">
            <div class="back-wrapper-inner">

                <!-- Slider Start -->
               @include('inc.slider')
               @include('inc.kayan-duyurular')
                <!-- Slider End -->
               @include('inc.kayan-logolar')

                {{-- Blog Kartları Kayan Alanı --}}
                <div class="back-blog-section" style="padding: 80px 0; background-color: #f8f8f8;">
                    <div class="container">
                        {{-- Başlık Bölümü --}}
                        <div class="back-sec-title text-center mb-50">
                            <h5 class="back-subtitle" style="color: #0d1e50; font-size: 18px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Blogumuzdan Son Haberler</h5>
                            <h2 class="back-title mb-0" style="font-size: 42px; color: #0d1e50; font-weight: 700; line-height: 1.2;">Güncel İçeriklerimizle <br>Bilgiye Ulaşın</h2>
                        </div>

                        {{-- Slider Ayarları --}}
                        @php
                            $kaymaHizi = 3000; // Otomatik kaydırma hızı (milisaniye)
                            $masaustuSlideSayisi = 3; // Masaüstünde yan yana gösterilecek slide sayısı
                            $mobilSlideSayisi = 1;    // Mobilde yan yana gösterilecek slide sayısı
                        @endphp

                        {{-- Blog Kartları Alanı (Slider) --}}
                        <div class="blog-slider owl-carousel"
                             data-desktop-slides="{{ $masaustuSlideSayisi }}"
                             data-mobile-slides="{{ $mobilSlideSayisi }}"
                             data-scroll-speed="{{ $kaymaHizi }}">
                            {{-- Örnek Blog Kartı 1 --}}
                            <div class="single-blog-card" style="background-color: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); transition: transform 0.3s ease-in-out; margin: 0 15px;">
                                <div class="blog-image" style="height: 250px; overflow: hidden;">
                                    <a href="#" style="display: block;"><img src="https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg" alt="Blog Görseli" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"></a>
                                </div>
                                <div class="blog-content" style="padding: 25px;">
                                    <h3 class="blog-title" style="font-size: 24px; color: #0d1e50; font-weight: 700; margin-bottom: 15px;"><a href="#" style="color: #0d1e50; text-decoration: none; transition: color 0.3s ease-in-out;">Dijital Dönüşümde Yeni Adımlar</a></h3>
                                    <p class="blog-description" style="font-size: 16px; color: #555; line-height: 1.6; margin-bottom: 20px;">İşletmenizi geleceğe taşımak için dijitalleşmenin önemini ve atılması gereken adımları keşfedin.</p>
                                    <div class="blog-meta">
                                        <a href="#" class="read-more-btn" style="display: inline-block; color: #0d1e50; font-weight: 600; text-decoration: none; transition: color 0.3s ease-in-out;">Devamını Oku <i class="fa fa-arrow-right" style="margin-left: 8px;"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- Örnek Blog Kartı 2 --}}
                            <div class="single-blog-card" style="background-color: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); transition: transform 0.3s ease-in-out; margin: 0 15px;">
                                <div class="blog-image" style="height: 250px; overflow: hidden;">
                                    <a href="#" style="display: block;"><img src="https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg" alt="Blog Görseli" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"></a>
                                </div>
                                <div class="blog-content" style="padding: 25px;">
                                    <h3 class="blog-title" style="font-size: 24px; color: #0d1e50; font-weight: 700; margin-bottom: 15px;"><a href="#" style="color: #0d1e50; text-decoration: none; transition: color 0.3s ease-in-out;">Yapay Zeka ve İş Dünyası</a></h3>
                                    <p class="blog-description" style="font-size: 16px; color: #555; line-height: 1.6; margin-bottom: 20px;">Yapay zekanın iş süreçlerinizi nasıl optimize edebileceğini ve rekabet avantajı sağlayabileceğini öğrenin.</p>
                                    <div class="blog-meta">
                                        <a href="#" class="read-more-btn" style="display: inline-block; color: #0d1e50; font-weight: 600; text-decoration: none; transition: color 0.3s ease-in-out;">Devamını Oku <i class="fa fa-arrow-right" style="margin-left: 8px;"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- Örnek Blog Kartı 3 --}}
                            <div class="single-blog-card" style="background-color: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); transition: transform 0.3s ease-in-out; margin: 0 15px;">
                                <div class="blog-image" style="height: 250px; overflow: hidden;">
                                    <a href="#" style="display: block;"><img src="https://www.egesiad.com/imgs/950x534x2/toplantY-organizasyonu_2.jpg" alt="Blog Görseli" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease-in-out;"></a>
                                </div>
                                <div class="blog-content" style="padding: 25px;">
                                    <h3 class="blog-title" style="font-size: 24px; color: #0d1e50; font-weight: 700; margin-bottom: 15px;"><a href="#" style="color: #0d1e50; text-decoration: none; transition: color 0.3s ease-in-out;">Sürdürülebilirlik Raporlaması Rehberi</a></h3>
                                    <p class="blog-description" style="font-size: 16px; color: #555; line-height: 1.6; margin-bottom: 20px;">Kurumsal sürdürülebilirlik hedeflerinize ulaşmak için etkili raporlama stratejileri.</p>
                                    <div class="blog-meta">
                                        <a href="#" class="read-more-btn" style="display: inline-block; color: #0d1e50; font-weight: 600; text-decoration: none; transition: color 0.3s ease-in-out;">Devamını Oku <i class="fa fa-arrow-right" style="margin-left: 8px;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Not: Bu alana bir JS slider kütüphanesi (örn. Owl Carousel, Swiper) entegre edilmelidir. --}}
                    </div>
                </div>
                {{-- Blog Kartları Kayan Alanı Sonu --}}



                <!-- Start Service here -->
                <div class="back-service">
                    <div class="container-fluid">
                        <div class="row justify-content-center mb-50 md-mb-30">
                            <div class="col-lg-12">
                                <div class="back-sec-title">
                                    <h5 class="back-subtitle">Hizmetlerimiz</h5>
                                    <h2 class="back-title mb-0">Lets Take Your </h2>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-md-6 border-top border-right res-service">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="assets/images/service/1.svg" alt="">
                                    </div>
                                    <h3 class="service-title">Design & <br>Development</h3>
                                    <a href="service-details.html" class="service-arrow-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0d1e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 border-top border-right pl-50 res-service">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="assets/images/service/2.svg" alt="">
                                    </div>
                                    <h3 class="service-title">Finance <br>Consulting</h3>
                                    <a href="service-details.html" class="service-arrow-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0d1e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 border-top border-right pl-50 res-service">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="assets/images/service/2.svg" alt="">
                                    </div>
                                    <h3 class="service-title">Finance <br>Consulting</h3>
                                    <a href="service-details.html" class="service-arrow-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0d1e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-6 border-top border-right pl-50 res-service">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="assets/images/service/2.svg" alt="">
                                    </div>
                                    <h3 class="service-title">Finance <br>Consulting</h3>
                                    <a href="service-details.html" class="service-arrow-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0d1e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-6 border-top border-right pl-50 res-service">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="assets/images/service/3.svg" alt="">
                                    </div>
                                    <h3 class="service-title">Audit & <br>Assurance</h3>
                                    <a href="service-details.html" class="service-arrow-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0d1e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 border-top pl-50 res-service">
                                <div class="single-service">
                                    <div class="service-icon">
                                        <img src="assets/images/service/4.svg" alt="">
                                    </div>
                                    <h3 class="service-title">User Interface <br>Design</h3>
                                    <a href="service-details.html" class="service-arrow-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0d1e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service here -->

                <!-- Start About here -->
                <hr>
                <h2 class="back-title text-center">Başkanımız Hakkında </h2>
                <div class="back-about pt-40 md-pt-60 pb-140 md-pb-100">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="offset-lg-1"></div>
                            <div class="col-lg-5">
                                <div class="about-img">
                                    <img class="rounded float-right" src="https://www.egesiad.com/imgs/500x400x1/04bd4c28-b894-4637-84b8-256bbf6fe9a8_1.jpg" alt="">
                                   <!-- <div class="about-text">
                                        <h3 class="about-text-title">1997</h3>
                                        <p class="about-text-desc">25+ years of <br>experience.</p>
                                    </div> -->
                                </div>
                            </div>
                            <div class="offset-lg-1"></div>
                            <div class="col-lg-5">
                                <div class="back-sec-title">
                                    <h5 class="back-subtitle">About Our Company</h5>
                                    <h2 class="back-title">The assistant for <br>your business</h2>
                                    <p class="back-desc">I'm a subhead that ges with a story.</p>
                                </div>


                                <div class="about-btn">
                                    <a href="about.html" class="back-btn">What is a VA exactly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End About here -->

                <!-- Start Service here -->
                <div class="back-case-studies">
                    <div class="container">
                        <div class="row align-items-end mb-50 md-mb-30">
                            <div class="col-lg-12">
                                <div class="back-sec-title md-text-center">
                                    {{-- <h5 class="back-subtitle">Our Case Studies</h5> --}}
                                    <h2 class="back-title white-color mb-0">Hizmetlerimiz</h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                {{-- <div class="back-sec-btn text-right md-text-center mb-15 md-mb-0 md-mt-15">
                                    <a href="portfolio.html" class="back-btn readon">See All Portfolio</a>
                                </div>  --}}
                            </div>
                        </div>
                    </div>

                    <div class="case-studies-slider">
                        <div class="single-case-studies">
                            <div class="case-img">
                                <img src="assets/images/case/1.jpg" alt="Case Studies Image">
                            </div>
                            <div class="case-content">
                                <h5 class="case-subtitle">Management</h5>
                                <h4 class="case-title"> <a href="portfolio-details.html"> Exceptional Execution <br>for Business </a></h4>
                            </div>
                        </div>
                        <div class="single-case-studies">
                            <div class="case-img">
                                <img src="assets/images/case/2.jpg" alt="Case Studies Image">
                            </div>
                            <div class="case-content">
                                <h5 class="case-subtitle">Analytics</h5>
                                <h4 class="case-title"> <a href="portfolio-details.html"> Business Insight and <br>Analytics </a></h4>
                            </div>
                        </div>
                        <div class="single-case-studies">
                            <div class="case-img">
                                <img src="assets/images/case/3.jpg" alt="Case Studies Image">
                            </div>
                            <div class="case-content">
                                <h5 class="case-subtitle">UX Leadership</h5>
                                <h4 class="case-title"> <a href="portfolio-details.html"> Kbiz Template for <br>Startup's and beyond. </a></h4>
                            </div>
                        </div>
                        <div class="single-case-studies">
                            <div class="case-img">
                                <img src="assets/images/case/4.jpg" alt="Case Studies Image">
                            </div>
                            <div class="case-content">
                                <h5 class="case-subtitle">Business Strategy</h5>
                                <h4 class="case-title"> <a href="portfolio-details.html"> Tips for Maintaining a <br>Positive Attitude </a></h4>
                            </div>
                        </div>
                        <div class="single-case-studies">
                            <div class="case-img">
                                <img src="assets/images/case/5.jpg" alt="Case Studies Image">
                            </div>
                            <div class="case-content">
                                <h5 class="case-subtitle">Design Phase</h5>
                                <h4 class="case-title"> <a href="portfolio-details.html"> Initial Concept and <br>Design Phase </a></h4>
                            </div>
                        </div>
                        <div class="single-case-studies">
                            <div class="case-img">
                                <img src="assets/images/case/3.jpg" alt="Case Studies Image">
                            </div>
                            <div class="case-content">
                                <h5 class="case-subtitle">UX Leadership</h5>
                                <h4 class="case-title"> <a href="portfolio-details.html"> Kbiz Template for <br>Startup's and beyond. </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service here -->

                <!-- Start Tab here -->
                <div class="back-tab">
                    <div class="container">
                        <div class="back-sec-title text-center mb-50 md-mb-30">
                            <h5 class="back-subtitle">Award Winning</h5>
                            <h2 class="back-title mb-0">Display your content inside of <br>tab components.</h2>
                        </div>
                        <div class="back-tab-gird">
                            <div class="nav-part text-center mb-40">
                                <ul class="nav nav-tabs back-nav-tabs">
                                    <li><a class="active show" data-toggle="tab" href="#one">Individuals</a></li>
                                    <li><a data-toggle="tab" href="#two">Business Growth</a></li>
                                    <li><a data-toggle="tab" href="#three">Financial Audit</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div id="one" class="single-tab-part tab-pane fade active show">
                                    <div class="content-part">
                                        <div class="tab-text">
                                            <h4 class="tab-title">Dedicated Customer <br>Success Team</h4>
                                            <p class="tab-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</p>
                                            <ul class="list-arrow">
                                                <li>Project strategy</li>
                                                <li>Accurate coding (development)</li>
                                                <li>Creative front end</li>
                                                <li>User interface design (UI)</li>
                                                <li>Interaction design</li>
                                            </ul>
                                        </div>
                                        <div class="tab-img">
                                            <img src="assets/images/tab/tab1.jpg" alt="Tab Image">
                                        </div>
                                    </div>
                                </div>
                                <div id="two" class="single-tab-part tab-pane fade">
                                    <div class="content-part">
                                        <div class="tab-text">
                                            <h4 class="tab-title">Dedicated Customer <br>Success Team</h4>
                                            <p class="tab-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</p>
                                            <ul class="list-arrow">
                                                <li>Project strategy</li>
                                                <li>Accurate coding (development)</li>
                                                <li>Creative front end</li>
                                                <li>User interface design (UI)</li>
                                                <li>Interaction design</li>
                                            </ul>
                                        </div>
                                        <div class="tab-img">
                                            <img src="assets/images/tab/tab2.jpg" alt="Tab Image">
                                        </div>
                                    </div>
                                </div>
                                <div id="three" class="single-tab-part tab-pane fade">
                                    <div class="content-part">
                                        <div class="tab-text">
                                            <h4 class="tab-title">Dedicated Customer <br>Success Team</h4>
                                            <p class="tab-desc">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt</p>
                                            <ul class="list-arrow">
                                                <li>Project strategy</li>
                                                <li>Accurate coding (development)</li>
                                                <li>Creative front end</li>
                                                <li>User interface design (UI)</li>
                                                <li>Interaction design</li>
                                            </ul>
                                        </div>
                                        <div class="tab-img">
                                            <img src="assets/images/tab/tab3.jpg" alt="Tab Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab here -->

                <!-- Start Team here -->
                <div class="back-team">
                    <div class="container-fluid">
                        <div class="back-sec-title text-center mb-50 md-mb-30">
                            {{-- <h5 class="back-subtitle">Üyelerimiz</h5> --}}
                            <h2 class="back-title mb-0">Üyelerimiz</h2>
                        </div>
                        <div class="team-slider owl-carousel">
                            <div class="single-team">
                                <div class="team-img">
                                    <img src="assets/images/team/1.jpg" alt="Team Image">
                                    <div class="team-info">
                                        <p class="desgnation">UX Designer</p>
                                        <h3 class="name"><a href="#">Max Conversion</a></h3>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_vimeo"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                                  <div class="single-team">
                                <div class="team-img">
                                    <img src="assets/images/team/1.jpg" alt="Team Image">
                                    <div class="team-info">
                                        <p class="desgnation">UX Designer</p>
                                        <h3 class="name"><a href="#">Max Conversion</a></h3>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_vimeo"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                                  <div class="single-team">
                                <div class="team-img">
                                    <img src="assets/images/team/1.jpg" alt="Team Image">
                                    <div class="team-info">
                                        <p class="desgnation">UX Designer</p>
                                        <h3 class="name"><a href="#">Max Conversion</a></h3>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_vimeo"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-team">
                                <div class="team-img">
                                    <img src="assets/images/team/2.jpg" alt="Team Image">
                                    <div class="team-info">
                                        <p class="desgnation">Manager</p>
                                        <h3 class="name"><a href="#">Jenifer Lopez</a></h3>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_vimeo"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-team">
                                <div class="team-img">
                                    <img src="assets/images/team/3.jpg" alt="Team Image">
                                    <div class="team-info">
                                        <p class="desgnation">Marketer</p>
                                        <h3 class="name"><a href="#">Chauffina Carr</a></h3>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_vimeo"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-team">
                                <div class="team-img">
                                    <img src="assets/images/team/2.jpg" alt="Team Image">
                                    <div class="team-info">
                                        <p class="desgnation">Designer</p>
                                        <h3 class="name"><a href="#">Barry Tone</a></h3>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_vimeo"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-team">
                                <div class="team-img">
                                    <img src="assets/images/team/5.jpg" alt="Team Image">
                                    <div class="team-info">
                                        <p class="desgnation">Manager</p>
                                        <h3 class="name"><a href="#">Weir Doe</a></h3>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                                        <li><a href="#"><span aria-hidden="true" class="social_vimeo"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Team here -->

                <!-- Start Faq here -->
                <div class="back-faq">
                    <div class="container">
                        <div class="back-sec-title text-center mb-50 md-mb-30">
                            <h5 class="back-subtitle">The FAQs</h5>
                            <h2 class="back-title mb-0">Frequently asked <br>questions</h2>
                        </div>
                        <div class="back-tab-gird grid-style">
                            <div class="row">
                                <div class="offset-lg-1"></div>
                                <div class="col-lg-3">
                                    <div class="nav-part">
                                        <span class="nav-title">Quick Navigation</span>
                                        <ul class="nav nav-tabs back-nav-tabs">
                                            <li><a class="active show" data-toggle="tab" href="#four">What We Do</a></li>
                                            <li><a data-toggle="tab" href="#five">Customer Support</a></li>
                                            <li><a data-toggle="tab" href="#six">Pricing & Support</a></li>
                                            <li><a data-toggle="tab" href="#seven">IT Solution</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="tab-content">
                                        <div id="four" class="single-tab-part tab-pane fade active show">
                                            <div id="back-accordion-1" class="back-accordion">
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-1">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                                1. How do we certify digitized receipts?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#back-accordion-1">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-2">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                                2. Website & Mobile app design
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#back-accordion-1">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-3">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                                3. What do I need to get started?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-3" class="collapse show" aria-labelledby="heading-3" data-parent="#back-accordion-1">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-4">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                                4.  How many websites can I use Kbiz in?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#back-accordion-1">
                                                        <div class="accordion-body mb-0">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading-5">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                                5. How do I reset my password?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#back-accordion-1">
                                                        <div class="accordion-body mb-0">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="five" class="single-tab-part tab-pane fade">
                                            <div id="back-accordion-2" class="back-accordion">
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-11">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-11" aria-expanded="true" aria-controls="collapse-11">
                                                                1. How do we certify digitized receipts?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-11" class="collapse" aria-labelledby="heading-11" data-parent="#back-accordion-2">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-21">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn" data-toggle="collapse" data-target="#collapse-21" aria-expanded="false" aria-controls="collapse-21">
                                                                2. Website & Mobile app design
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-21" class="collapse show" aria-labelledby="heading-21" data-parent="#back-accordion-2">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-31">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-31" aria-expanded="false" aria-controls="collapse-31">
                                                                3. What do I need to get started?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-31" class="collapse" aria-labelledby="heading-31" data-parent="#back-accordion-2">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-41">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-41" aria-expanded="false" aria-controls="collapse-41">
                                                                4.  How many websites can I use Kbiz in?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-41" class="collapse" aria-labelledby="heading-41" data-parent="#back-accordion-2">
                                                        <div class="accordion-body mb-0">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading-51">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-51" aria-expanded="false" aria-controls="collapse-51">
                                                                5. How do I reset my password?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-51" class="collapse" aria-labelledby="heading-51" data-parent="#back-accordion-2">
                                                        <div class="accordion-body mb-0">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="six" class="single-tab-part tab-pane fade">
                                            <div id="back-accordion-3" class="back-accordion">
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-12">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-12" aria-expanded="true" aria-controls="collapse-12">
                                                                1. How do we certify digitized receipts?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-12" class="collapse" aria-labelledby="heading-12" data-parent="#back-accordion-3">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-22">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-22" aria-expanded="false" aria-controls="collapse-22">
                                                                2. Website & Mobile app design
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-22" class="collapse" aria-labelledby="heading-22" data-parent="#back-accordion-3">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-32">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-32" aria-expanded="false" aria-controls="collapse-32">
                                                                3. What do I need to get started?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-32" class="collapse" aria-labelledby="heading-32" data-parent="#back-accordion-3">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-42">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn" data-toggle="collapse" data-target="#collapse-42" aria-expanded="false" aria-controls="collapse-42">
                                                                4.  How many websites can I use Kbiz in?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-42" class="collapse show" aria-labelledby="heading-42" data-parent="#back-accordion-3">
                                                        <div class="accordion-body mb-0">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading-52">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-52" aria-expanded="false" aria-controls="collapse-52">
                                                                5. How do I reset my password?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-52" class="collapse" aria-labelledby="heading-52" data-parent="#back-accordion-3">
                                                        <div class="accordion-body mb-0">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="seven" class="single-tab-part tab-pane fade">
                                            <div id="back-accordion-4" class="back-accordion">
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-13">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-13" aria-expanded="true" aria-controls="collapse-13">
                                                                1. How do we certify digitized receipts?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-13" class="collapse" aria-labelledby="heading-13" data-parent="#back-accordion-4">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-23">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-23" aria-expanded="false" aria-controls="collapse-23">
                                                                2. Website & Mobile app design
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-23" class="collapse" aria-labelledby="heading-23" data-parent="#back-accordion-4">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-33">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-33" aria-expanded="false" aria-controls="collapse-33">
                                                                3. What do I need to get started?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-33" class="collapse" aria-labelledby="heading-33" data-parent="#back-accordion-4">
                                                        <div class="accordion-body">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-10">
                                                    <div class="accordion-header" id="heading-43">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-43" aria-expanded="false" aria-controls="collapse-43">
                                                                4.  How many websites can I use Kbiz in?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-43" class="collapse" aria-labelledby="heading-43" data-parent="#back-accordion-4">
                                                        <div class="accordion-body mb-0">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="heading-53">
                                                        <h4 class="mb-0">
                                                            <button class="accordion-btn" data-toggle="collapse" data-target="#collapse-53" aria-expanded="false" aria-controls="collapse-53">
                                                                5. How do I reset my password?
                                                            </button>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse-53" class="collapse show" aria-labelledby="heading-53" data-parent="#back-accordion-4">
                                                        <div class="accordion-body mb-0">
                                                            <span class="d-block">The full monty cracking goal a blinding shot victoria sponge gutted mate. Amongst codswallop squiffy lost the plot up the duff lavatory barmy a blinding shot, such a fibber easy peasy cracking goal give.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-lg-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Faq here -->

                <!-- Start awards here -->
                <div class="back-agent">
                    <div class="container">
                        <div class="agent-part">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="back-sec-title">
                                        <h2 class="back-title">Our Clients <br> World-class protectiont.</h2>
                                        <p>Over 50K+ agents trust KBiz.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="agent-img">
                                        <li><a href="#"><img src="assets/images/agent/1.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/agent/2.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/agent/3.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/agent/4.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/agent/5.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/images/agent/6.png" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End awards here -->

                <!-- Start Clients here -->
                <div class="back-clients">
                    <div class="container">
                        <div class="back-sec-title text-center mb-50 md-mb-30">
                            <h5 class="back-subtitle">Clients Testimonials</h5>
                            <h2 class="back-title mb-0">Some professionals talking <br>about the course</h2>
                        </div>
                        <div class="client-slider">
                            <div class="single-client">
                                <span class="client-title">We have a great troll</span>
                                <div class="client-content">The wireless posh bum bag Richard Charles spiffing the full monty hunky dory bender brolly at public school blinding shot, blow of do one tinkety tonk old fruit tickety.!</div>
                                <div class="client-bottom">
                                    <span class="client-author"><img src="assets/images/clients/1.png" alt=""> </span>
                                    <span class="client-author-name"><em>Thomas R. Toe</em> CEO Founder Executive </span>
                                </div>
                            </div>
                            <div class="single-client">
                                <span class="client-title">You don't need a crazy!</span>
                                <div class="client-content">The wireless posh bum bag Richard Charles spiffing the full monty hunky dory bender brolly at public school blinding shot, blow of do one tinkety tonk old fruit tickety.!</div>
                                <div class="client-bottom">
                                    <span class="client-author"><img src="assets/images/clients/2.png" alt=""> </span>
                                    <span class="client-author-name"><em>Barry Tone</em> UI Designer </span>
                                </div>
                            </div>
                            <div class="single-client">
                                <span class="client-title">We have a great troll</span>
                                <div class="client-content">The wireless posh bum bag Richard Charles spiffing the full monty hunky dory bender brolly at public school blinding shot, blow of do one tinkety tonk old fruit tickety.!</div>
                                <div class="client-bottom">
                                    <span class="client-author"><img src="assets/images/clients/3.png" alt=""> </span>
                                    <span class="client-author-name"><em>Weir Doe</em> Product Manager </span>
                                </div>
                            </div>
                            <div class="single-client">
                                <span class="client-title">You don't need a crazy!</span>
                                <div class="client-content">The wireless posh bum bag Richard Charles spiffing the full monty hunky dory bender brolly at public school blinding shot, blow of do one tinkety tonk old fruit tickety.!</div>
                                <div class="client-bottom">
                                    <span class="client-author"><img src="assets/images/clients/2.png" alt=""> </span>
                                    <span class="client-author-name"><em>Barry Tone</em> UI Designer </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Clients here -->

                <!-- Start Design Tool here -->
                <div class="back-cta">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-9 col-md-12 md-mb-30">
                                <div class="back-sec-title">
                                    <h2 class="back-title white-color mb-0">Who Works Remotly to <br>help with your business</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12">
                                <div class="back-sec-btn text-right md-text-left">
                                    <a href="contact.html" class="back-btn white">Get Started for Free</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Design Tool here -->
            </div>
        </div>

        @endsection


