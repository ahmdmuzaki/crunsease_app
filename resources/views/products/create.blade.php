@extends('layouts.master')

@section('content')

<h2 class="mb-3">Tambah Produk</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi Produk</label>
        <textarea name="deskripsi_produk" class="form-control" rows="4"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Foto Produk (nama file)</label>
        <input type="text" name="foto_produk" class="form-control" placeholder="contoh: produk1.jpeg">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection