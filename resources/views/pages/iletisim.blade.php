@extends('home-layout')
@section('page')
 @php
use App\Models\Iletisim;
$iletisim = Iletisim::find(1);
use App\Models\SosyalMedya;
$sm = SosyalMedya::where('durum',1)->get();

@endphp
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
  <div class="back-wrapper">
            <div class="back-wrapper-inner">
                <!-- Back Breadcrumbs Start Here -->
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
                                    <h1 class="breadcrumbs-title">İletişim</h1>

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
                <form action="{{route('mesajgonder')}}" method="post">
                    @csrf
                                <div class="form-group">
                                    <input name="adsoyad" placeholder="Adınız Soyadınız"  type="text" class="form-control" id="exampleInputEmail1" >
                                </div>



                                <div class="form-group">
                                    <input name="telefon"placeholder="Telefon Numaranız"  type="text" class="form-control" id="exampleInputEmail1" >
                                </div>

                                <div class="form-group">

                                    <input name="eposta" placeholder="E-Posta Adresiniz"   type="text" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">

                                    <input name="sektor" placeholder="Sektörünüz"    type="text" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">

                                    <input name="konu" placeholder="Mesajınızın Konusu"    type="text" class="form-control" id="exampleInputEmail1" >
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
                                                    <strong>Telefon Numarası</strong>
                                                    <a href="tel:{{$iletisim->telefon}}">{{$iletisim->telefon}}</a>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon2"> <img src="assets/images/contact/icon5.png" alt=""> </i>
                                                <div>
                                                    <strong>Email Adress</strong>
                                                    <a href="mailto:{{$iletisim->eposta}}">{{$iletisim->eposta}}</a>
                                                </div>
                                            </li>
                                            <li>

                                                <div style="width: 100%; height: 60px;">
                                               <a href="https://wa.me/{{$iletisim->wpbutton}}"> <button style="width: 100%; height: 60px;" class="btn btn-success"><span>Whatsapp İletişim</span></button></a>

                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon3"> <img src="assets/images/contact/icon4.png" alt=""> </i>
                                                <div>
                                                    <strong>Adres</strong>
                                                    <p>{{$iletisim->adres}}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="icon4"> <img src="assets/images/contact/icon3.png" alt=""> </i>
                                                <div>
                                                    <strong>Sosyal Medya Hesaplarımız</strong>
                                                    <ul class="social-share">
                                                        @foreach ($sm as $s )
                                                     <li><a href="#"><img width="32" height="32" src="{{$s->logo}}" alt=""></a></li>
                                                        @endforeach


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
            src="{{$iletisim->maps}}"
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
