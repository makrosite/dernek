@extends('panel.panel-layout')

@section('admin-main')
@if(session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
@php
 use App\Models\Bankalar;
  $bankaGetir = Bankalar::all();
 @endphp

<div class="box-content card white">
    <h4 class="box-title">BAĞIŞ YÖNETİMİ</h4>
    <div class="container-fluid">

        <form action="{{Route('bagisekle')}}" method="post">
            @csrf
            <div class="row" style="text-align: center;">
                <h3 >BAĞIŞ EKLE</h3>
                <hr/>
                <div class="col-md-3">
                    <div class="form-group">

                        <input type="text" name="adsoyad" class="form-control" id="input1" placeholder="Ad Soyad">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">

                        <select name="durum"  class="form-control" aria-label="Default select example">
                                <option value="0">SEÇİNİZ</option>
                                @foreach ($bankaGetir as $bank )
                                <option value="{{$bank->id}}">{{$bank->bankaadi}}</option>
                                @endforeach

                                </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">

                        <input type="text" name="tutar" class="form-control" id="input3" placeholder="Tutar">
                    </div>
                </div>

            </div>
                        <div class="row">
                <div class="col-md-8">
                    <div class="form-group">

                        <input type="text" name="aciklama" class="form-control" id="input1" placeholder="Açıklama">
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">

                        <button style=" margin-bottom: 15px; margin-right: 50px; " type="submit" class="btn btn-success waves-effect waves-light float"><i class="ico ico-left fa fa-plus"></i>YENİ BAĞIŞ EKLE</button>
                    </div>
                </div>



            </div>
        </form>

    </div>
    <br>











<div class="col-md-12"><table id="example" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
						<thead>
							<tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 90.2px;">Ad Soyad</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 192.2px;">Açıklama</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 102.2px;">Banka</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60.2px;">Tutar</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 93.2px;">Tarih</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 29px; text-align: center;">Durum</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 29px;">İşlem</th>

                            </tr>
						</thead>

						<tbody>
                            @foreach ($bagislar as $b)



                            <tr
                            @if($b->durum==1)
                                style="background-color:#00800012 ;"
                            @elseif($b->durum ==2)
                                style="background-color: #fbbc0524;"
                            @elseif($b->durum==3)
                                style="background-color: #ea433521;"
                            @endif

                             role="row" class="odd">
								<td class="sorting_1">{{$b->adsoyad}}</td>
								<td>{{$b->aciklama}}</td>
								<td>
                                    @php
                                       $bankacek = Bankalar::where('id',$b->banka)->first();

                                       echo $bankacek->bankaadi;




                                    @endphp




                                </td>
								<td>{{$b->tutar}} ₺</td>
								<td>{{$b->created_at->format('d.m.Y')}}</td>
								<td style="text-align:center;">
                                    <a href="{{route('bagisdurum',['id'=>$b->id])}}">
                                    @if ($b->durum==1)
                                         <button type="button" class="btn btn-success btn-xs waves-effect waves-light">Onaylandı</button>
                                     @elseif ($b->durum ==2)
                                          <button type="button" class="btn btn-warning btn-xs waves-effect waves-light">Beklemede</button>
                                     @else
                                         <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">İptal Edildi</button>
                                    @endif
                                </a>

                </td>
                <td><a href="{{route('bagissil',['id'=>$b->id])}}">
                  <button type="button" class="btn btn-danger btn-circle btn-sm waves-effect waves-light"><i class="ico fa fa-remove"></i></button>

                </a></td>
						    	</tr>
 @endforeach
                        </tbody>





</div>

@endsection
