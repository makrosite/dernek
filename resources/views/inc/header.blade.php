

     @php



use App\Models\Ayarlar;
use App\Models\Iletisim;
$iletisim = Iletisim::find(1);
use App\Models\SosyalMedya;
$sm = SosyalMedya::where('durum',1)->get();

$site = Ayarlar::find(1)

@endphp
      <div class="toolbar-area hidden-md">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="toolbar-text">
                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                {{$iletisim->adres}}
                                 <a href="tel:{{$iletisim->telefon}}"> <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>{{$iletisim->telefon}}</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="toolbar-content">
                            <div class="toolbar-contact">
                                <ul>
                                    <li><a href="mailto:{{$iletisim->eposta}}"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{$iletisim->eposta}}</a></li>
                                </ul>
                            </div>
                            <div class="toolbar-sl-share">
                                <ul>
                                @foreach ($sm as $s )
                                                     <li><a href="#"><img width="32" height="32" src="{{$s->logo}}" alt=""></a></li>
                                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <header id="back-header" class="back-header">

            <div class="menu-part">
                <div class="container-fluid">
                    <!-- back Menu -->
                    <div class="back-main-menu">
                        <nav>
                            <!-- Menu Toggle btn-->
                            <div class="menu-toggle">
                                <div class="logo"><a href="{{Route(name: 'anasayfa')}}" class="logo-text">
                                    <img style="width:200px;" src="{{ asset('logo/' . $site->logo) }}" alt="{{$site->baslik}}">
                                </a>
                                </div>
                                <div class="searchbar-part hide-desktop">

                                    {{-- <a href="contact.html" class="back-btn z-index-1">Get Starteds</a> --}}
                                </div>

                                <button type="button" id="menu-btn">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Menu Structure-->
                            <div class="back-inner-menus">
                                <ul id="backmenu" class="back-menus back-sub-shadow">
                                    <li> <a href="{{route('anasayfa')}}">Anasayfa</a>

                                    </li>

                                    <li> <a href="#">Hizmetlerimiz</a>
                                            <ul>
                                                @php
                                                    use App\Models\Hizmet;
                                                    $hizmetler = Hizmet::all();
                                                @endphp
                                                @foreach ($hizmetler as $hizmet )
                                                   <li> <a href="{{ route('hizmetdetay', ['id' => $hizmet->id]) }}">{{$hizmet->menu}}</a>
                                                @endforeach

                                            </ul>
                                    </li>


                                    <li> <a href="#">Kurumsal</a>
                                        <ul>
                                            @php
                                        use App\Models\Sayfalar;

                                                $sayfalar =  Sayfalar::sayfalar();

                                            @endphp
                                            @foreach ($sayfalar as $sayfa)

                                             <li> <a href="{{ route('sayfa', $sayfa->id) }}">{{$sayfa->sayfa_adi}}</a></li>

                                            @endforeach

                                            <li> <a href="{{Route('yonetim')}}">Yönetim Kurulu</a>
                                            <li><a href="{{Route('baskan')}}">Başkanın Mesajları</a></li>


                                        </ul>
                                    </li>
                                    <li> <a href="{{route('uyelerimiz')}}">Üyelerimiz</a></li>
                                     <li><a href="{{route('isbirlikleri')}}">İş Birlikleri</a></li>
                                    <li > <a href="{{route('haberler')}}">Haberler</a>
                                        <ul >
                                            <li> <a href="{{route('duyurular')}}">Duyurular</a></li>
                                            <li> <a href="etkinlikler">Etkinlikler</a></li>
                                            <li> <a href="{{Route('tesvikhibe')}}">Teşvik ve Hibeler</a></li>
                                            {{-- <li> <a href="about.html">Sosyal Sorumluluk</a></li> --}}
                                        </ul>
                                    </li>
                                    <li> <a href="{{ route('uye.kayit') }}">Üye Kayıt</a> </li>
                                    <li> <a href="{{ route('bagis.yap') }}">Bağış Yap</a> </li>
                                    <li> <a href="{{Route('iletisim')}}">İletişim</a> </li>
                                <div class="searchbar-part">

                                    {{-- <a href="contact.html" class="back-btn z-index-1">Get Started</a> --}}
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- End back Menu -->
                </div>
            </div>
        </header>
