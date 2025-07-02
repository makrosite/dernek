@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
@php
use App\Models\Ayarlar;
 $logobanner =Ayarlar::find(1);

@endphp
<div class="box-content card white">
					<h4 class="box-title">İLETİŞİM AYARLAR</h4>
					<!-- /.box-title -->
					<div class="card-content">
                        <div class="container-fluid">

                            {{-- yeni alan --}}
                            <form action="{{Route('logopost')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                 <input type="hidden" name="tur" value="logo">
                            <div class="row">
                                <div  class="col-lg-6">
                                 <div class="form-group">

                                    <div class="col-sm-9">
                                        <input type="file" value="" name="resim" class="form-control" id="inp-type-1">
							    </div>
							</div>
                                </div>
                                <div  class="col-lg-3">

                            <div style="float:left; margin-right:250px;" class="form-group ">
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">LOGOYU GÜNCELLE</button>
                            </div>
                                </div>
                                                                <div class="col-lg-3">
                                    <img src="{{ asset('logo/' . $logobanner->logo) }}" alt="">

                                </div>
                                </div></form>
                                {{-- yeni alan --}}
                          <br><hr/>
                            {{-- yeni alan --}}
                            <form action="{{Route('logopost')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                 <input type="hidden" name="tur" value="baslik">
                            <div class="row">
                                <div  class="col-lg-6">
                                 <div class="form-group">

                                    <div class="col-sm-9">
                                        <input type="file" value="" name="resim" class="form-control" id="inp-type-1">
							    </div>
							</div>
                                </div>
                                <div  class="col-lg-3">

                            <div style="float:left; margin-right:250px;" class="form-group ">
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">BAŞLIK RESMİNİ GÜNCELLE</button>
                            </div>
                                </div>
                                <div class="col-lg-3">
                                    <img src="{{ asset('logo/' . $logobanner->bc) }}" alt="">

                                </div>
                                </div></form>
                                {{-- yeni alan --}}

                                  <br><hr/>
                            {{-- yeni alan --}}
                            <form action="{{Route('logopost')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="tur" value="footer">
                            <div class="row">
                                <div  class="col-lg-6">
                                 <div class="form-group">

                                    <div class="col-sm-9">
                                        <input type="file" value="" name="resim" class="form-control" id="inp-type-1">
							    </div>
							</div>
                                </div>
                                <div  class="col-lg-3">

                            <div style="float:left; margin-right:250px;" class="form-group ">
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">FOOTER LOGO GÜNCELLE</button>
                            </div>
                                </div>
                                                                <div class="col-lg-3">
                                    <img src="{{ asset('logo/' . $logobanner->footerlogo) }}" alt="">

                                </div>
                                </div></form>
                                {{-- yeni alan --}}




                            </div>



					</div>
					<!-- /.card-content -->
				</div>

@endsection
