@extends('layouts.main')

@section('content')
<section class="profile-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">

                <!-- Profile Card -->
                <div class="profile-card">
                    
                    <!-- Header Background with Gradient -->
                    <div class="profile-header">
                        <div class="header-shape"></div>
                    </div>

                    <!-- Profile Content -->
                    <div class="profile-content">

                        <!-- Profile Photo -->
                        <div class="photo-container">
                            <img 
                                src="{{ asset($foto) }}" 
                                alt="Foto Profil {{ $nama }}"
                                class="profile-photo"
                            >
                            <div class="photo-badge">
                                <i class="bi bi-check-circle-fill"></i>
                            </div>
                        </div>

                        <!-- Profile Info -->
                        <div class="profile-info text-center">
                            <h2 class="profile-name">{{ $nama }}</h2>
                            <p class="profile-role">Mahasiswa Teknologi Informasi</p>
                            
                            <!-- Contact Info -->
                            <div class="contact-badge">
                                <i class="bi bi-telephone-fill"></i>
                                <span>{{ $nohp }}</span>
                            </div>

                            <!-- Action Buttons -->
                            <div class="profile-buttons">
                                <a href="{{ route('tampildata', 1) }}" class="btn btn-edit">
                                    <i class="bi bi-pencil-square"></i> Edit Profil
                                </a>
                                <a href="/" class="btn btn-home">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .profile-section {
        background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    /* Profile Card */
    .profile-card {
        background: #ffffff;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(229, 231, 235, 0.3);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .profile-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 70px rgba(37, 99, 235, 0.18);
    }

    /* Header Background */
    .profile-header {
        height: 140px;
        background: linear-gradient(135deg, #2563eb 0%, #06b6d4 100%);
        position: relative;
        overflow: hidden;
    }

    .header-shape {
        position: absolute;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1), transparent),
                    radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1), transparent);
    }

    /* Profile Content */
    .profile-content {
        padding: 0 2rem 2.5rem 2rem;
    }

    /* Photo Container */
    .photo-container {
        position: relative;
        display: flex;
        justify-content: center;
        margin-top: -70px;
        margin-bottom: 2rem;
    }

    .profile-photo {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        border: 5px solid #ffffff;
        object-fit: cover;
        box-shadow: 0 8px 30px rgba(37, 99, 235, 0.25);
        transition: all 0.3s ease;
    }

    .photo-container:hover .profile-photo {
        transform: scale(1.05);
    }

    .photo-badge {
        position: absolute;
        bottom: 0;
        right: 20px;
        width: 40px;
        height: 40px;
        background: #10b981;
        border: 3px solid #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
    }

    /* Profile Info */
    .profile-info {
        text-align: center;
    }

    .profile-name {
        font-size: 1.75rem;
        font-weight: 800;
        color: #1f2937;
        margin-bottom: 0.5rem;
        letter-spacing: -0.5px;
    }

    .profile-role {
        font-size: 1rem;
        color: #2563eb;
        font-weight: 700;
        margin-bottom: 1.25rem;
        letter-spacing: 0.3px;
    }

    /* Contact Badge */
    .contact-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 1.5rem;
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(6, 182, 212, 0.1));
        border: 1.5px solid rgba(37, 99, 235, 0.2);
        border-radius: 12px;
        color: #2563eb;
        font-weight: 600;
        font-size: 0.95rem;
        margin-bottom: 2rem;
        transition: all 0.3s ease;
    }

    .contact-badge:hover {
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.15), rgba(6, 182, 212, 0.15));
        border-color: rgba(37, 99, 235, 0.3);
    }

    .contact-badge i {
        font-size: 1.1rem;
    }

    /* Stats Section */
    .profile-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .stat {
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .stat:hover {
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(6, 182, 212, 0.1));
        transform: translateY(-4px);
    }

    .stat-value {
        display: block;
        font-size: 1.5rem;
        font-weight: 800;
        color: #2563eb;
        margin-bottom: 0.25rem;
    }

    .stat-label {
        display: block;
        font-size: 0.75rem;
        color: #6b7280;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Divider */
    .profile-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, #e5e7eb, transparent);
        margin: 2rem 0;
    }

    /* Bio */
    .profile-bio {
        font-size: 0.95rem;
        color: #6b7280;
        font-style: italic;
        line-height: 1.6;
        margin-bottom: 2rem;
    }

    /* Buttons */
    .profile-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .btn-edit,
    .btn-home {
        padding: 0.95rem 1.75rem;
        border: none;
        border-radius: 12px;
        font-weight: 700;
        font-size: 0.95rem;
        letter-spacing: 0.3px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        text-decoration: none;
    }

    .btn-edit {
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        color: white;
        box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
    }

    .btn-edit:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
        color: white;
    }

    .btn-home {
        background: #f3f4f6;
        color: #1f2937;
        border: 2px solid #e5e7eb;
    }

    .btn-home:hover {
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), rgba(6, 182, 212, 0.1));
        border-color: #2563eb;
        color: #2563eb;
        transform: translateY(-3px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .profile-name {
            font-size: 1.5rem;
        }

        .profile-content {
            padding: 0 1.5rem 2rem 1.5rem;
        }

        .profile-stats {
            gap: 0.75rem;
        }
    }
</style>
@endsection
