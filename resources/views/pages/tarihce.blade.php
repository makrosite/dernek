@extends('home-layout')
@section('page')

<div class="back-wrapper">
    <div class="back-wrapper-inner">
        <!-- Back Breadcrumbs Start Here -->
        <div class="back-breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img class="desktop" src="assets/images/breadcrumbs/banner-inner.jpg" alt="Breadcrumbs Image">
                <img class="mobile" src="assets/images/breadcrumbs/banner-inner-mobile.jpg" alt="Breadcrumbs Image">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title">Dernek Tarihçesi</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="/">Anasayfa</a></li>
                                    <li>Tarihçe</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back Breadcrumbs End Here -->

        <section class="tarihce-section py-5" style="background: #f8f9fa;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="back-title mb-2" style="font-weight:700;">Derneğimizin Tarihçesi</h2>
                    <p class="lead" style="color:#666;">EGESİAD'ın Kuruluşundan Bugüne Yolculuğu</p>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="assets/images/about/about1.jpg" alt="Kuruluş" class="img-fluid rounded shadow-lg" style="border: 6px solid #008000;">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4" style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.06); border-left: 5px solid #008000;">
                            <h3 style="font-weight: 600; color: #222;">Kuruluş Yılı: 1995</h3>
                            <p style="font-size: 1.15rem; color: #444; line-height: 2;">
                                EGESİAD, 1995 yılında Ege Bölgesi'nin genç ve vizyoner iş insanları tarafından, bölgesel kalkınmaya katkı sağlamak ve toplumsal dayanışmayı güçlendirmek amacıyla kurulmuştur. Kuruluşundan bu yana, yenilikçi projeleri ve sosyal sorumluluk çalışmalarıyla adından söz ettirmiştir.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Timeline Start -->
                <div class="timeline mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <ul class="list-unstyled">
                                <li class="mb-5 d-flex align-items-center">
                                    <div class="timeline-img me-4">
                                        <img src="assets/images/about/about2.png" alt="1995" class="rounded-circle shadow" style="width:80px; height:80px; border:4px solid #008000;">
                                    </div>
                                    <div class="timeline-content p-4 bg-white rounded shadow" style="border-left: 4px solid #008000;">
                                        <h5 class="mb-1" style="font-weight:600; color:#008000;">1995 - Kuruluş</h5>
                                        <p class="mb-0" style="color:#444;">EGESİAD, ilk üyeleriyle birlikte Ege Bölgesi'nde genç iş insanlarını bir araya getirerek güçlü bir sivil toplum hareketi başlatmıştır.</p>
                                    </div>
                                </li>
                                <li class="mb-5 d-flex align-items-center flex-row-reverse">
                                    <div class="timeline-img ms-4">
                                        <img src="assets/images/case/2.jpg" alt="2000" class="rounded-circle shadow" style="width:80px; height:80px; border:4px solid #008000;">
                                    </div>
                                    <div class="timeline-content p-4 bg-white rounded shadow" style="border-right: 4px solid #008000;">
                                        <h5 class="mb-1" style="font-weight:600; color:#008000;">2000 - İlk Büyük Proje</h5>
                                        <p class="mb-0" style="color:#444;">Bölgesel kalkınma için başlatılan ilk büyük sosyal sorumluluk projesiyle EGESİAD, toplumsal fayda üretmeye başlamıştır.</p>
                                    </div>
                                </li>
                                <li class="mb-5 d-flex align-items-center">
                                    <div class="timeline-img me-4">
                                        <img src="assets/images/case/3.jpg" alt="2010" class="rounded-circle shadow" style="width:80px; height:80px; border:4px solid #008000;">
                                    </div>
                                    <div class="timeline-content p-4 bg-white rounded shadow" style="border-left: 4px solid #008000;">
                                        <h5 class="mb-1" style="font-weight:600; color:#008000;">2010 - Ulusal Tanınırlık</h5>
                                        <p class="mb-0" style="color:#444;">Derneğimiz, ulusal düzeyde tanınan bir sivil toplum kuruluşu haline gelmiş, birçok ödül ve takdir kazanmıştır.</p>
                                    </div>
                                </li>
                                <li class="mb-5 d-flex align-items-center flex-row-reverse">
                                    <div class="timeline-img ms-4">
                                        <img src="assets/images/case/4.jpg" alt="2018" class="rounded-circle shadow" style="width:80px; height:80px; border:4px solid #008000;">
                                    </div>
                                    <div class="timeline-content p-4 bg-white rounded shadow" style="border-right: 4px solid #008000;">
                                        <h5 class="mb-1" style="font-weight:600; color:#008000;">2018 - Dijital Dönüşüm</h5>
                                        <p class="mb-0" style="color:#444;">EGESİAD, dijitalleşme sürecini başlatarak üyelerine ve topluma daha hızlı ve etkin hizmet sunmaya başlamıştır.</p>
                                    </div>
                                </li>
                                <li class="mb-5 d-flex align-items-center">
                                    <div class="timeline-img me-4">
                                        <img src="assets/images/case/5.jpg" alt="2024" class="rounded-circle shadow" style="width:80px; height:80px; border:4px solid #008000;">
                                    </div>
                                    <div class="timeline-content p-4 bg-white rounded shadow" style="border-left: 4px solid #008000;">
                                        <h5 class="mb-1" style="font-weight:600; color:#008000;">2024 - Sürdürülebilirlik ve Gelecek</h5>
                                        <p class="mb-0" style="color:#444;">Bugün EGESİAD, sürdürülebilirlik ve toplumsal fayda odaklı projeleriyle geleceğe umutla bakmaktadır.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Timeline End -->
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-10 text-center">
                        <img src="assets/images/about/shape.png" alt="EGESİAD" class="img-fluid" style="max-width: 400px; opacity: 0.7;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Contact Box here -->
        <div class="back-contact-box back-contact-box-two">
            <div class="container-fluid">
                <div class="back-sec-title text-center mb-50 md-mb-30">
                    <h2 class="back-title title-color mb-0">Bize Ulaşın</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="contact-box">
                            <span class="icon-part bg-phone">
                                <a href="tel:+08807647866"><img src="assets/images/contact/phone.svg" alt="Phone Icon"></a>
                            </span>
                            <span class="text-part">
                                <a href="tel:+08807647866">+(088) 076 478 66</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="contact-box">
                            <span class="icon-part secondary-bg">
                                <a href="mailto:support@kbiz.com"><img src="assets/images/contact/chat.svg" alt="Mail Icon"></a>
                            </span>
                            <span class="text-part">
                                <a href="mailto:support@kbiz.com">support@kbiz.com</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="contact-box">
                            <span class="icon-part secondary-bg">
                                <a href="https://goo.gl/maps/xyz" target="_blank"><img src="assets/images/contact/location.svg" alt="Location Icon"></a>
                            </span>
                            <span class="text-part">
                                <a href="https://goo.gl/maps/xyz" target="_blank">1234 Adres, Şehir, Ülke</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="contact-box-btn text-center mt-50 md-mt-30">
                    <a href="contact.html" style="background-color: #008000; border:none; color:white;" class="back-btn success contact-btn">Bize Yazın</a>
                </div>
            </div>
        </div>
        <!-- End Contact Box here -->

    </div>
</div>

@endsection
