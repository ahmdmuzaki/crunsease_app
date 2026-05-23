@extends('layouts.master')

@section('content')

<div class="position-relative d-flex align-items-center px-4 px-md-5 py-5 overflow-hidden" style="min-height:72vh; background:#faf9f7;">
    <div class="position-absolute top-50 end-0 translate-middle-y fw-bold text-dark user-select-none"
         style="font-size:clamp(6rem,18vw,16rem); font-family:Georgia,serif; letter-spacing:-0.04em; opacity:0.04; white-space:nowrap; pointer-events:none;">
        HOME
    </div>
    
    <div class="position-relative" style="max-width:640px;">
        <h1 class="fw-light mb-4" style="font-family:Georgia,serif; font-size:clamp(2.4rem,5vw,4rem); line-height:1.1;">
            Selamat Datang di<br>
            <span class="fw-bold fst-italic" style="color:#c0392b;">CRUNSEASE</span>
        </h1>

        <p class="mb-5" style="font-family:Georgia,serif; color:#666; line-height:1.8; max-width:480px;">
            Temukan koleksi pakaian terbaik yang dirancang untuk kenyamanan
            dan gaya harian anda. Jelajahi katalog lengkap kami.
        </p>

        <div class="d-flex align-items-center gap-4 flex-wrap">
            <a href="/produk"
               class="text-white text-decoration-none px-4 py-2"
               style="background:#111; border:2px solid #111; font-family:'Courier New',monospace; font-size:0.85rem; letter-spacing:0.08em;">
                Lihat Catalog 
            </a>
        </div>
    </div>
</div>

@endsection