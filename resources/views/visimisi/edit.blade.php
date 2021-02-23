@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dahboard')
  @section('page-title','Edit Sambutan')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Edit Data Sambutan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('visimisi.update', $visimisi->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Text 1</label>
          <<input type="text" class="form-control" name="text1" placeholder="Nama"  value="{{$visimisi->text1}}">
        </div>
        <div class="form-group">
          <label>Text 2</label>
          <<input type="text" class="form-control" name="text2" placeholder="Nama"  value="{{$visimisi->text2}}">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" value="{{$visimisi->gambar}}" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Data</button>
          <a href="{{ route('visimisi.index') }}" class="btn btn-danger">Kembali</a>
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