@extends('layouts.main')

@section('content')
<section class="contact-section py-5">
    <div class="container">
        
        <!-- HEADER -->
        <div class="text-center mb-5">
            <h1 class="fw-bold">Hubungi Kami</h1>
            <p class="text-muted" style="font-size: 1.1rem;">
                Punya pertanyaan atau masukan? Silakan hubungi kami melalui form atau kontak di bawah.
            </p>
        </div>

        <div class="row g-4">
            
            <!-- FORM -->
            <div class="col-lg-6">
                <div class="card contact-card p-4">
                    <h5 class="fw-bold mb-4">Kirim Pesan</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-500">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama Anda" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-500">Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan email Anda" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-500">Nomor Telepon</label>
                            <input type="tel" class="form-control" placeholder="Masukkan nomor Anda">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-500">Pesan</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-send"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <!-- INFO KONTAK & MAPS -->
            <div class="col-lg-6">
                <!-- INFO KONTAK -->
                <div class="card contact-card p-4 mb-4">
                    <h5 class="fw-bold mb-4">📍 Informasi Kontak</h5>

                    <div class="mb-3">
                        <p class="text-muted mb-1"><strong>Alamat:</strong></p>
                        <p>Pekalongan, Jawa Tengah, Indonesia</p>
                    </div>

                    <div class="mb-3">
                        <p class="text-muted mb-1"><strong>Telepon:</strong></p>
                        <a href="tel:085711294539" class="contact-link fw-500">
                            📞 0857-1129-4539
                        </a>
                    </div>

                    <div class="mb-0">
                        <p class="text-muted mb-1"><strong>WhatsApp:</strong></p>
                        <a href="https://wa.me/6285711294539" target="_blank" class="contact-link fw-500">
                            💬 Chat via WhatsApp
                        </a>
                    </div>
                </div>

                <!-- MAPS -->
                <div class="card contact-card p-0 overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1234567890!2d109.6800!3d-6.8900!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1sPekalongan!3d-6.8900!4d109.6800!5e0!3m2!1sid!2sid!4v1674500000000"
                        width="100%" 
                        height="300"
                        style="border:none;"
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .contact-section {
        background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
    }

    .contact-section h1 {
        color: #2563eb;
    }

    .contact-card {
        background: rgba(255,255,255,.8);
        border-radius: 12px;
        border: 1px solid rgba(209,213,219,.5);
        box-shadow: 0 4px 15px rgba(0,0,0,.08);
        transition: .3s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,.12);
    }

    .contact-link {
        color: #2563eb;
        text-decoration: none;
        transition: .2s ease;
    }

    .contact-link:hover {
        color: #06b6d4;
        text-decoration: underline;
    }

    .form-label {
        color: #1f2937;
        margin-bottom: 0.5rem;
    }

    .fw-500 {
        font-weight: 500;
    }
</style>
@endsection
