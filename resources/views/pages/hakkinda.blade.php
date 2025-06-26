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

                <!-- Start About here -->
                <div class="back-about pt-120 md-pt-60 pb-120 md-pb-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="back-sec-title text-center mb-40">
                                    <h5 class="back-subtitle">Hakkımızda</h5>
                                    <h2 class="back-title"></h2>
                                </div>
                                <div class="back-desc text-center" style="font-size: 1.2rem; line-height: 2; color: #444;">
                                    <p>


                                    </p>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End About here -->

                <!-- Start Counter here -->
                    @include('inc.kayan-logolar')
                <!-- End Counter here -->


                <!-- Start Team here -->
                <div class="back-team pb-120">
                    <div class="container-fluid">
                        <div class="back-sec-title text-center mb-50 md-mb-30">
                            <h5 class="back-subtitle">EGESİAD</h5>
                            <h2 class="back-title mb-0">Yönetim Kadromuz</h2>
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

                <!-- Start Contact Box here -->
                <div class="back-contact-box back-contact-box-two">
                    <div class="container-fluid">
                        <div class="back-sec-title text-center mb-50 md-mb-30">
                            <h5 class="back-subtitle primary-color">EGESİAD</h5>
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
