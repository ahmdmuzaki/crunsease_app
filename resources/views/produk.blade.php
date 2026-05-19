@extends('layouts.master')

@section('content')

<h2 class="mb-4 text-center fw-bold">Katalog Produk</h2>

<div class="row g-4">

    <!-- CARD 1 -->
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="produk1.jpeg" class="card-img-top" alt="project 1">

            <div class="card-body">
                <h5 class="card-title">T-Shirt CSE VOL 1</h5>
                <p class="card-text">
                    Bagian dari koleksi volume pertama CRUNSEASE dengan detail grafis Survive.
                    <br>Bahan: Cotton Combed 20s Premium
                    <br>Sablon: High-Quality Plastisol Ink
                    <br>Fitting: Boxy Oversize
                </p>
            </div>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="produk2.jpeg" class="card-img-top" alt="project 2">

            <div class="card-body">
                <h5 class="card-title">T-Shirt CSE VOL 2</h5>
                <p class="card-text">
                    Bagian dari koleksi volume kedua CRUNSEASE dengan detail grafis Nevermore. 
                    <br>Bahan: Cotton Combed 20s Premium
                    <br>Sablon: High-Quality Plastisol Ink 
                    <br>Fitting: Boxy Oversize
                </p>
            </div>
        </div>
    </div>

    <!-- CARD 3 -->
    <div class="col-md-4">
        <div class="card shadow-sm">
            <img src="sizechart.jpeg" class="card-img-top" alt="project 3">

            <div class="card-body">
                <h5 class="card-title">Size Chart</h5>
                <p class="card-text">
                    Semua artikel t-shirt kami dirancang dengan potongan Boxy Fit.
                    yang nyaman untuk pergerakan harian Anda.Silakan cek detail Size Chart berikut 
                    untuk menemukan ukuran terbaik Anda.
                </p>
            </div>
        </div>
    </div>

</div>

@endsection
