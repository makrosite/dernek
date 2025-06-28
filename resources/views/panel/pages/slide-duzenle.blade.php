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
					<h4 class="box-title">SLİDER DÜZENLE</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('slider-guncelle',$slide->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="form-group">
								<label for="exampleInputEmail1">Başlık</label>
								<input name="baslik" value="{{$slide->baslik}}" type="text" class="form-control" id="exampleInputEmail1" >
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Metin</label>
								<input name="metin" value="{{$slide->metin}}"  type="text" class="form-control" id="exampleInputPassword1" >
							</div>

                            <div class="form-group">
								<label for="exampleInputPassword1">Durum</label>

                                <select name="durum"
                                @if($slide->durum ==1)
                                    value="1"
                                    @else
                                    value="0"
                                    @endif



                                 class="form-control" aria-label="Default select example">
                                    <option value="1">AKTİF</option>
                                    <option value="0">PASİF</option>
                                </select>
							</div>



							<div class="form-group">
								<label for="exampleInputFile">Resim</label>
								<input name="resim" type="file" id="exampleInputFile">

							</div>

							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">KAYDET</button>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
            </div>
            <div class="col-lg-6 col-xs-12">

                <img style="width:450px; height: 250px; margin-top: 120px;" src="{{ asset('slider/' . $slide->resim) }}" alt="">


            </div>
				<!-- /.box-content -->
			</div>



@endsection
