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
                            <h1 class="breadcrumbs-title">Başkanın Mesajı</h1>
                            <div class="back-nav">
                                <ul>
                                    <li><a href="/">Anasayfa</a></li>
                                    <li>Başkanın Mesajı</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back Breadcrumbs End Here -->

        <section class="baskan-mesaji-section py-5" style="background: #f8f9fa;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="back-title mb-2" style="font-weight:700;">Başkanın Mesajı</h2>
                    <p class="lead" style="color:#666;">EGESİAD Yönetim Kurulu Başkanı'ndan Mesaj</p>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-5 mb-4 mb-md-0 text-center">
                        <img src="https://www.demo.dernekweb.com/imgs/300x300x2/baskan_1.jpg" alt="Başkan" class="rounded-circle" style="width:200px; height:200px; object-fit:cover; border:6px solid #008000; box-shadow: 0 0 0 6px #e6f4ea;">
                        <h4 class="mt-3 mb-1" style="font-weight:700;">Mehmet Yılmaz</h4>
                        <p class="text-success mb-0" style="font-size:1.1rem; font-weight:600;">Yönetim Kurulu Başkanı</p>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="p-4" style="background: #fff; border-radius: 18px; box-shadow: 0 2px 16px rgba(0,0,0,0.06); border-left: 5px solid #008000;">
                            <h3 style="font-weight: 600; color: #222;">Değerli Üyelerimiz ve Kıymetli Misafirlerimiz,</h3>
                            <p style="font-size: 1.15rem; color: #444; line-height: 2;">
                                EGESİAD ailesi olarak, birlik ve dayanışmanın gücüne inanıyor, her geçen gün daha büyük hedeflere birlikte yürüyoruz. Derneğimizin temel amacı, üyelerimizin gelişimine katkı sağlamak ve toplumsal fayda üretmektir. Bu yolda, sizlerin desteği ve katılımı en büyük motivasyon kaynağımızdır.<br><br>
                                Yenilikçi projelerimiz, sosyal sorumluluk çalışmalarımız ve iş dünyasına sunduğumuz katkılarla, bölgemizin ve ülkemizin kalkınmasına öncülük etmeye devam ediyoruz. EGESİAD olarak, genç girişimcilerimize ilham vermek, kadınların iş hayatındaki rolünü güçlendirmek ve sürdürülebilir bir gelecek için çalışmak önceliklerimiz arasındadır.<br><br>
                                Hep birlikte daha güçlü, daha üretken ve daha etkili bir sivil toplum yapısı oluşturacağımıza olan inancım tamdır. Katkılarınız ve desteğiniz için teşekkür eder, başarılarla dolu bir yıl dilerim.
                            </p>
                            <p class="mt-4" style="font-weight:600; color:#008000;">Sevgi ve Saygılarımla,<br>Mehmet Yılmaz<br>Yönetim Kurulu Başkanı</p>
                        </div>
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
