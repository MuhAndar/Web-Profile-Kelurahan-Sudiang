@extends('layouts.app')
  @push('customcss')
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endpush
  @section('title','Dashboard')
  @section('page-title','Profil')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Edit Data Sambutan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body pad">
      <form action="{{ route('sambutan.update', $sambutan->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Nama"  value="{{$sambutan->nama}}">
        </div>
        <div class="form-group">
          <label>NIK</label>
          <input type="text" class="form-control" name="nik" placeholder="NIK"  value="{{$sambutan->nik}}">
        </div>
        <div class="form-group">
          <label>Salam</label>
          <input type="text" class="form-control" name="isi1" placeholder="Salam"  value="{{$sambutan->isi1}}">
        </div>
        <div class="form-group">
          <label>Isi</label>
           <textarea name="isi2" id="editor1" class="textarea" placeholder="Place some text here"
                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
              {!! $sambutan->isi2 !!}
            </textarea>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control" name="gambar" value="{{$sambutan->gambar}}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update Data</button>
          <a href="{{ route('sambutan.index') }}" class="btn btn-danger">Kembali</a>
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