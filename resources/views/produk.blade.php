@extends('layouts.master')

@section('content')

<h2 class="text-center mb-4 fw-bold">Katalog Produk</h2>

<div class="row g-4">

    @foreach($products as $p)
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <img src="{{ $p->foto_produk }}" class="card-img-top" alt="produk">

            <div class="card-body">
                <h5 class="card-title">{{ $p->nama_produk }}</h5>
                <p class="card-text">{{ $p->deskripsi_produk }}</p>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection