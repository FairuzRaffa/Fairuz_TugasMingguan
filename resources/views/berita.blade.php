@extends('layouts.main')

@section('content')
<div class="container py-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h3 class="fw-bold mb-1">Berita Terkini</h3>
        <p class="text-muted small mb-0">
            Informasi terbaru dan terpercaya
        </p>
    </div>

    <!-- NEWS LIST -->
    <div class="list-group list-group-flush">
        @foreach ($berita as $item)
        <div class="list-group-item px-0 py-3 news-item">
            <h6 class="fw-semibold mb-1">
                <a href="/berita/{{ data_get($item, 'slug', '') }}"
                   class="text-dark text-decoration-none news-title">
                    {{ data_get($item, 'judul', 'Untitled') }}
                </a>
            </h6>

            <div class="d-flex flex-wrap gap-3 text-muted small mb-1">
                <span>
                    <i class="fas fa-user me-1"></i>
                    {{ data_get($item, 'penulis', 'Admin') }}
                </span>
                <span>
                    <i class="fas fa-clock me-1"></i>
                    {{ data_get($item, 'created_at', 'Baru saja') }}
                </span>
            </div>

            <p class="text-muted small mb-0">
                {{ Str::limit(strip_tags(data_get($item, 'konten', '')), 120) }}
            </p>
        </div>
        @endforeach
    </div>

</div>

{{-- Custom Style --}}
<style>
    .news-item {
        border-bottom: 1px solid #eee;
        transition: background 0.2s ease;
    }

    .news-item:hover {
        background: #f9fafb;
    }

    .news-title:hover {
        color: #0d6efd;
    }
</style>
@endsection
