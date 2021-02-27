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
      <h3 class="box-title">Edit Data Ringkasan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('ringkasan.update', $ringkasan->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Nama Kelurahan</label>
          <input type="text" class="form-control" name="nama" value="{{ $ringkasan->nama }}">
        </div>
        <div class="form-group">
          <label>Isi Ringkasan</label>
          <input type="text" value="{{$ringkasan->isi}}" class="form-control" name="isi">
        </div>
        <div class="form-group">
          <label>Batas Wilayah Utara</label>
          <input type="text" value="{{$ringkasan->bwu}}" class="form-control" name="bwu">
        </div>
        <div class="form-group">
          <label>Batas Wilayah Selatan</label>
          <input type="text" class="form-control" name="bws" value="{{ $ringkasan->bws }}">
        </div>
        <div class="form-group">
          <label>Batas Wilayah Timur</label>
          <input type="text" value="{{$ringkasan->bwt}}" class="form-control" name="bwt">
        </div>
        <div class="form-group">
          <label>Batas Wilayah Barat</label>
          <input type="text" value="{{$ringkasan->bwb}}" class="form-control" name="bwb">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" value="{{$ringkasan->gambar}}" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Data</button>
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