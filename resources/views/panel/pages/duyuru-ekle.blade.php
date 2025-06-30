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
					<h4 class="box-title">DUYURU EKLE</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form action="{{Route('duyurueklepost')}}" method="post" enctype="multipart/form-data">
                            @csrf

							<div class="form-group">
								<label for="exampleInputEmail1">Başlık</label>
								<input name="baslik"  type="text" class="form-control" id="exampleInputEmail1" >
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



			<div class="form-group">
								<label for="editorMetin">Metin</label>
								<textarea name="metin" class="form-control" id="editorMetin" rows="15"></textarea>
								<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
								<script>
									let editorInstance;
									function setEditorHeight(height) {
										if (editorInstance) {
											editorInstance.ui.view.editable.element.style.height = height + 'px';
										}
									}
									ClassicEditor
										.create(document.querySelector('#editorMetin'), {
											toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'blockQuote', 'insertTable', 'undo', 'redo'],
											language: 'tr'
										})
										.then(editor => {
											editorInstance = editor;
											setEditorHeight(400); // Varsayılan yükseklik
										})
										.catch(error => {
											console.error(error);
										});
								</script>

							</div>

                {{-- <img style="width:450px; height: 250px; margin-top: 120px;" src="{{  $sayfa->resim}}" alt="">
 --}}

            </div>
				<!-- /.box-content -->
			</div>
</form>


@endsection
