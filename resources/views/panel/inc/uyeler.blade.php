@php
    use App\Models\Uyeler;
    $uyeler = Uyeler::all();
@endphp


<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Purchases</h4>
					<!-- /.box-title -->

					<!-- /.dropdown js__dropdown -->
					<table class="table table-striped margin-bottom-10">
						<thead>
							<tr>
								<th style="width:40%;">Ad Soyad</th>
								<th>Unvan</th>
								<th>Telefon</th>
								<th>E-Posta</th>

							</tr>
						</thead>
						<tbody>
                            @foreach ($uyeler as $u )


							<tr>
								<td>{{$u->adsoyad}}</td>
								<td>{{$u->firmaunvan}}</td>
								<td>{{$u->telefon}}</td>
								<td >{{$u->eposta}}</td>

							</tr>
                             @endforeach
						</tbody>
					</table>
					<!-- /.table -->
				</div>
				<!-- /.box-content -->
			</div>
