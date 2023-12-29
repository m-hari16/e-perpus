@extends('adminlte::page')

@section('title', 'e-perpus | Peminjaman Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Peminjaman Buku</h1>
@stop

@section('content')
  <div class="card card-primary">
    <form action="{{route('peminjaman.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ID Anggota</label>
          <input type="text" class="form-control" id="nomor_anggota" name="nomor_anggota" placeholder="ID Anggota">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Kode Buku</label>
          <input type="text" class="form-control" id="kode_buku" name="kode_buku" placeholder="Kode Buku">
        </div>
      </div>

      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Kembali</label>
          <input type="date" class="form-control" id="plan_pengembalian" name="plan_pengembalian" placeholder="Tanggal Kembali">
        </div>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop