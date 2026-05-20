@extends('layouts.master')

@section('content')

<h2 class="mb-3">Admin Produk</h2>

<a href="{{ route('products.create') }}" class="btn btn-success mb-3">
    + Tambah Produk
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->nama_produk }}</td>
            <td>{{ $p->deskripsi_produk }}</td>
            <td>
                <img src="{{ asset($p->foto_produk) }}" width="80">
            </td>
            <td>
                <a href="{{ route('products.edit', $p->id) }}" class="btn btn-primary btn-sm">Edit</a>

                <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus produk ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection