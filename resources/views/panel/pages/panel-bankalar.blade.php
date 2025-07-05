@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="box-content card white">
					<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">BANKA YÖNETİMİ</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('bankaekle')}}" method="post" enctype="multipart/form-data" >
                            @csrf





							<div class="form-group">
								<label for="exampleInputEmail1">Banka Adı</label>
								<input name="bankaadi"  type="text" class="form-control" id="exampleInputEmail1" >
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">İBAN</label>
								<input name="iban"  type="text" class="form-control" id="exampleInputEmail1" >
							</div>
                             <div class="form-group">
                                <label>Döviz Türü</label>
                                <select name="doviz_turu" class="form-control">
                                    <option value="TL">Türk Lirası ( ₺ )</option>
                                    <option value="Euro">Euro ( € )</option>
                                     <option value="USD">Dolar ( $ )</option>
                                      <option value="Pound">Pound ( £ )</option>
                                </select>
                            </div>
                             <div class="form-group">
                                <label>Durum</label>
                                <select name="durum" class="form-control">
                                    <option value="1">AKTİF</option>
                                    <option value="0">PASİF</option>
                                </select>
                            </div>

							<div class="form-group">
								<label for="exampleInputFile">Logo</label>
								<input name="logo" type="file" id="exampleInputFile">

							</div>

							</div>


							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">KAYDET</button>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>



               <div class="col-lg-12 col-xs-12">
<table class="table table-bordered">

						<thead>
							<tr>
								<th>ID</th>
                                <th>Logo</th>
                                <th>Başlık</th>
                                <th>Açıklama</th>
                                <th>Durum</th>
                                <th>İŞLEM</th>
							</tr>
						</thead>
						<tbody>

@php
use App\Models\Bankalar;

$ib = Bankalar::all();

@endphp
                                @foreach ($ib as $i )



                                    <tr>
                                    <th style="width:   30px;" scope="row">{{$i->id}}</th>
                                    <td style="width:130px;">  <img width="100" height="60"  src="{{ asset('banka/' . $i->logo) }}"



                                        alt="duyuru Image" style="max-width:100%; height:auto;"></td>
                                    <td style="width:220px;">{{$i->bankaadi}}</td>
                                    <td style="width:850px;">{{$i->iban}}</td>
                                    <td>{{$i->doviz_turu}}</td>
                                    <td>

                                        @if($i->durum ==1)

                                       <a href="{{route('bankadurum',['id'=>$i->id])}}"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">AKTİF</button></a>
                                       @else
                                         <a href="{{route('bankadurum',['id'=>$i->id])}}"><button type="button" class="btn btn-danger btn-xs waves-effect waves-light">PASİF</button></a>

                                    @endif

                                    </td>

                                    <td style="width:130px;">
                                        <a href="{{route('bankasil',['id'=>$i->id])}}"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-remove"></i></button></a>
                                    </td>
							</tr>


   @endforeach

			</tbody>
					</table>





            </div>
					<!-- /.card-content -->
				</div>

@endsection
