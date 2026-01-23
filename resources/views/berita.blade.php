@extends('layouts.main')

@section('content')
<section class="berita-section py-5">
    <div class="container">

        <!-- Header -->
        <div class="berita-header text-center mb-5">
            <h1 class="berita-title fw-bold mb-2">📰 Berita Terbaru</h1>
            <p class="berita-subtitle">Informasi dan update terbaru dari institusi</p>
        </div>

        <!-- Berita Grid -->
        <div class="row g-4 justify-content-center">
            @foreach($beritas as $berita)
            <div class="col-md-6 col-lg-5">
                <a href="/berita/{{ $berita['slug'] }}" class="berita-link">
                    <div class="berita-card">
                        <!-- Card Header -->
                        <div class="berita-card-header">
                            <span class="berita-badge">Berita</span>
                        </div>

                        <!-- Card Body -->
                        <div class="berita-card-body">
                            <h3 class="berita-card-title">
                                {{ $berita['judul'] }}
                            </h3>

                            <p class="berita-card-excerpt">
                                {{ substr($berita['konten'], 0, 80) }}...
                            </p>

                            <!-- Footer -->
                            <div class="berita-card-footer">
                                <div class="berita-author">
                                    <i class="bi bi-person-circle"></i>
                                    <span>{{ $berita['penulis'] }}</span>
                                </div>
                                <div class="berita-arrow">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .berita-section {
        background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
        min-height: 100vh;
    }

    .berita-header {
        margin-bottom: 3rem;
    }

    .berita-title {
        font-size: 2.5rem;
        color: #2563eb;
        letter-spacing: -0.5px;
    }

    .berita-subtitle {
        font-size: 1.1rem;
        color: #6b7280;
    }

    .berita-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .berita-card {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(209, 213, 219, 0.5);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .berita-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(37, 99, 235, 0.2);
        border-color: #2563eb;
    }

    .berita-card-header {
        padding: 1.5rem;
        background: linear-gradient(135deg, #2563eb 0%, #06b6d4 100%);
        position: relative;
        min-height: 100px;
        display: flex;
        align-items: flex-end;
    }

    .berita-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        backdrop-filter: blur(10px);
    }

    .berita-card-body {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .berita-card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1rem;
        line-height: 1.4;
    }

    .berita-card-excerpt {
        font-size: 0.95rem;
        color: #6b7280;
        line-height: 1.6;
        flex: 1;
        margin-bottom: 1.5rem;
    }

    .berita-card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        border-top: 1px solid #e5e7eb;
    }

    .berita-author {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #2563eb;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .berita-author i {
        font-size: 1.3rem;
    }

    .berita-arrow {
        color: #2563eb;
        font-size: 1.2rem;
        opacity: 0.6;
        transition: 0.3s ease;
    }

    .berita-link:hover .berita-arrow {
        opacity: 1;
        transform: translateX(4px);
    }

    @media (max-width: 768px) {
        .berita-title {
            font-size: 2rem;
        }

        .berita-subtitle {
            font-size: 1rem;
        }
    }
</style>
@endsection
