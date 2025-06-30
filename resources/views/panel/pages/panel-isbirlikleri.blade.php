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
					<h4 class="box-title">İŞ BİRLİKELRİ  YÖNETİMİ</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('isbirlikleriekle')}}" method="post" enctype="multipart/form-data" >
                            @csrf





							<div class="form-group">
								<label for="exampleInputEmail1">UNVAN</label>
								<input name="unvan"  type="text" class="form-control" id="exampleInputEmail1" >
							</div>

                                 <div class="form-group">
								<label for="exampleInputFile">Logo</label>
								<input name="resim" type="file" id="exampleInputFile">

							</div>


                                    <div class="form-group">
								<label for="exampleInputPassword1">Durum</label>
                               <select name="durum"value="1" class="form-control" aria-label="Default select example">
                                <option value="1">AKTİF</option>
                                <option value="0">PASİF</option>
                              </select>
							</div>


                            <div class="form-group">
								<label for="exampleInputEmail1">Metin</label>
							<textarea class="form-control" name="metin" id=""></textarea>
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
								<th>Unvan</th>
                                <th>Açıklama</th>
                                <th>Durum</th>
                                <th>İŞLEM</th>
							</tr>
						</thead>
						<tbody>
@php
use App\Models\Isbirlikleri;

$ib = Isbirlikleri::all();

@endphp
                                @foreach ($ib as $i )



                                    <tr>
                                    <th style="width:   30px;" scope="row">{{$i->id}}</th>
                                    <td style="width:130px;">  <img width="100" height="60" src="{{ asset('isbirlikleri/' . $i->resim) }}" alt="duyuru Image" style="max-width:100%; height:auto;"></td>
                                    <td style="width:300px;">{{$i->unvan}}</td>
                                    <td style="width:850px;">{{$i->metin}}</td>
                                    <td>
                                        @if ($i->durum==1)
                                            <strong style="color:green;">AKTİF</strong>
                                        @else
                                            <strong style="color:red;">PASİF</strong>
                                        @endif

                                    </td>

                                    <td style="width:130px;">
                                        <a href="{{route('isbirliklerisil',['id'=>$i->id])}}"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-remove"></i></button></a>
                                    </td>
							</tr>


   @endforeach

			</tbody>
					</table>





            </div>
					<!-- /.card-content -->
				</div>

@endsection
