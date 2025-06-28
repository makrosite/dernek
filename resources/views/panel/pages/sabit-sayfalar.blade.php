@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

@php




@endphp

<div class="box-content card white">
				  <div class="col-lg-12 col-xs-12">
<table class="table table-bordered">

						<thead>
							<tr>

                                <th>MENÜ ADI</th>
								<th>BAŞLIK</th>

								<th>METİN</th>
                                <th>İŞLEM</th>
							</tr>
						</thead>
						<tbody>

                            {{-- BAŞKANIN MESAJLARI  --}}
        @php
            use App\Models\BaskaninMesajlari;
            $baskan =  BaskaninMesajlari::where('id',1)->first();
        @endphp
                            <tr>
                                <td style="width: 250px;"><strong>{{$baskan->menu_adi}}</strong></td>
								<td style="width: 350px;">{{$baskan->baslik}}</td>
								<td>{{$baskan->mesaj}}</td>
                                <td style="width:130px;">
                    <a href="{{Route('panel-sayfa-ekle')}}">
                    <button style="float: right; margin-bottom: 15px; margin-right: 50px; margin-top: 10px;" type="button" class="btn btn-success waves-effect waves-light float"><i class="ico ico-left fa fa-pencil"></i>DÜZENLE</button></a>
                                </td>
							</tr>
                              {{-- BAŞKANIN MESAJLARI  --}}







			</tbody>
					</table>





            </div>

@endsection
