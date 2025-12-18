@extends('layouts.main')

@section('content')
<div class="container mt-5">

    <div class="p-5 rounded-4 shadow-sm bg-white">
        <span class="text-uppercase text-muted small tracking-wide">
            Official Website
        </span>

        <h1 class="fw-bold mt-2 mb-3">
            Welcome to <span class="text-primary">Our Space</span>
        </h1>

        <p class="text-muted mb-4" style="max-width: 520px;">
            Menyajikan berita, informasi, dan profil kami dengan tampilan
            modern, sederhana, dan terpercaya.
        </p>

        <div class="d-flex gap-3">
            <a href="#" class="btn btn-primary px-4 shadow-sm">
                Explore
            </a>
            <a href="#" class="btn btn-outline-secondary px-4">
                About Us
            </a>
        </div>
    </div>

</div>
@endsection
