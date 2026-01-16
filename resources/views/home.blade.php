@extends('layouts.main')

@section('content')
<div class="container-fluid px-0">
    <section class="hero-modern d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <span class="hero-badge mb-3 d-inline-block">
                        OFFICIAL WEBSITE
                    </span>

                    <h1 class="hero-title mb-3">
                        Welcome to <br>
                        <span>Our Space</span>
                    </h1>

                    <p class="hero-desc mb-4">
                        Menyajikan berita, informasi, dan profil kami dengan
                        tampilan modern, elegan, dan terpercaya untuk semua kalangan.
                    </p>

                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-hero-primary">
                            🚀 Explore
                        </a>
                        <a href="#" class="btn btn-hero-outline">
                            About Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* HERO */
.hero-modern {
    min-height: 70vh;
    background: linear-gradient(120deg, #1a66ff, #5b2dff);
    color: #fff;
}

/* BADGE */
.hero-badge {
    font-size: 12px;
    letter-spacing: 2px;
    opacity: 0.85;
}

/* TITLE */
.hero-title {
    font-size: 3rem;
    font-weight: 800;
    line-height: 1.2;
}

.hero-title span {
    color: #ffcc00;
}

/* DESC */
.hero-desc {
    max-width: 520px;
    opacity: 0.9;
}

/* BUTTONS */
.btn-hero-primary {
    background: #ffcc00;
    color: #000;
    font-weight: 600;
    padding: 10px 28px;
    border-radius: 12px;
    border: none;
}

.btn-hero-primary:hover {
    background: #ffd633;
}

.btn-hero-outline {
    border: 1px solid rgba(255,255,255,0.6);
    color: #fff;
    padding: 10px 28px;
    border-radius: 12px;
}

.btn-hero-outline:hover {
    background: rgba(255,255,255,0.1);
}
</style>
@endsection
