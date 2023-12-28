@extends('adminlte::page')

@section('title', 'e-perpus | Kunjungan')

@section('content_header')
    <h1 class="m-0 text-dark">Kunjungan</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header py-4">
          <form action="{{ route('kunjungan.store') }}" method="post" class="form-inline">
              @csrf
              <div class="row justify-content-center">
                <div class="form-group">
                    <input type="text" class="form-control" id="nomor_anggota" name="nomor_anggota" placeholder="Input Nomor Anggota">
                </div>
                <div class="form-group ml-2">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </div>
          </form>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Waktu Kunjungan</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $key => $item)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->belongsToAnggota->nomor_anggota}}</td>
                <td>{{$item->belongsToAnggota->nama}}</td>
                <td>{{$item->belongsToAnggota->jenis_kelamin}}</td>
                <td>{{$item->created_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@stop