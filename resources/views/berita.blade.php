@extends('layouts.main')

@section('content')
<div class="container">

    <div class="mb-5 text-center">
        <h1 class="fw-semibold">Berita Terbaru</h1>
        <p class="text-muted">Informasi dan update terbaru</p>
    </div>

    <div class="row g-4 justify-content-center">
        @foreach($beritas as $berita)
        <div class="col-md-5 col-lg-4">

            <a href="/berita/{{ $berita['slug'] }}" class="text-decoration-none">
                <div class="card h-100 content-panel text-center">

                    <div class="card-body">
                        <h5 class="mb-2 text-primary">
                            {{ $berita['judul'] }}
                        </h5>

                        <span class="small text-muted">
                            {{ $berita['penulis'] }}
                        </span>
                    </div>

                </div>
            </a>

        </div>
        @endforeach
    </div>

</div>
@endsection
