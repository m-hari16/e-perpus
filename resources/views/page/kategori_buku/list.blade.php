@extends('adminlte::page')

@section('title', 'e-perpus | Kategori Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Kategori Buku</h1>
@stop

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm p-3" style="width: 150px;">
              <a class="btn btn-success btn-sm" href="{{route('kategori-buku.create')}}">
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
                <th>Kategori Buku</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kategori as $key => $item)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->nama_kategori}}</td>
                <td>
                  <a class="btn btn-info btn-sm" href="{{route('kategori-buku.edit', $item->id)}}">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                  </a>
                  <form action="{{ route('kategori-buku.destroy', $item->id) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                  </form>
                  <!-- <a class="btn btn-danger btn-sm" href="{{route('kategori-buku.destroy', $item->id)}}">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                  </a> -->
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