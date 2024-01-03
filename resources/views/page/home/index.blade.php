@extends('vendor.eperpus.layout')

@section('title', 'e-perpus | Koleksi Buku')

@section('content')
<div class="container justify-content-center align-items-center">
    <form class="d-flex" role="search" action="{{route('home')}}" method="get">
        @csrf
        <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search" name="q" id="q" value="{{$search}}">
        
        
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    @if ($search)
        <a href="{{ route('home') }}" class="btn btn-outline-secondary mt-3">Clear Search</a>
    @endif
</div>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
    @forelse($data as $item)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <h6 class="card-subtitle mb-3">{{$item->pengarang}}</h6>                
                    <p class="card-text">Penerbit: {{$item->penerbit}} - ISBN: {{$item->isbn}}</p>
                    <span class="badge rounded-pill {{$item->isAvailable ? 'text-bg-success' : 'text-bg-danger'}}">
                        {{$item->isAvailable ? "Tersedia" : "Tidak Tersedia"}}
                    </span>
                </div>
            </div>
        </div>
    @empty
        <div class="col">
            <p>No results found</p>
        </div>
    @endforelse

</div>
@stop