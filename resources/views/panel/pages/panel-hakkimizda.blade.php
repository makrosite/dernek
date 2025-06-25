@extends('panel.panel-layout')

@section('admin-main')

<div class="box-content card white">
					<h4 class="box-title">Input Types</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form class="form-horizontal" method="post" action="{{Route('hakkimizda-update')}}">
                            @csrf
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Text</label>
								<div class="col-sm-9">
									<input type="text" name="baslik" class="form-control" id="inp-type-1" value="{{$metin->baslik}}">
								</div>
							</div>
                            <div class="form-group">
								<label for="inp-type-5" class="col-sm-3 control-label">Textarea</label>
								<div class="col-sm-9">
									<textarea name="metin"  class="form-control" id="inp-type-5" cols='60' rows='8' placeholder="Write your meassage">{{$metin->metin}}</textarea>
								</div>
							</div>
                             <div class="form-group">
								<label for="inp-type-5" class="col-sm-3 control-label">Textarea</label>
								<div class="col-sm-9">
									<textarea name="modulmetin" class="form-control" id="inp-type-5" cols='60' rows='8' placeholder="Write your meassage">{{$metin->modulmetin}}</textarea>
								</div>
							</div>


                            <div style="float:right; margin-right:250px;" class="form-group ">
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                            </div>





						</form>
					</div>
					<!-- /.card-content -->
				</div>

@endsection
