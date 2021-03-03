@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dashboard')
  @section('page-title','Home')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Tambah Data Home Slogan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('slogan.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
          <label>Slogan 1</label>
          <input type="text" class="form-control" name="text1">
        </div>
        <div class="form-group">
          <label>Gambar 1</label>
          <input type="file" class="form-control" name="gambar1">
        </div>
        <div class="form-group">
          <label>Slogan 2</label>
          <input type="text" class="form-control" name="text2">
        </div>
        <div class="form-group">
          <label>Gambar 2</label>
          <input type="file" class="form-control" name="gambar2">
        </div>
        <div class="form-group">
          <label>Slogan 3</label>
          <input type="text" class="form-control" name="text3">
        </div>
        <div class="form-group">
          <label>Gambar 3</label>
          <input type="file" class="form-control" name="gambar3">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Tambah Data</button>
          <a href="{{ route('slogan.index') }}" class="btn btn-danger">Kembali</a>
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