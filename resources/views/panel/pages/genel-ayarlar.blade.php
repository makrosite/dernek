@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
@php
use App\Models\Ayarlar;
 $ayarlar =Ayarlar::find(1);

@endphp
<div class="box-content card white">
					<h4 class="box-title">GENEL AYARLAR</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" action="{{Route('genelayarlarpost')}}" class="form-horizontal">
                            @csrf
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">SİTE BAŞLIĞI</label>
								<div class="col-sm-9">
									<input type="text" value="{{$ayarlar->baslik}}" name="baslik" class="form-control" id="inp-type-1">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-2" class="col-sm-3 control-label">SİTA AÇIKLAMASI</label>
								<div class="col-sm-9">
									<input type="text" value="{{$ayarlar->decs}}" name="decs" class="form-control" id="inp-type-2" >
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-3"  class="col-sm-3 control-label">ANAHTAR KELİEMLER</label>
								<div class="col-sm-9">
									<input type="text" value="{{$ayarlar->keywords}}" name="keywords" class="form-control" id="inp-type-3" >
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">FOOTER METNİ</label>
								<div class="col-sm-9">
									<input type="text" value="{{$ayarlar->footer}}" name="footer" class="form-control" id="inp-type-4" >
								</div>
							</div>
                            							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">ANA RENK</label>
								<div class="col-sm-9">
                      <input type="color" name="renk" value="{{$ayarlar->renk}}"  class="colorpicker-default form-control colorpicker-element" >
            				 </div>
							</div>

							<div class="form-group">
								<label for="inp-type-5" class="col-sm-3 control-label">Goole Search Console API</label>
								<div class="col-sm-9">
									<textarea class="form-control"  name="googleapi"  id="inp-type-5" ">{{$ayarlar->googleapi}}</textarea>
								</div>
							</div>
                            <div style="float:right; margin-right:250px;" class="form-group ">
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">BİLGİLERİ GÜNCELLE</button>
                            </div>
						</form>
					</div>
					<!-- /.card-content -->
				</div>

@endsection
