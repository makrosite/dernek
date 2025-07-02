@php
    use App\Models\Mesajlar;
    $mesajlar = Mesajlar::all();
@endphp

<div class="col-lg-12 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Mesajlar</h4>
					<!-- /.box-title -->

					<!-- /.dropdown js__dropdown -->
					<table class="table table-striped margin-bottom-10">
						<thead>
							<tr>
								<th style="width:10%;">Ad Soyad</th>
								<th>Telefon</th>
								<th style="width:20%; float: left;">E-Posta</th>
								<th>Konu</th>
                                <th>Tarih</th>
                                <th>Durum</th>
                                 <th style="width:7%;">İşlem</th>

							</tr>
						</thead>
						<tbody>
                            @foreach ($mesajlar as $b )


							<tr>
								<td>{{$b->adsoyad}}</td>
								<td>{{$b->telefon}} </td>
                                <td>{{$b->eposta}} </td>
                                <td>{{$b->konu}} </td>
								<td>{{$b->created_at->format('d.m.Y')}}</td>
                                @if ($b->okundu==1)
                                <td class="text-success">OKUNDU</td>
                                @else
                        <td class="text-danger">OKUNMADI</td>

                                @endif

                                <td style="width:7%;">
                                    <a href="{{route('mesajgoster',['id'=>$b->id])}}"><i class="fa fa-search"> </i></a>
                                    <a href="{{route('mesajsil',['id'=>$b->id])}}" style="margin-left:10px; color:red"> <i class="fa fa-remove danger "></i></a>

                                </td>
							</tr>
  @endforeach
						</tbody>
					</table>
					<!-- /.table -->
				</div>
				<!-- /.box-content -->
			</div>
