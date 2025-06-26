@extends('panel.panel-layout')

@section('admin-main')

<div class="box-content card white">
					<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Basic example</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('slider-ekle')}}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="form-group">
								<label for="exampleInputEmail1">Başlık</label>
								<input name="baslik" type="text" class="form-control" id="exampleInputEmail1" >
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Metin</label>
								<input name="metin" type="text" class="form-control" id="exampleInputPassword1" >
							</div>

                            <div class="form-group">
								<label for="exampleInputPassword1">Durum</label>

                                <select name="durum"  class="form-control" aria-label="Default select example">
                                    <option value="1">AKTİF</option>
                                    <option value="0">PASİF</option>
                                </select>
							</div>



							<div class="form-group">
								<label for="exampleInputFile">Resim</label>
								<input name="resim" type="file" id="exampleInputFile">
							</div>

							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>

               <div class="col-lg-12 col-xs-12">
                @if(isset($slider) && count($slider) > 0)
                    @foreach ($slider as $slide)
                        <div style="margin:20px;" class="mb-3">
                            <img width="250" height="250" src="{{ asset('slider/' . $slide->resim) }}" alt="Slider Image" style="max-width:100%; height:auto;">
							<strong>{{$slide->baslik}}</strong>
                            <a href="{{route('slide-sil',['id'=>$slide->id])}}">SİL</a>
                        </div>
                    @endforeach
                @else
                    <p>Veritabanında herhangi bir slider resmi bulunamadı.</p>
                @endif
            </div>
					<!-- /.card-content -->
				</div>

@endsection
