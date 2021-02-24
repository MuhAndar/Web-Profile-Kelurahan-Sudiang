@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dahboard')
  @section('page-title','Edit Staff')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Edit Data Staff</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('staff.update', $staff->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Nama</label>
          <<input type="text" class="form-control" name="nama" placeholder="Nama"  value="{{$staff->nama}}">
        </div>
        <div class="form-group">
          <label>Jabatan</label>
          <<input type="text" class="form-control" name="jabatan" placeholder="Jabatan"  value="{{$staff->jabatan}}">
        </div>
        <div class="form-group">
          <label>Email</label>
          <<input type="text" class="form-control" name="email" placeholder="Email"  value="{{$staff->email}}">
        </div>
        <div class="form-group">
          <label>Nomor Telepon</label>
          <<input type="text" class="form-control" name="no_telepon" placeholder="Nomor Telepon"  value="{{$staff->no_telepon}}">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" value="{{$staff->gambar}}" class="form-control" name="gambar">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Data</button>
          <a href="{{ route('staff.index') }}" class="btn btn-danger">Kembali</a>
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