@extends('panel.panel-layout')

@section('admin-main')

@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

      @php

      use App\Models\Etkinlikler;

      $duyurular =  Etkinlikler::etkinlikler();

 @endphp



		  <div class="col-lg-12 col-xs-12">
                    <a href="{{Route('etkinlikekle')}}">
                    <button style="float: right; margin-bottom: 15px; margin-right: 50px; margin-top: 10px;" type="button" class="btn btn-success waves-effect waves-light float"><i class="ico ico-left fa fa-plus"></i>YENİ ETKİNLİK EKLE</button></a>
<table class="table table-bordered">

						<thead>
							<tr>
								<th>ID</th>
                                <th>MENÜ ADI</th>
								<th>BAŞLIK</th>
                                <th>TARİH</th>
								<th>METİN</th>

                                <th>İŞLEM</th>
							</tr>
						</thead>
						<tbody>

                            @foreach ($duyurular as $h )
                                <tr>
                                    <th style="width:   30px;" scope="row">{{$h->id}}</th>
                                    <td style="width:130px;">  <img width="100" height="60" src="{{ asset('etkinlik/' . $h->resim) }}" alt="duyuru Image" style="max-width:100%; height:auto;"></td>
                                    <td>{{$h->baslik}}</td>
                                    <td>{{$h->tarih}}</td>
                                    <td>{{$h->metin}}</td>

                                    <td style="width:130px;">
                                    <a href="{{route('etkinlikguncelle',['id'=>$h->id])}}"> <button type="button" class="btn btn-info btn-circle waves-effect waves-light"><i class="ico fa fa-pencil"></i></button></a>
                                        <a href="{{route('etkinliksil',['id'=>$h->id])}}"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-remove"></i></button></a>
                                    </td>
							</tr>



                                 @endforeach

			</tbody>
					</table>





            </div>

@endsection
