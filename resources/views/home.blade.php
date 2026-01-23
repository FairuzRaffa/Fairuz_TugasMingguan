@extends('layouts.main')

@section('content')
<section class="hero position-relative d-flex align-items-center justify-content-center" style="min-height: 90vh;">
    <div class="container">
        <div class="hero-inner text-center">

            <!-- Badge -->
            <span class="hero-badge mb-4 d-inline-block">
                🎓 Sistem Informasi Akademik
            </span>

            <!-- Title -->
            <h1 class="hero-title fw-bold mb-4">
                Viruz<span class="text-primary">TI</span>
            </h1>

            <!-- Subtitle -->
            <p class="hero-sub mt-3 mb-5" style="font-size: 1.125rem; line-height: 1.8; max-width: 600px; margin-left: auto; margin-right: auto;">
                Platform manajemen data mahasiswa berbasis Laravel
                <br>dengan arsitektur modern, aman, dan profesional.
            </p>

            <!-- CTA Button -->
            <div class="mt-5">
                <a href="/datamahasiswa" class="btn btn-primary btn-lg me-3">
                    <i class="bi bi-arrow-right"></i> Lihat Data
                </a>
                <a href="/contact" class="btn btn-outline-secondary btn-lg">
                    <i class="bi bi-chat-dots"></i> Hubungi Kami
                </a>
            </div>

        </div>
    </div>

</section>
@endsection