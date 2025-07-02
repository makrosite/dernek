@extends('home-layout')
@section('page')
  <div class="back-wrapper">
            <div class="back-wrapper-inner">
                <!-- Back Breadcrumbs Start Here -->
                <div class="back-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="bc.jpg" alt="Breadcrumbs Image">
                        <img class="mobile" src="assets/images/breadcrumbs/blog-banner-mobile.jpg" alt="Breadcrumbs Image">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Blog Grid</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li>Blog</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Back Breadcrumbs End Here -->

                  <div id="back-blog" class="back-blog back-blog-page pt-120">
<div class="container-fluid" style="padding-left:120px; padding-right:120px;">

                            <div class="row">

                                <div class="col-lg-6">
                                    <h2 style="text-align:center">Bize Mesaj Gönderin</h2>
                <form action="{{route('iletisim')}}" method="post">
                                <div class="form-group">
                                    <input name="baslik" placeholder="Adınız Soyadınız"  type="text" class="form-control" id="exampleInputEmail1" >
                                </div>



                                <div class="form-group">
                                    <input name="baslik"placeholder="Telefon Numaranız"  type="text" class="form-control" id="exampleInputEmail1" >
                                </div>

                                <div class="form-group">

                                    <input name="baslik" placeholder="E-Posta Adresiniz"   type="text" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">

                                    <input name="baslik" placeholder="Sektörünüz"    type="text" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="mesaj" placeholder="Mesajınız"  id=""></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" style="float: right; margin-right:20%;  padding-left: 20%;padding-right: 20%;" class="btn btn-success">MESAJ GÖNDER</button>
                                </div>

                             </form>


                            </div>

                             <div class="col-lg-6">
                                <div class="back-sidebar-information">
                                    <h3 style="text-align: center">İletişim Bilgilerimiz</h3>
                                    <div class="widget-information">
                                        <ul>
                                            <li>
                                                <i class="icon1"> <img src="assets/images/contact/icon1.png" alt=""> </i>
                                                <div>
                                                    <strong>Phone Number</strong>
                                                    <a href="tel:+(446) 22 76 50 53">+(446) 22 76 50 53</a>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon2"> <img src="assets/images/contact/icon5.png" alt=""> </i>
                                                <div>
                                                    <strong>Email Adress</strong>
                                                    <a href="mailto:support@backtheme.com">support@backtheme.com</a>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon3"> <img src="assets/images/contact/icon4.png" alt=""> </i>
                                                <div>
                                                    <strong>Local Adress</strong>
                                                    <p>New York, USA 2578 HAY</p>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon4"> <img src="assets/images/contact/icon3.png" alt=""> </i>
                                                <div>
                                                    <strong>Share</strong>
                                                    <ul class="social-share">
                                                        <li><a href="#"><i aria-hidden="true" class="social_facebook"></i></a></li>
                                                        <li><a href="#"><i aria-hidden="true" class="social_twitter"></i></a></li>
                                                        <li><a href="#"><i aria-hidden="true" class="social_linkedin"></i></a></li>
                                                        <li><a href="#"><i aria-hidden="true" class="social_vimeo"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                                </div>


 </div>
 <div class="row">
    <div class="container-fluid">

    <div style="width: 100%; height: 600px; margin-top: 30px; margin-bottom: 30px;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.839073262316!2d32.85974131535444!3d39.93336397942609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34f1b1b1b1b1b%3A0x1b1b1b1b1b1b1b1b!2sAnkara!5e0!3m2!1str!2str!4v1680000000000!5m2!1str!2str" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- Harita yüksekliğini yukarıdaki height değerinden ayarlayabilirsiniz -->


    </div>
 </div>
</div>
</div>


@endsection
