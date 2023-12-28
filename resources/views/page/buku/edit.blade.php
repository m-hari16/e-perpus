@extends('adminlte::page')

@section('title', 'e-perpus | Koleksi Buku')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Koleksi Buku</h1>
@stop

@section('content')
  <div class="card card-primary">
    <form action="{{route('buku.update', $data->id)}}" method="post">
      @csrf
      @method('PUT')

      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" value="{{$data->judul}}">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Pengarang</label>
          <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang Buku" value="{{$data->pengarang}}">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Penerbit</label>
          <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit Buku" value="{{$data->penerbit}}">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">ISBN</label>
          <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" value="{{$data->penerbit}}">
        </div>
      </div>
      <div class="card-body">
        <label for="category_id">Kategori</label>
        <select class="form-control" id="kategori_id" name="kategori_id">
          @foreach($kategori as $item)
            <option value="{{ $item->id }}" {{$data->kategori_id === $item->id ? 'selected' : ''}}>{{ $item->nama_kategori }}</option>
          @endforeach
        </select>
      </div>

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@stop