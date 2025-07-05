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
						<form action="{{Route('uyeeklepost')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Adı</label>
                                <input name="adi" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Soyadı</label>
                                <input name="soyadi" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Baba Adı</label>
                                <input name="baba_adi" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Anne Adı</label>
                                <input name="anne_adi" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Doğum Yeri</label>
                                <input name="dogum_yeri" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Doğum Tarihi</label>
                                <input name="dogum_tarihi" type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>TC Kimlik No</label>
                                <input name="tc_kimlik_no" type="text" maxlength="11" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mesleği</label>
                                <input name="meslegi" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kan Grubu</label>
                                <input name="kan_grubu" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>İş Telefonu</label>
                                <input name="is_telefonu" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ev Telefonu</label>
                                <input name="ev_telefonu" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Cep Telefonu</label>
                                <input name="cep_telefonu" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>E-Posta</label>
                                <input name="eposta" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nüfusa Kayıtlı Olduğu Yer</label>
                                <input name="nufusa_kayit_il_ilce_mahalle" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>İkamet Adresi</label>
                                <textarea name="ikamet_adresi" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>İş Adresi</label>
                                <textarea name="is_adresi" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Öğrenim Durumu</label>
                                <input name="ogrenim_durumu" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Firma Ünvanı</label>
                                <input name="firmaunvanı" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Durum</label>
                                <select name="durum" class="form-control">
                                    <option value="1">AKTİF</option>
                                    <option value="0">PASİF</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Resim</label>
                                <input name="resim" type="file" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">KAYDET</button>
                        </form>
					</div>
					<!-- /.card-content -->
				</div>
            </div>
            <div class="col-lg-6 col-xs-12">



                {{-- <img style="width:450px; height: 250px; margin-top: 120px;" src="{{  $sayfa->resim}}" alt="">
 --}}

            </div>
				<!-- /.box-content -->
			</div>


@endsection
