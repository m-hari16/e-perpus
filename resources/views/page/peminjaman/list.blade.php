@extends('adminlte::page')

@section('title', 'e-perpus | Peminjaman Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Peminjaman Buku</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm p-3" style="width: 150px;">
              <a class="btn btn-success btn-sm" href="{{route('peminjaman.create')}}">
                Tambah Data
              </a>
            </div>
          </div>
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
                <td>
                  <a class="btn btn-info btn-sm" href="{{route('peminjaman.edit', $item->id)}}">
                      <i class="fas fa-print">
                      </i>
                      Cetak
                  </a>
                  <form action="{{ route('peminjaman.destroy', $item->id) }}" method="post" style="display: inline;">
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