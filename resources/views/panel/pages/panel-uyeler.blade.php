@extends('panel.panel-layout')

@section('admin-main')

@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
@php
use App\Models\Uyeler;
$uyeler=Uyeler::all();
@endphp

		  <div class="col-lg-12 col-xs-12">
                    <a href="{{Route('uyeekle')}}">
                    <button style="float: right; margin-bottom: 15px; margin-right: 50px; margin-top: 10px;" type="button" class="btn btn-success waves-effect waves-light float"><i class="ico ico-left fa fa-plus"></i>YENİ ÜYE  EKLE</button></a>
<table class="table table-bordered">

	<thead>
		<tr>
			<th>ID</th>
            <th>Resim</th>
            <th>Adı</th>
            <th>Soyadı</th>
            <th>Firma Ünvanı</th>
            <th>Telefon</th>
            <th>E-Posta</th>
            <th>Durum</th>
            <th>İşlem</th>
		</tr>
	</thead>
	<tbody>

        @foreach ($uyeler as $h )
            <tr>
                <th style="width:30px;" scope="row">{{$h->id}}</th>
                <td style="height:60px;">  <img  style="height: 60px;" src="{{ asset('uyeler/' . $h->resim) }}" alt="Uye Image" style="max-width:100%; height:auto;"></td>
                <td>{{$h->adi}}</td>
                <td>{{$h->soyadi}}</td>
                <td>{{$h->firmaunvanı}}</td>
                <td>{{$h->cep_telefonu}}</td>
                <td>{{$h->eposta}}</td>
                <td style="width:130px; text-align: center;">
                    @if($h->durum ==1)
                        <a href="{{route('uyedurumu',['id'=>$h->id])}}"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">AKTİF</button></a>
                    @elseif ($h->durum==3)
                        <a href="{{route('uyedurumu',['id'=>$h->id])}}"><button type="button" class="btn btn-warning btn-xs waves-effect waves-light">BEKLEMEDE</button></a>
                    @else
                        <a href="{{route('uyedurumu',['id'=>$h->id])}}"><button type="button" class="btn btn-danger btn-xs waves-effect waves-light">PASİF</button></a>
                    @endif
                </td>
                <td style="width:130px;">
                    <a href="{{route('uyeguncelle',['id'=>$h->id])}}"> <button type="button" class="btn btn-info btn-circle waves-effect waves-light"><i class="ico fa fa-pencil"></i></button></a>
                    <a href="{{route('uyesil',['id'=>$h->id])}}"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-remove"></i></button></a>
                </td>
			</tr>
        @endforeach

			</tbody>
					</table>





            </div>

@endsection
