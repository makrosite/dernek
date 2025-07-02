
<div class="row small-spacing">
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-success text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-diamond"></i>
						<p class="text text-white">ONAYLANAN BAĞIŞ</p>

				@php
                use App\Models\Bagis;
				@endphp

							@php
						$say= Bagis::where('durum',1)->count();
						$bekleyen= Bagis::where('durum',2)->count();
						$iptal= Bagis::where('durum',3)->count();
						$toplam= Bagis::where('durum',1)->sum('tutar');
						@endphp

						<h2 class="counter"> {{$say}} Adet </h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-warning text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-download"></i>
						<p class="text text-white">BEKLEYEN BAĞIŞLAR</p>
						<h2 class="counter">{{$bekleyen}} Adet </h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-danger text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-bug"></i>
						<p class="text text-white">İPTAL EDİLEN BAĞIŞLAR</p>
						<h2 class="counter">{{$iptal}} Adet</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-info text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-usd"></i>
						<p class="text text-white">TOPLAM ONAYLANAN TUTAR</p>
						<h2 class="counter">{{$toplam}} ₺</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
		</div>

