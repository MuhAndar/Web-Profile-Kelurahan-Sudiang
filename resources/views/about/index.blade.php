@extends('layouts.app')
@push('customcss')
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}"></script>
@endpush
  @section('title','Dashboard')
  @section('page-title','Kontak')
  @section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Tentang Kami</h3>
      <div class="pull-right">
        {{-- <a href="{{ route('about.create') }}" class="btn btn-info">Tambah Data</a> --}}
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Kelurahan</th>
          <th>Ulasan Singkat</th>
          <th>Text</th>
          <th>Kode Kemendagri</th>
          <th>Kode Pos</th>
          <th>Luas</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($about as $item)
                <tr>
                    <td>
                        {{$loop -> iteration}}
                    </td>
                    <td>
                        {{$item->text1}}
                    </td>
                    <td>
                        {{$item->text2}}
                    </td>
                    <td>
                        {{$item->text3}}
                    </td>
                     <td>
                        {{$item->text4}}
                    </td>
                    <td>
                        {{$item->text5}}
                    </td>
                    <td>
                        {{$item->text6}}
                    </td>
                    <td> 
                        <a href="{{ route('about.edit', $item->id) }}" class="btn btn-info">Edit</a>
                        {{-- <a href="javascript:void(0)" onclick ="$(this).find('form').submit()" class="btn btn-danger">
                            <span class="fa fa-trash"></span>
                            <form action="{{ route('about.destroy' , $item->id) }}" method="POST"> --}}
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