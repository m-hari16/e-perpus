@extends('adminlte::page')

@section('title', 'e-perpus | Pengembalian Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Pengembalian Buku</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header py-4">
          <form action="{{ route('pengembalian.store') }}" method="post" class="form-inline">
              @csrf
              <div class="row justify-content-center">
                <div class="form-group">
                    <input type="text" class="form-control" id="kode_sirkulasi" name="kode_sirkulasi" placeholder="Kode Sirkulasi Buku">
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
                  <th>Kode Peminjaman</th>
                  <th>ID Anggota</th>
                  <th>Nama Anggota</th>
                  <th>Kode Buku</th>
                  <th>Judul Buku</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Aktual Pengembalian</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $key => $item)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$item->kode_sirkulasi}}</td>
                  <td>{{$item->hasAnggota->nomor_anggota}}</td>
                  <td>{{$item->hasAnggota->nama}}</td>
                  <td>{{$item->hasBuku->kode_buku}}</td>
                  <td>{{$item->hasBuku->judul}}</td>
                  <td>{{$item->created_at}}</td>
                  <td>{{$item->plan_pengembalian}}</td>
                  <td>{{$item->actual_pengembalian}}</td>                  
                  <td>
                    <form action="{{ route('pengembalian.destroy', $item->id) }}" method="post" style="display: inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                          <i class="fas fa-trash"></i> Delete
                      </button>
                    </form>
                  </td>
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