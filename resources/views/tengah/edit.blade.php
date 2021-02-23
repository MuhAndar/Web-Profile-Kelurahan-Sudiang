@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dahboard')
  @section('page-title','Edit Artikel')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Edit Data Home Tengah</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('tengah.update', $tengah->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Text 1</label>
          <<input type="text" class="form-control" name="text1" placeholder="Nama"  value="{{ $tengah->text1 }}">
        </div>
        <div class="form-group">
          <label>Gambar 1</label>
          <input type="file" value="{{$tengah->gambar1}}" class="form-control" name="gambar1">
        </div>
        <div class="form-group">
          <label>Text 2</label>
          <input type="text" value="{{$tengah->text2}}" class="form-control" name="text2">
        </div>
        <div class="form-group">
          <label>Gambar 2</label>
          <input type="file" value="{{$tengah->gambar2}}" class="form-control" name="gambar2">
        </div>
        <div class="form-group">
          <label>Text 3</label>
          <input type="text" value="{{$tengah->text3}}" class="form-control" name="text3">
        </div>
        <div class="form-group">
          <label>Gambar 3</label>
          <input type="file" value="{{$tengah->gambar3}}" class="form-control" name="gambar3">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Data</button>
          <a href="{{ route('tengah.index') }}" class="btn btn-danger">Kembali</a>
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