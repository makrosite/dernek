@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
      @php

      use App\Models\YonetimKurulu;

      $kurumlar =  YonetimKurulu::all();

 @endphp
<div class="box-content card white">
					<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">YÖNETİM KURULU YÖNETİMİ</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('panelkurulekle')}}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="form-group">
								<label for="exampleInputEmail1">AD SOYAD</label>
								<input name="adsoyad" type="text" class="form-control" id="exampleInputEmail1" >
							</div>
                            <div class="form-group">
								<label for="exampleInputEmail1">UNVANI</label>
								<input name="statu" type="text" class="form-control" id="exampleInputEmail1" >
							</div>




							<div class="form-group">
								<label for="exampleInputFile">RESİM</label>
								<input name="resim" type="file" id="exampleInputFile">
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
                                <th>RESİM</th>
								<th>AD SOYAD</th>
                                <th>UNVAN</th>



                                <th>İŞLEM</th>
							</tr>
						</thead>
						<tbody>

                            @foreach ($kurumlar as $h )
                                <tr>
                                    <th style="width:   30px;" scope="row">{{$h->id}}</th>
                                    <td style="width:130px;">  <img width="100" height="60" src="{{ asset('kurul/' . $h->resim) }}" alt="duyuru Image" style="max-width:100%; height:auto;"></td>
                                    <td>{{$h->adsoyad}}</td>
                                    <td>{{$h->statu}}</td>

                                    <td style="width:130px;">
                                        <a href="{{route('panelkurulsil',['id'=>$h->id])}}"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-remove"></i></button></a>
                                    </td>
							</tr>



                                 @endforeach

			</tbody>
					</table>





            </div>
					<!-- /.card-content -->
				</div>

@endsection
