@extends('adminlte::page')

@section('title', 'e-perpus | Petugas')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Petugas</h1>
@stop

@section('content')
  <div class="card card-primary">
    <form action="{{route('perpustakaan.update', $data->id)}}" method="post">
      @csrf
      @method('PUT')

      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Perpustakaan</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{$data->nama}}">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{$data->alamat}}">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tambahkan Identitas Lain</label>
          <input type="text" class="form-control" id="others" name="others_identity" placeholder="Identitas Lain" value="{{json_decode($data->other_identity) ?? ''}}">
        </div>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop