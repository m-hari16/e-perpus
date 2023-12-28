@extends('adminlte::page')

@section('title', 'e-perpus | Perpustakaan')

@section('content_header')
    <h1 class="m-0 text-dark">Perpustakaan</h1>
@stop

@section('content')
<div class="row">
    <div class="card w-100">
        <div class="card-header mb-4 p-2">
            <div class="card-tools">
                <div class="input-group input-group-sm p-3" style="width: 150px;">
                    <a class="btn btn-success btn-sm" href="{{ route('perpustakaan.create') }}">
                        Tambah Data
                    </a>
                </div>
            </div>
        </div>
        <div class="row p-2">
          @foreach($data as $item)
            <div class="col-4">
                <div class="card card-outline card-success">
                    <div class="card-header">
                      <h2 class="card-title">{{$item->nama}}</h2>
                    </div>
                    <div class="card-body">
                      <p>{{$item->alamat}}</p>
                      <p>{{json_decode($item->others_identity) ?? "-"}}</p>
                    </div>
                    <div class="card-footer">
                      <a class="btn btn-info btn-sm" href="{{route('perpustakaan.edit', $item->id)}}">
                        <i class="fas fa-pencil-alt"></i>
                        Edit
                      </a>
                      <form action="{{ route('perpustakaan.destroy', $item->id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                      </form>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>


@stop