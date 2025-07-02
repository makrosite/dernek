@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
@php
use App\Models\Iletisim;
 $ayarlar =Iletisim::find(1);

@endphp
<div class="box-content card white">
					<h4 class="box-title">İLETİŞİM AYARLAR</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" action="{{Route('iletisimayarpost')}}" class="form-horizontal">
                            @csrf
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Telefon</label>
								<div class="col-sm-9">
									<input type="text" value="{{$ayarlar->telefon}}" name="telefon" class="form-control" id="inp-type-1">
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-2" class="col-sm-3 control-label">gsm</label>
								<div class="col-sm-9">
									<input type="text" value="{{$ayarlar->gsm}}" name="gsm" class="form-control" id="inp-type-2" >
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-3"  class="col-sm-3 control-label">E posta</label>
								<div class="col-sm-9">
									<input type="text" value="{{$ayarlar->eposta}}" name="eposta" class="form-control" id="inp-type-3" >
								</div>
							</div>
							<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">wp</label>
								<div class="col-sm-9">
									<input type="text" value="{{$ayarlar->wp}}" name="wp" class="form-control" id="inp-type-4" >
								</div>
							</div>
                            	<div class="form-group">
								<label for="inp-type-4" class="col-sm-3 control-label">Watsapp Butonu</label>
								<div class="col-sm-9">
                      <input type="text" value="{{$ayarlar->wpbutton}}" name="wpbutton" class="form-control" id="inp-type-4" >
            				 </div>
							</div>

							<div class="form-group">
								<label for="inp-type-5" class="col-sm-3 control-label">Adres</label>
								<div class="col-sm-9">
									<textarea class="form-control"  name="adres"  id="inp-type-5" ">{{$ayarlar->adres}}</textarea>
							</div>
							</div>
                            <div class="form-group">
								<label for="inp-type-5" class="col-sm-3 control-label">Google Maps</label>
								<div class="col-sm-9">
									<textarea class="form-control"  name="maps"  id="inp-type-5" ">{{$ayarlar->maps}}</textarea>
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
