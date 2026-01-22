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
                        Ngawi, Jawa Timur, Indonesia
                    </p>

                    <p class="mb-2">
                        📞 <strong>Telepon:</strong><br>
                        <a href="tel:085711294539" class="contact-link">0857-1129-4539</a>
                    </p>

                    <p class="mb-3">
                        💬 <strong>WhatsApp:</strong><br>
                        <a href="https://wa.me/6285711294539" target="_blank" class="contact-link">
                            Chat via WhatsApp
                        </a>
                    </p>

                    <!-- MAPS -->
                    <div class="map-box mt-3">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.5634095156167!2d111.39078842346897!3d-7.41676499275922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79e7aec90c1709%3A0x3191087af4043527!2sNgawi%2C%20East%20Java%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1642835924567"
                            width="100%" height="250"
                            style="border:0; border-radius:12px;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
