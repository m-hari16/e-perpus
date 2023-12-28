@extends('adminlte::page')

@section('title', 'e-perpus | Perpustakaan')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Perpustakaan</h1>
@stop

@section('content')
  <div class="card card-primary">
    <form action="{{route('perpustakaan.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Perpustakaan</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Perpustakaan">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tambahkan Identitas Lain</label>
          <input type="text" class="form-control" id="others" name="others_identity" placeholder="Identitas Lain">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop