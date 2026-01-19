@extends('layouts.main')

@section('content')
<section class="hero position-relative">
    <div class="container">
        <div class="hero-inner text-center">

            <!-- Badge -->
            <span class="hero-badge mb-3 d-inline-block">
                Sistem Informasi Akademik
            </span>

            <!-- Title -->
            <h1 class="hero-title fw-bold">
                Laravel<span class="text-primary">TI</span>
            </h1>

            <!-- Subtitle -->
            <p class="hero-sub mt-3">
                Platform manajemen data mahasiswa berbasis Laravel
                dengan arsitektur modern, aman, dan profesional.
            </p>


        </div>
    </div>
	<footer class="text-center py-4 mt-5">
    <small class="text-muted">
        © {{ date('Y') }} LaravelTI. Crafted with Laravel & Passion.
    </small>
</footer>

</section>
@endsection
