@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dashboard')
  @section('page-title','Syarat Kepengurusan')
  @section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data Kepala Seksi Kebersihan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('kebersihan.update' , $kebersihan->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Text 1</label>
              <input type="text" class="form-control" name="text1" placeholder="Text 1"  value="{{ $kebersihan->text1 }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Text 2</label>
              <input type="text" class="form-control" name="text2" placeholder="Text 2"  value="{{ $kebersihan->text2 }}">
            </div>
            <div class="form-group">
              <label>Isi</label>
               <textarea name="text3" id="editor1" class="textarea" placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  {!! $kebersihan->text3 !!}
                </textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update Data</button>
              <a href="{{ route('kebersihan.index') }}" class="btn btn-danger">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
      <!-- /.box -->
      @endsection
      @push('datatables')
      <!-- Bootstrap WYSIHTML5 -->
      <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
      <script>
        $(function () {
          // Replace the <textarea id="editor1"> with a CKEditor
          // instance, using default configuration.
          //CKEDITOR.replace('editor1')
          //bootstrap WYSIHTML5 - text editor
          $('.textarea').wysihtml5()
        })
      </script>
      @endpush