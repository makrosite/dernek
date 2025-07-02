@php
    use App\Models\Bagis;
    $bagislar = Bagis::all();
@endphp

<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Bağışlar</h4>
					<!-- /.box-title -->
 @include('panel.inc.rakamlar')
					<!-- /.dropdown js__dropdown -->
					<table class="table table-striped margin-bottom-10">
						<thead>
							<tr>
								<th style="width:40%;">Ad Soyad</th>
								<th>Price</th>
								<th>Date</th>
								<th>State</th>

							</tr>
						</thead>
						<tbody>
                            @foreach ($bagislar as $b )


							<tr>
								<td>{{$b->adsoyad}}</td>
								<td>{{$b->tutar}} ₺</td>
								<td>{{$b->created_at->format('d.m.Y')}}</td>
                                @if ($b->durum==1)
                                <td class="text-success">ONAYLANDI</td>

                                @elseif($b->durum==2)
                                <td class="text-warning">BEKLEMEDE</td>

                                @else
                        <td class="text-danger">İPTAL EDİLDİ</td>

                                @endif


							</tr>
  @endforeach
						</tbody>
					</table>
					<!-- /.table -->
				</div>
				<!-- /.box-content -->
			</div>
