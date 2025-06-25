@extends('home-layout')
@section('page')

<style>
.yonetim-card {
    transition: transform 0.3s cubic-bezier(.4,2,.6,1), box-shadow 0.3s;
    box-shadow: 0 2px 16px rgba(0,0,0,0.08);
    border-radius: 18px;
    border: 2.5px solid #008000;
    background: #fff;
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateY(40px) scale(0.98);
    animation: cardFadeIn 0.7s forwards;
}
.yonetim-card:hover {
    transform: translateY(-10px) scale(1.04) rotate(-1deg);
    box-shadow: 0 8px 32px rgba(0,128,0,0.18), 0 2px 16px rgba(0,0,0,0.10);
    border-color: #005c00;
}
.yonetim-card .card-img {
    transition: filter 0.3s, transform 0.3s;
}
.yonetim-card:hover .card-img {
    filter: grayscale(0.2) brightness(1.1);
    transform: scale(1.08) rotate(2deg);
}
.yonetim-card .card-overlay {
    position: absolute;
    left: 0; right: 0; bottom: 0;
    background: linear-gradient(0deg, #008000cc 60%, transparent 100%);
    color: #fff;
    padding: 18px 0 8px 0;
    opacity: 0;
    transition: opacity 0.3s;
    border-radius: 0 0 18px 18px;
}
.yonetim-card:hover .card-overlay {
    opacity: 1;
}
@keyframes cardFadeIn {
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}
</style>

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
                            <h1 class="breadcrumbs-title">About Us</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back Breadcrumbs End Here -->

        <section class="yonetim-kurulu-section py-5" style="background: #f8f9fa;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="back-title mb-2" style="font-weight:700;">Yönetim Kurulu</h2>
                    <p class="lead" style="color:#666;">Başkan ve Yönetim Kurulu Üyelerimiz</p>
                </div>
                <div class="row justify-content-center">
                    <!-- Başkan -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow-lg border-0 h-100 text-center" style="background:#fff; border-radius: 20px; border: 3px solid #008000;">
                            <div class="card-body py-5">
                                <img src="https://www.demo.dernekweb.com/imgs/300x240x2/baskan_1.jpg" alt="Başkan" class="rounded-circle mb-4" style="width:170px; height:170px; object-fit:cover; border:6px solid #008000; box-shadow: 0 0 0 6px #e6f4ea;">
                                <h4 class="card-title mb-1" style="font-weight:700;">Ahmet Yılmaz</h4>
                                <p class="card-subtitle mb-2 text-success" style="font-size:1.2rem; font-weight:600;">Yönetim Kurulu Başkanı</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <!-- Üye 1 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card shadow-lg border-0 h-100 text-center" style="border-radius: 18px; border: 2.5px solid #008000;">
                            <div class="card-body py-4">
                                <img src="https://www.demo.dernekweb.com/imgs/300x240x2/baskan_1.jpg" alt="Üye 1" class="rounded-circle mb-3" style="width:120px; height:120px; object-fit:cover; border:4px solid #008000; box-shadow: 0 0 0 4px #e6f4ea;">
                                <h5 class="card-title mb-1" style="font-weight:600;">Mehmet Demir</h5>
                                <p class="card-subtitle text-muted" style="font-size:1.05rem; font-weight:500;">Başkan Yardımcısı</p>
                            </div>
                        </div>
                    </div>
                    <!-- Üye 2 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card shadow-lg border-0 h-100 text-center" style="border-radius: 18px; border: 2.5px solid #008000;">
                            <div class="card-body py-4">
                                <img src="https://www.demo.dernekweb.com/imgs/300x240x2/baskan_1.jpg" alt="Üye 2" class="rounded-circle mb-3" style="width:120px; height:120px; object-fit:cover; border:4px solid #008000; box-shadow: 0 0 0 4px #e6f4ea;">
                                <h5 class="card-title mb-1" style="font-weight:600;">Ayşe Kaya</h5>
                                <p class="card-subtitle text-muted" style="font-size:1.05rem; font-weight:500;">Genel Sekreter</p>
                            </div>
                        </div>
                    </div>
                    <!-- Üye 3 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card shadow-lg border-0 h-100 text-center" style="border-radius: 18px; border: 2.5px solid #008000;">
                            <div class="card-body py-4">
                                <img src="https://www.demo.dernekweb.com/imgs/300x240x2/baskan_1.jpg" alt="Üye 3" class="rounded-circle mb-3" style="width:120px; height:120px; object-fit:cover; border:4px solid #008000; box-shadow: 0 0 0 4px #e6f4ea;">
                                <h5 class="card-title mb-1" style="font-weight:600;">Elif Çetin</h5>
                                <p class="card-subtitle text-muted" style="font-size:1.05rem; font-weight:500;">Sayman</p>
                            </div>
                        </div>
                    </div>
                    <!-- Üye 4 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card shadow-lg border-0 h-100 text-center" style="border-radius: 18px; border: 2.5px solid #008000;">
                            <div class="card-body py-4">
                                <img src="https://www.demo.dernekweb.com/imgs/300x240x2/baskan_1.jpg" alt="Üye 4" class="rounded-circle mb-3" style="width:120px; height:120px; object-fit:cover; border:4px solid #008000; box-shadow: 0 0 0 4px #e6f4ea;">
                                <h5 class="card-title mb-1" style="font-weight:600;">Burak Şahin</h5>
                                <p class="card-subtitle text-muted" style="font-size:1.05rem; font-weight:500;">Üye</p>
                            </div>
                        </div>
                    </div>
                    <!-- Üye 5 -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card shadow-lg border-0 h-100 text-center" style="border-radius: 18px; border: 2.5px solid #008000;">
                            <div class="card-body py-4">
                                <img src="https://www.demo.dernekweb.com/imgs/300x240x2/baskan_1.jpg" alt="Üye 5" class="rounded-circle mb-3" style="width:120px; height:120px; object-fit:cover; border:4px solid #008000; box-shadow: 0 0 0 4px #e6f4ea;">
                                <h5 class="card-title mb-1" style="font-weight:600;">Zeynep Arslan</h5>
                                <p class="card-subtitle text-muted" style="font-size:1.05rem; font-weight:500;">Üye</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Yönetim Kurulu here -->
        <!-- Start About here -->
        <section class="back-about pt-120 md-pt-60 pb-120 md-pb-100" style="background: #f8f9fa;">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <h5 class="back-subtitle" style="color: #008000; font-weight: 600;">Yönetim Kurulu Başkanı</h5>
                        <h2 class="back-title" style="font-weight: 700;">Başkanımızı Tanıyalım</h2>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-4 text-center mb-4 mb-md-0 d-flex align-items-stretch">
                        <div class="w-100 d-flex align-items-stretch justify-content-center">
                            <img
                                src="https://www.demo.dernekweb.com/imgs/300x300x2/baskan_1.jpg"
                                alt="Başkan"
                                style="width: 320px; height: 380px; object-fit: cover; border-radius: 18px; border: 4px solid #008000; box-shadow: 0 0 0 4px #e6f4ea; display: block; margin: auto;"
                            >
                        </div>
                    </div>
                    <div class="col-md-8 d-flex align-items-stretch">
                        <div class="p-4 w-100 d-flex flex-column justify-content-center" style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.06); border-left: 5px solid #008000;">
                            <h3 style="font-weight: 600; color: #222;">Mehmet Yılmaz</h3>
                            <p style="font-size: 1.15rem; color: #444; line-height: 2;">
                                Mehmet Yılmaz, 20 yılı aşkın süredir iş dünyasında liderlik yapmış, vizyoner bir yöneticidir. EGESİAD Yönetim Kurulu Başkanı olarak, derneğimizin gelişimine ve topluma katkı sağlamasına öncülük etmektedir.<br><br>
                                Yenilikçi yaklaşımı, ekip çalışmasına verdiği önem ve etik değerlere bağlılığı ile tanınan Yılmaz, üyelerimizin ortak hedeflerine ulaşmasında ilham kaynağı olmaktadır. Başkanımız, sürdürülebilir büyüme ve toplumsal fayda odaklı projeleriyle EGESİAD'ın sektördeki saygın konumunu güçlendirmeye devam etmektedir.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About here -->

        <!-- Start Counter here -->

        <!-- End Counter here -->

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
