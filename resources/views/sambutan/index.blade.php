@extends('layouts.app')
@push('customcss')
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
  @section('title','Dashboard')
  @section('page-title','Profil')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Sambutan</h3>
      <div class="pull-right">
          <a href="{{ route('sambutan.create') }}" class="btn btn-info">Tambah Data</a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIK</th>
          <th>Salam</th>
          <th>Isi</th>
          <th>Gambar</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
          @foreach ($sambutan as $item)
          <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->nik}}</td>
            <td>{{$item->isi1}}</td>
            <td>{{$item->isi2}}</td>
            <td><img src="{{ asset('uploads/'.$item->gambar) }}" width="50px" height="50px" ></td>
            <td>
                <a href="{{ route('sambutan.edit', $item->id) }}" class="btn btn-info">Edit</a>

                <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger">
                        <span class="fa fa-trash"></span>
                        <form action="{{ route('sambutan.destroy', $item->id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                        </form>
                 </td>
        </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  @push('datatables')
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables/datatables.bootstrap.min.js') }}"></script>
  @endpush
  @push('customdatatables')
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
  @endpush
  @endsection