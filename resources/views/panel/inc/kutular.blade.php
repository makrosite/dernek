             @php
 	            use App\Models\Hizmet;
 	            $say= Hizmet::count();
			 @endphp
 <div class="row small-spacing">
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico fa fa-apple text-inverse"></i>
						<h2 class="counter text-inverse">{{$say}}</h2>
						<p class="text">Hizmetler</p>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
             @php
 	            use App\Models\Etkinlikler;
 	            $say= Etkinlikler::count();
			 @endphp

			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico fa fa-android text-success"></i>
						<h2 class="counter text-success">{{$say}}</h2>
						<p class="text">Etkinlikler</p>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			 @php
 	use App\Models\Uyeler;
 	$say= Uyeler::count();
			 @endphp
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico fa fa-users text-primary"></i>
						<h2 class="counter text-primary">{{$say}}</h2>
						<p class="text">Toplam Üye</p>
					</div>
				</div>
				<!-- /.box-content -->
			</div>


			@php
			use App\Models\Isbirlikleri;
			$say1= Isbirlikleri::count();
			@endphp
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico fa fa-area-chart text-info"></i>
						<h2 class="counter text-info">{{$say1}}</h2>
						<p class="text">iş Birliği</p>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
		</div>
