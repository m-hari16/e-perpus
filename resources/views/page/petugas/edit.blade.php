@extends('adminlte::page')

@section('title', 'e-perpus | Petugas')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Petugas</h1>
@stop

@section('content')
  <div class="card card-primary">
    <form action="{{route('petugas.update', $data->id)}}" method="post">
      @csrf
      @method('PUT')

      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{$data->nama}}">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$data->tanggal_lahir}}">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Jenis Kelamin</label>
          <select type="select" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option value="laki-laki" {{ $data->jenis_kelamin === 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="perempuan" {{ $data->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
          </select>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{$data->alamat}}">
        </div>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop