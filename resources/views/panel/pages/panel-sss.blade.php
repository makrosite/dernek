@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="box-content card white">
					<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">S.S.S YÖNETİMİ</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('ssspost')}}" method="post"  >
                            @csrf





							<div class="form-group">
								<label for="exampleInputEmail1">Soru</label>
								<input placeholder="Soru" name="soru"  type="text" class="form-control" id="exampleInputEmail1" >
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Cevap</label>
								<input placeholder="Cevap" name="cevap"  type="text" class="form-control" id="exampleInputEmail1" >
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

                                <th>Soru</th>
                                <th>Cevap</th>

                                <th>İŞLEM</th>
							</tr>
						</thead>
						<tbody>

@php
use App\Models\Sss;

$ib = Sss::all();

@endphp
                                @foreach ($ib as $i )



                                    <tr>
                                    <th style="width:   30px;" scope="row">{{$i->id}}</th>

                                    <td style="width:820px;">{{$i->soru}}</td>
                                    <td style="width:850px;">{{$i->cevap}}</td>

                                    <td style="width:130px;">
                                        <a href="{{route('sssSil',['id'=>$i->id])}}"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-remove"></i></button></a>
                                    </td>
							</tr>


   @endforeach

			</tbody>
					</table>





            </div>
					<!-- /.card-content -->
				</div>

@endsection
