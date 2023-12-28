@extends('adminlte::page')

@section('title', 'e-perpus | Kategori Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Anggota</h1>
@stop

@section('content')
  <div class="card card-primary">
    <form action="{{route('anggota.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Jenis Kelamin</label>
          <select type="select" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
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
          <label for="exampleInputEmail1">Profesi</label>
          <input type="text" class="form-control" id="profesi" name="profesi" placeholder="Profesi">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop