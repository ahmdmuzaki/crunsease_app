@extends('layouts.master')

@section('content')

<div class="min-vh-75 d-flex align-items-center py-5 px-4 px-md-5" style="background:#faf9f7; overflow:hidden; position:relative;">
    <div class="position-absolute top-50 end-0 translate-middle-y fw-bold text-dark user-select-none"
         style="font-size:clamp(6rem,18vw,16rem); font-family:Georgia,serif; letter-spacing:-0.04em; opacity:0.04; white-space:nowrap; pointer-events:none;">
        ABOUT
    </div>

    <div class="position-relative" style="max-width:620px;">
        <h1 class="fw-light mb-3" style="font-family:Georgia,serif; font-size:clamp(2.4rem,5vw,4rem); line-height:1.1;">
            Tentang<br>
            <span class="fw-bold fst-italic" style="color:#c0392b;">CRUNSEASE</span>
        </h1>

        <p class="mb-4" style="font-family:Georgia,serif; color:#666; line-height:1.8; max-width:500px;">
            Website ini merupakan katalog digital resmi dari <strong class="text-dark">CRUNSEASE</strong> —
            dirancang khusus untuk menampilkan seluruh koleksi artikel clothing kami.
            Di sini Anda dapat melihat detail produk, spesifikasi bahan, dan panduan ukuran
            secara lengkap untuk memudahkan pilihan sebelum melakukan pembelian.
        </p>

        <div class="d-flex align-items-center gap-4 flex-wrap">
            <a href="/produk"
               class="text-white text-decoration-none px-4 py-2 border border-dark fw-semibold"
               style="background:#111; font-family:'Courier New',monospace; font-size:0.82rem; letter-spacing:0.08em;">
                Lihat Katalog
            </a>
        </div>
    </div>
</div>

@endsection