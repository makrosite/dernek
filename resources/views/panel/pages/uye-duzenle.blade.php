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
                                <label>Adı</label>
                                <input name="adi" type="text" class="form-control" value="{{$uye->adi}}">
                            </div>
                            <div class="form-group">
                                <label>Soyadı</label>
                                <input name="soyadi" type="text" class="form-control" value="{{$uye->soyadi}}">
                            </div>
                            <div class="form-group">
                                <label>Baba Adı</label>
                                <input name="baba_adi" type="text" class="form-control" value="{{$uye->baba_adi}}">
                            </div>
                            <div class="form-group">
                                <label>Anne Adı</label>
                                <input name="anne_adi" type="text" class="form-control" value="{{$uye->anne_adi}}">
                            </div>
                            <div class="form-group">
                                <label>Doğum Yeri</label>
                                <input name="dogum_yeri" type="text" class="form-control" value="{{$uye->dogum_yeri}}">
                            </div>
                            <div class="form-group">
                                <label>Doğum Tarihi</label>
                                <input name="dogum_tarihi" type="date" class="form-control" value="{{$uye->dogum_tarihi}}">
                            </div>
                            <div class="form-group">
                                <label>TC Kimlik No</label>
                                <input name="tc_kimlik_no" type="text" maxlength="11" class="form-control" value="{{$uye->tc_kimlik_no}}">
                            </div>
                            <div class="form-group">
                                <label>Mesleği</label>
                                <input name="meslegi" type="text" class="form-control" value="{{$uye->meslegi}}">
                            </div>
                            <div class="form-group">
                                <label>Kan Grubu</label>
                                <input name="kan_grubu" type="text" class="form-control" value="{{$uye->kan_grubu}}">
                            </div>
                            <div class="form-group">
                                <label>İş Telefonu</label>
                                <input name="is_telefonu" type="text" class="form-control" value="{{$uye->is_telefonu}}">
                            </div>
                            <div class="form-group">
                                <label>Ev Telefonu</label>
                                <input name="ev_telefonu" type="text" class="form-control" value="{{$uye->ev_telefonu}}">
                            </div>
                            <div class="form-group">
                                <label>Cep Telefonu</label>
                                <input name="cep_telefonu" type="text" class="form-control" value="{{$uye->cep_telefonu}}">
                            </div>
                            <div class="form-group">
                                <label>E-Posta</label>
                                <input name="eposta" type="text" class="form-control" value="{{$uye->eposta}}">
                            </div>
                            <div class="form-group">
                                <label>Nüfusa Kayıtlı Olduğu Yer</label>
                                <input name="nufusa_kayit_il_ilce_mahalle" type="text" class="form-control" value="{{$uye->nufusa_kayit_il_ilce_mahalle}}">
                            </div>
                            <div class="form-group">
                                <label>İkamet Adresi</label>
                                <textarea name="ikamet_adresi" class="form-control">{{$uye->ikamet_adresi}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>İş Adresi</label>
                                <textarea name="is_adresi" class="form-control">{{$uye->is_adresi}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Öğrenim Durumu</label>
                                <input name="ogrenim_durumu" type="text" class="form-control" value="{{$uye->ogrenim_durumu}}">
                            </div>
                            <div class="form-group">
                                <label>Firma Ünvanı</label>
                                <input name="firmaunvanı" type="text" class="form-control" value="{{$uye->firmaunvanı}}">
                            </div>
                            <div class="form-group">
                                <label>Durum</label>
                                <select name="durum" class="form-control">
                                    <option value="1" @if($uye->durum==1) selected @endif>AKTİF</option>
                                    <option value="0" @if($uye->durum==0) selected @endif>PASİF</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Resim</label>
                                <input name="resim" type="file" class="form-control">
                            </div>





							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">KAYDET</button>

					</div>
					<!-- /.card-content -->
				</div>
            </div>
            <div class="col-lg-6 col-xs-12">




                 <img style="width:40%; float:left; margin-left:15%; margin-top: 120px;" src="{{ asset('uyeler/' . $uye->resim) }}" alt="">


            </div>
				<!-- /.box-content -->
			</div>
</form>


@endsection
