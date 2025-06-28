@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

@php

use App\Models\Sayfalar;
    $sayfalar  = Sayfalar::sayfalar();

@endphp

<div class="box-content card white">
				  <div class="col-lg-12 col-xs-12">
                    <a href="{{Route('panel-sayfa-ekle')}}">
                    <button style="float: right; margin-bottom: 15px; margin-right: 50px; margin-top: 10px;" type="button" class="btn btn-success waves-effect waves-light float"><i class="ico ico-left fa fa-plus"></i>YENİ SAYFA EKLE</button></a>
<table class="table table-bordered">

						<thead>
							<tr>
								<th>ID</th>
                                <th>MENÜ ADI</th>
								<th>BAŞLIK</th>

								<th>METİN</th>
                                <th>DURUM</th>
                                <th>İŞLEM</th>
							</tr>
						</thead>
						<tbody>

                                @foreach ($sayfalar as $sayfa)


								<th style="width:   30px;" scope="row">{{$sayfa->id}}</th>
                                <td style="width: 150px;">{{$sayfa->sayfa_adi}}</td>
								<td style="width: 350px;">{{$sayfa->baslik}}</td>
								<td>{{$sayfa->metin}}</td>
                                <td style="width:130px;">
                                    @if($sayfa->durum==1)
                                    <strong style="color:green;">AKTİF</strong>
                                    @else
                                    <strong style="color:red;">PASİF</strong>
                                    @endif



                                </td>
                                <td style="width:130px;">
                                   <a href="{{route('sayfaguncelle',['id'=>$sayfa->id])}}"> <button type="button" class="btn btn-info btn-circle waves-effect waves-light"><i class="ico fa fa-pencil"></i></button></a>
                                    <a href="{{route('panel-sayfa-sil',['id'=>$sayfa->id])}}"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-remove"></i></button></a>
                                </td>
							</tr>


@endforeach
						</tbody>
					</table>





            </div>

@endsection
