@extends('layouts.app')
  @section('title','Dashboard')
  @section('page-title','Edit')
  @section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Kontak</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route('sk.sekretaris.update' , $sekretaris->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Text 1</label>
              <input type="text" class="form-control" name="text1" placeholder="Text 1"  value="{{ $sekretaris->text1 }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Text 2</label>
              <input type="text" class="form-control" name="text2" placeholder="Text 2"  value="{{ $sekretaris->text2 }}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Text 3</label>
              <input type="text" class="form-control" name="text3" placeholder="Text 3"  value="{{ $sekretaris->text3 }}">
            </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('sk.sekretaris.index') }}" class = "btn btn-danger">Kembali</a>

          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  @endsection