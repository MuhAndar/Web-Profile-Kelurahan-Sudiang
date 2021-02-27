@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dahboard')
  @section('page-title','Home')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Tambah Data Ringkasan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('ringkasan.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
          <label>Nama Kelurahan</label>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
          <label>Isi Ringkasan</label>
          <input type="text" class="form-control" name="isi">
        </div>
        <div class="form-group">
          <label>Batas Wilayah Utara</label>
          <input type="text" class="form-control" name="bwu">
        </div>
        <div class="form-group">
          <label>Batas Wilayah Selatan</label>
          <input type="text" class="form-control" name="bws">
        </div>
        <div class="form-group">
          <label>Batas Wilayah Timur</label>
          <input type="text" class="form-control" name="bwt">
        </div>
        <div class="form-group">
          <label>Batas Wilayah Barat</label>
          <input type="text" class="form-control" name="bwb">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Tambah Data</button>
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