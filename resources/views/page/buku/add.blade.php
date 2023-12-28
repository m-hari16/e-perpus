@extends('adminlte::page')

@section('title', 'e-perpus | Koleksi Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Buku</h1>
@stop

@section('content')
  <div class="card card-primary">
    <form action="{{route('buku.store')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Pengarang</label>
          <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang Buku">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Penerbit</label>
          <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit Buku">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ISBN</label>
          <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
        </div>
      </div>
      <div class="card-body">
        <label for="category_id">Kategori</label>
        <select class="form-control" id="kategori_id" name="kategori_id">
          @foreach($kategori as $item)
            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
          @endforeach
        </select>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop