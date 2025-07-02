@extends('panel.panel-layout')

@section('admin-main')



<div class="box-content card white">
<div class="col-xs-12">
				<div class="invoice-box">
					<table>
						<tbody><tr class="top">
							<td colspan="2">
								<table>
									<tbody><tr>
										<td class="title">
											<a href="#" class="logo">{{$mesaj->adsoyad}}</a>
										</td>

										<td>
                                            <strong>Tarih:</strong>
										{{$mesaj->created_at}}

										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>

						<tr class="information">
							<td colspan="2">
								<table>
									<tbody><tr>
										<td>
										<br>
                                        <strong>Sektör:</strong> {{$mesaj->sektor}}<br>
                                       <strong>Konu:</strong> {{$mesaj->konu}}<br>

                                        </td>
										<td>
									    <strong>Telefon:</strong> {{$mesaj->telefon}}<br>
                                        <strong>E-posta:</strong>{{$mesaj->eposta}}
										</td>
									</tr>
								</tbody></table>
							</td>
						</tr>

						<tr class="heading">
							<td>
							Mesaj:
							</td><td></td>

						</tr>

						<tr class="details">
							<td>
								<strong></strong>{{$mesaj->mesaj}}
							</td>


						</tr>


					</tbody></table>
					<div class="text-right margin-top-20">
						<ul class="list-inline">
							<li><a href="{{route('mesajlarpanel')}}"><button type="button" class="btn btn-default waves-effect waves-light"><i class="fa fa-mail-reply"></i> GERİ DÖN</button></a></li>
							<li><a href="{{route('mesajlarpanel')}}"><button type="button" class="btn btn-danger waves-effect waves-light">SİL</button></a></li>
						</ul>
					</div>
				</div>
				<!-- /.invoice-box -->
			</div>




@endsection
