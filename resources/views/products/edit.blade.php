@extends('layouts.master')

@section('content')

<h2 class="mb-3">Edit Produk</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control" value="{{ $product->nama_produk }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi Produk</label>
        <textarea name="deskripsi_produk" class="form-control" rows="4">{{ $product->deskripsi_produk }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Foto Produk</label>
        <input type="text" name="foto_produk" class="form-control" value="{{ $product->foto_produk }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection