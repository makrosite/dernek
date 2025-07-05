<div class="main-menu">
	<header class="header">
		<a href="{{Route('panel')}}" class="logo">EGESİAD</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="{{Route('panel')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Anasayfa</span></a>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-flower"></i><span>Ayarlar</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{Route('genelayarlar')}}">Genel Ayarlar</a></li>
						<li><a href="{{Route('admin.info')}}">Yönetici Bilgileri</a></li>
						<li><a href="{{Route('iletisimayar')}}">İletişim Ayarları</a></li>
						<li><a href="{{Route('smayar')}}">Sosyal Medya </a></li>
						<li><a href="{{Route('logoayar')}}">Logo Banner</a></li>
                        <li><a href="{{Route('bankalarpanel')}}">Banka Bilgileri</a></li>

					</ul>
					<!-- /.sub-menu js__content -->
				</li>

                <li>
					<a class="waves-effect parent-item " href="{{route('slider')}}"><i class="menu-icon mdi mdi-flower"></i><span>Slider</span></span></a>
				</li>

                <li>
					<a class="waves-effect parent-item " href="{{route('panelkurumlar')}}"><i class="menu-icon mdi mdi-flower"></i><span>Kurumlar</span></span></a>
				</li>

                <li>
					<a class="waves-effect parent-item " href="{{route('panelhizmet')}}"><i class="menu-icon mdi mdi-flower"></i><span>Hizmetler</span></span></a>

				</li>
                 <li>
					<a class="waves-effect parent-item " href="{{route('panelbagis')}}"><i class="menu-icon mdi mdi-flower"></i><span>Bağış Yonetimi</span>


					@php
						use App\Models\Bagis;
						$pendingBagisCount = Bagis::where('durum', 2)->count();
					@endphp
					@if($pendingBagisCount > 0)
						<span class="badge bg-warning">{{ $pendingBagisCount }}</span>
					@endif

				</span></a>

				</li>



                <li>
					<a class="waves-effect parent-item " href="{{route('panelisbirlikleri')}}"><i class="menu-icon mdi mdi-flower"></i><span>iş Birlikleri </span></span></a>

				</li>

                <li>
					<a class="waves-effect parent-item " href="{{route('mesajlarpanel')}}"><i class="menu-icon mdi mdi-flower"></i><span>Mesajlar &nbsp;&nbsp;&nbsp;
                    @php
                        use App\Models\Mesajlar;
                        $unreadCount = Mesajlar::where('okundu', '!=', 1)->count();
                    @endphp
					@if($unreadCount > 0)

					<span class="badge bg-danger">{{ $unreadCount }} </span>

					@endif


                    </span></span></a>

				</li>

				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-chart-bar"></i><span>Haber & Duyuru</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{Route('panel-haberler')}}">Haberler</a></li>
						<li><a href="{{Route('panelDuyuru')}}">Duyurular</a></li>
						<li><a href="{{Route('paneletkinlik')}}">Etkinlikler</a></li>
						<li><a href="{{Route('paneltesvik')}}">Teşvik & Hibeler</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-cube-outline"></i><span>Sayfalar   </span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{Route('panel-sayfalar')}}">Tüm Sayfalar</a></li>
						<li><a href="{{route('sabitsayfalar')}}">Başkanın Mesajı</a></li>

					</ul>
					<!-- /.sub-menu js__content -->
				</li>
                	<li><a  class="waves-effect parent-item " href="{{Route('uyelerpanel')}}"><i class="menu-icon mdi mdi-flower"></i>Üyeler</a></li>
                    	<li><a class="waves-effect parent-item " href="{{Route('panelkurul')}}"><i class="menu-icon mdi mdi-flower"></i>Yönetim Kurulu</a></li>
				{{-- <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-buffer"></i><span>Üyeler & Yönetim Kurulu</span><span class="menu-arrow fa fa-angle-down"></span></a>





				</li> --}}


				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-table"></i><span>Modüller</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('ssspanel')}}">S.S.S Yönetimi</a></li>


					</ul>
                       <li><a href="#"> <i class="menu-icon mdi mdi-cash"></i>PAYTR Sanal Pos</a></li>
					<!-- /.sub-menu js__content -->
				</li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="waves-effect parent-item btn btn-danger" style="width:100%;text-align:left;">
                            <i class="menu-icon mdi mdi-logout"></i> Çıkış Yap
                        </button>
                    </form>
                </li>


			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->

</div>
