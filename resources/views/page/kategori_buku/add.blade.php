@extends('adminlte::page')

@section('title', 'e-perpus | Kategori Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Kategori Buku</h1>
@stop

@section('content')
  <div class="card card-primary">
    <form action="{{route('kategori-buku.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Kategori</label>
          <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori">
        </div>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop