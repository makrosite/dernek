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
					<h4 class="box-title">ÜYE EKLE</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('uyeguncellepost',$uye->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

							<div class="form-group">
								<label for="exampleInputEmail1">Unvan</label>
								<input name="firmaunvan"  type="text" class="form-control" value="{{$uye->firmaunvan}}" id="exampleInputEmail1" >
							</div>

                            <div class="form-group">
								<label for="exampleInputEmail1">Yetkili Kişi</label>
								<input name="adsoyad"  type="text" class="form-control" value="{{$uye->adsoyad}}" id="exampleInputEmail1" >
							</div>

                              <div class="form-group">
								<label for="exampleInputEmail1">Telefon</label>
								<input name="telefon"  type="text" class="form-control" value="{{$uye->telefon}}" id="exampleInputEmail1" >
							</div>
                            <div class="form-group">
								<label for="exampleInputEmail1">E-Posta</label>
								<input name="eposta"  type="text" class="form-control" value="{{$uye->eposta}}"  id="exampleInputEmail1" >
							</div>

                               <div class="form-group">
								<label for="exampleInputEmail1">Firma Hakkında</label>


                                    <textarea class="form-control"  name="hakkinda" id="">{{$uye->hakkinda}}</textarea>
                            </div>




                            <div class="form-group">
								<label for="exampleInputPassword1">Durum</label>
                                <select name="durum" value="{{$uye->durum}}" class="form-control" aria-label="Default select example">
                                    <option value="1">AKTİF</option>
                                    <option value="0">PASİF</option>
                                </select>
							</div>
                          <div class="form-group">
								<label for="exampleInputFile">Resim</label>
								<input name="resim" type="file" id="exampleInputFile">

							</div>





							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">KAYDET</button>

					</div>
					<!-- /.card-content -->
				</div>
            </div>
            <div class="col-lg-6 col-xs-12">




                 <img style="width:650px; height: 200px; margin-top: 120px;" src="{{ asset('uyeler/' . $uye->resim) }}" alt="">


            </div>
				<!-- /.box-content -->
			</div>
</form>


@endsection
