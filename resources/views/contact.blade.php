@extends('layouts.main')

@section('content')
<section class="contact-section py-5">
    <div class="container">
        
        <!-- HEADER -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-white">Contact Us</h1>
            <p class="text-muted">
                Punya pertanyaan atau masukan? Silakan hubungi kami melalui form atau kontak di bawah.
            </p>
        </div>

        <div class="row g-4">
            
            <!-- FORM -->
            <div class="col-md-6">
                <div class="card contact-card p-4">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan email Anda">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda..."></textarea>
                        </div>

                        <button class="btn btn-primary w-100">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <!-- INFO KONTAK -->
            <div class="col-md-6">
                <div class="card contact-card p-4 h-100">
                    <h5 class="fw-bold mb-3">Informasi Kontak</h5>

                    <p class="mb-2">
                        📍 <strong>Alamat:</strong><br>
                        Jl. Kebayoran Lama No.123, Jakarta Selatan, Indonesia
                    </p>

                    <p class="mb-2">
                        📞 <strong>Telepon:</strong><br>
                        <a href="tel:081234567890" class="contact-link">0812-3456-7890</a>
                    </p>

                    <p class="mb-3">
                        💬 <strong>WhatsApp:</strong><br>
                        <a href="https://wa.me/6281234567890" target="_blank" class="contact-link">
                            Chat via WhatsApp
                        </a>
                    </p>

                    <!-- MAPS -->
                    <div class="map-box mt-3">
                        <iframe 
                            src="https://www.google.com/maps?q=Jakarta&output=embed"
                            width="100%" height="200"
                            style="border:0; border-radius:12px;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
