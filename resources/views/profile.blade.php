@extends('layouts.main')

@section('content')
<div class="container py-5">

    <div class="row g-4">
        <!-- LEFT PROFILE -->
        <div class="col-lg-4">
            <div class="card profile-card border-0 shadow-sm text-center">
                <div class="profile-header"></div>

                <div class="card-body">
                    <img src="{{ asset('img/fairuz.jpg') }}" 
                         class="rounded-circle profile-img shadow"
                         alt="Foto Profil">

                    <h4 class="fw-bold mt-3 mb-1">{{ $nama }}</h4>
                    <p class="text-muted small mb-3">
                        Teknologi Informasi · Universitas Muhammadiyah Semarang
                    </p>

                    <div class="d-flex justify-content-center gap-2 mb-4">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="btn btn-outline-dark btn-sm">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>

                    <div class="text-start small">
                        <p class="mb-2">
                            <i class="fas fa-phone me-2 text-primary"></i>{{ $nohp }}
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2 text-primary"></i>
                            fairuzalif102@gmail.com
                        </p>
                        <p class="mb-0">
                            <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                            Semarang, Indonesia
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="col-lg-8">
            <!-- ABOUT -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">About Me</h5>
                    <p class="mb-0 text-muted">
                        Mahasiswa Teknologi Informasi yang fokus pada pengembangan web modern,
                        khususnya Laravel. Tertarik membangun solusi digital yang
                        sederhana, efektif, dan scalable.
                    </p>
                </div>
            </div>

            <!-- SKILLS -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-4">Skills</h5>

                    <div class="skill-item mb-3">
                        <span>HTML & CSS</span>
                        <div class="progress">
                            <div class="progress-bar" style="width:85%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <span>JavaScript</span>
                        <div class="progress">
                            <div class="progress-bar" style="width:75%"></div>
                        </div>
                    </div>

                    <div class="skill-item mb-3">
                        <span>PHP & Laravel</span>
                        <div class="progress">
                            <div class="progress-bar" style="width:80%"></div>
                        </div>
                    </div>

                    <div class="skill-item">
                        <span>MySQL</span>
                        <div class="progress">
                            <div class="progress-bar" style="width:70%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- EDUCATION -->
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Education</h5>
                    <div>
                        <h6 class="mb-1 fw-semibold">Universitas Muhammadiyah Semarang</h6>
                        <p class="text-muted small mb-0">
                            <i class="fas fa-calendar-alt me-2"></i>2021 – Present
                        </p>
                        <p class="mb-0 small">Teknologi Informasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Custom Style --}}
<style>
    .profile-card {
        overflow: hidden;
    }

    .profile-header {
        height: 120px;
        background: linear-gradient(135deg, #0d6efd, #6610f2);
    }

    .profile-img {
        width: 110px;
        height: 110px;
        object-fit: cover;
        margin-top: -55px;
        border: 4px solid #fff;
    }

    .progress {
        height: 6px;
        border-radius: 10px;
        background-color: #e9ecef;
    }

    .progress-bar {
        background: linear-gradient(135deg, #0d6efd, #6610f2);
    }

    .skill-item span {
        font-size: 14px;
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
    }

    .card {
        border-radius: 16px;
    }
</style>
@endsection
