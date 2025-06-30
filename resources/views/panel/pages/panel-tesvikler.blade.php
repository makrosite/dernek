@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
@php
    use App\Models\Kurum;
@endphp

<div class="box-content card white">
					<div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">TEŞVİK HİBE YÖNETİMİ</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('tesvikekle')}}" method="post" >
                            @csrf


                                    <div class="form-group">
								<label for="exampleInputPassword1">KURUM</label>
                               <select name="kurum"value="1" class="form-control" aria-label="Default select example">
                                <option value="2">SEÇİNİZ</option>
                                 @php  $kurumlar =  Kurum::kurumlar();  @endphp
                                        @foreach ($kurumlar as $kurum  )
                                         <option value="{{$kurum->id}}">{{$kurum->baslik}}</option>
                                        @endforeach

                              </select>
							</div>



                                    <div class="form-group">
								<label for="exampleInputPassword1">TÜRÜ</label>
                               <select name="tur"value="1" class="form-control" aria-label="Default select example">
                                <option value="1">HİBELER</option>
                                <option value="1">TEŞVİKLER</option>
                              </select>
							</div>

                            <div class="form-group">
								<label for="exampleInputEmail1">Başlık</label>
								<input name="baslik"  type="text" class="form-control" id="exampleInputEmail1" >
							</div>
                            <div class="form-group">
								<label for="exampleInputEmail1">Metin</label>
							<textarea class="form-control" name="metin" id=""></textarea>
                            </div>
							<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">KAYDET</button>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>

   @php

       use App\Models\Tesvik;

      $tesvikler =  Tesvik::all();

 @endphp

               <div class="col-lg-12 col-xs-12">
<table class="table table-bordered">

						<thead>
							<tr>
								<th>ID</th>
                                <th>Kurum Logosu</th>
								<th>Kurum ismi</th>
                                <th>Türü</th>
                                <th>Başlık</th>



                                <th>İŞLEM</th>
							</tr>
						</thead>
						<tbody>

                            @foreach ($tesvikler as $h )
                                <tr>
                                    <th style="width:   30px;" scope="row">{{$h->id}}</th>
                                    <td style="width:130px;">  <img width="100" height="60" src="
                                          @php
                                              // Hata burada: Kurum::kurumgetir($h->id) yanlış olabilir.
                                              // $h->id teşvik id'si, kurum id'si olmayabilir.
                                              // Ayrıca Kurum modelini yukarıda 'use' etmemişsiniz.
                                              // Doğru kullanım için:

                                              // Eğer $h->kurum_id varsa:
                                              $kurumlogo = Kurum::find($h->kurum);
                                          @endphp
                        {{ $kurumlogo ? asset('kurum/' . $kurumlogo->resim) : '' }}

                                        " alt="duyuru Image" style="max-width:100%; height:auto;"></td>
                                    <td style="width:200px;">Kurum</td>
                                    <td style="width:150px;">Türü</td>
                                    <td>{{$h->baslik}}</td>

                                    <td style="width:130px;">
                                        <a href="{{route('kurumsil',['id'=>$h->id])}}"><button type="button" class="btn btn-danger btn-circle waves-effect waves-light"><i class="ico fa fa-remove"></i></button></a>
                                    </td>
							</tr>



                                 @endforeach

			</tbody>
					</table>





            </div>
					<!-- /.card-content -->
				</div>

@endsection
