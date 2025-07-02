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
					<h4 class="box-title">SOSYAL MEDYA YÖNETİMİ</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('smayarpost')}}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="form-group">
								<label for="exampleInputEmail1">Başlık</label>
								<input name="baslik" type="text" class="form-control" id="exampleInputEmail1" >
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">link</label>
								<input name="link" type="text" class="form-control" id="exampleInputPassword1" >
							</div>

                            <div class="form-group">
								<label for="exampleInputPassword1">Durum</label>

                                <select name="durum"  class="form-control" aria-label="Default select example">
                                    <option value="1">AKTİF</option>
                                    <option value="0">PASİF</option>
                                </select>
							</div>



							<div class="form-group">
								<label for="exampleInputFile">Logo</label>
								<input name="logo" type="file" id="exampleInputFile">
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

								<th>Logo</th>
								<th>BAŞLIK</th>
								<th>Link</th>
                                <th>DURUM</th>
                                <th>İŞLEM</th>
							</tr>
						</thead>
						<tbody>

                            @if(isset($sosyalmedya) && count($sosyalmedya) > 0)
                    @foreach ($sosyalmedya as $s)
							<tr>
								<td style="width:130px;">  <img width="100" height="60" src="{{ asset('sm/' . $s->logo) }}" alt="Slider Image" style="max-width:100%; height:auto;"></td>
								<td>{{$s->baslik}}</td>
								<td>{{$s->link}}</td>
                                <td style="width:130px;">


                                @if($s->durum ==1)


                                        <strong style="color:green;">AKTİF</strong>
                                        @else
                                        <strong style="color:red;">PASİF</strong>

                                @endif


                                </td>
                                <td style="width:130px;">

                                    <a href="{{route('logosil',['id'=>$s->id])}}"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-remove"></i></button></a>
                                </td>
							</tr>


                                                @endforeach
                @else
                    <p>Veritabanında herhangi bir Sosyal Meyda Uzantısı bulunamadı.</p>
                @endif
						</tbody>
					</table>





            </div>
					<!-- /.card-content -->
				</div>

@endsection
