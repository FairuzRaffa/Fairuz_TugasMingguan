@extends('layouts.main')

@section('content')
<section class="berita-detail-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Back Button -->
                <a href="{{ url('/berita') }}" class="berita-back-link mb-4">
                    <i class="bi bi-arrow-left"></i> Kembali ke Berita
                </a>

                <!-- Article Card -->
                <article class="berita-detail-card">
                    
                    <!-- Header -->
                    <div class="berita-detail-header">
                        <h1 class="berita-detail-title">{{ $new_berita["judul"] }}</h1>
                        <div class="berita-detail-meta">
                            <span class="meta-author">
                                <i class="bi bi-person"></i> {{ $new_berita["penulis"] }}
                            </span>
                            <span class="meta-date">
                                <i class="bi bi-calendar"></i> {{ now()->format('d M Y') }}
                            </span>
                        </div>
                    </div>

                    <!-- Divider -->
                    <hr class="berita-divider">

                    <!-- Content -->
                    <div class="berita-detail-content">
                        <p>{{ $new_berita["konten"] }}</p>
                    </div>

                    <!-- Divider -->
                    <hr class="berita-divider">

                    <!-- Action -->
                    <div class="berita-detail-action">
                        <a href="{{ url('/berita') }}" class="btn btn-primary btn-berita">
                            <i class="bi bi-arrow-left"></i> Kembali ke Daftar Berita
                        </a>
                    </div>

                </article>

            </div>
        </div>
    </div>
</section>

<style>
    .berita-detail-section {
        background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
        min-height: 100vh;
    }

    .berita-back-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #2563eb;
        text-decoration: none;
        font-weight: 600;
        padding: 0.75rem 1rem;
        border-radius: 8px;
        transition: 0.3s ease;
    }

    .berita-back-link:hover {
        background: #f0f9ff;
        transform: translateX(-4px);
    }

    .berita-detail-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid rgba(209, 213, 219, 0.5);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        padding: 3rem 2rem;
    }

    .berita-detail-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .berita-detail-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1f2937;
        line-height: 1.3;
        margin-bottom: 1.5rem;
    }

    .berita-detail-meta {
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .meta-author,
    .meta-date {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #6b7280;
        font-size: 0.95rem;
        font-weight: 500;
    }

    .meta-author i,
    .meta-date i {
        color: #2563eb;
        font-size: 1.1rem;
    }

    .berita-divider {
        border: none;
        height: 2px;
        background: linear-gradient(90deg, transparent, #e5e7eb, transparent);
        margin: 2rem 0;
    }

    .berita-detail-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #374151;
        margin-bottom: 2rem;
    }

    .berita-detail-content p {
        margin-bottom: 1.5rem;
    }

    .berita-detail-action {
        text-align: center;
        padding-top: 1rem;
    }

    .btn-berita {
        padding: 0.875rem 2rem;
        font-weight: 600;
        border-radius: 10px;
        border: none;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        color: white;
        transition: 0.3s ease;
    }

    .btn-berita:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(37, 99, 235, 0.4);
        color: white;
    }

    @media (max-width: 768px) {
        .berita-detail-title {
            font-size: 1.75rem;
        }

        .berita-detail-card {
            padding: 1.5rem;
        }

        .berita-detail-meta {
            gap: 1rem;
        }
    }
</style>
@endsection