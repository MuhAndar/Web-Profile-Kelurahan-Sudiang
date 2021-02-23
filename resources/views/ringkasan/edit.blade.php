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
      <h3 class="box-title">Edit Data Artikel</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('ringkasan.update', $ringkasan->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Text 1</label>
          <<input type="text" class="form-control" name="text1" placeholder="Nama"  value="{{ $ringkasan->text1 }}">
        </div>
        <div class="form-group">
          <label>Text 2</label>
          <input type="text" value="{{$ringkasan->text2}}" class="form-control" name="text2">
        </div>
        <div class="form-group">
          <label>Text 3</label>
          <input type="text" value="{{$ringkasan->text3}}" class="form-control" name="text3">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" value="{{$ringkasan->gambar}}" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Artikel</button>
          <a href="{{ route('ringkasan.index') }}" class="btn btn-danger">Kembali</a>
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