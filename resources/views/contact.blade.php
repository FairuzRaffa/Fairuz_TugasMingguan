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
                            src="https://www.google.com/maps/place/Ngawi,+Jawa+Timur/@-7.4107619,111.4407497,13z/data=!3m1!4b1!4m6!3m5!1s0x2e79e59d8b8b8b8b:0x8b8b8b8b8b8b8b8b!8m2!3d-7.4107672!4d111.4433246!16s%2Fm%2F027j0q?entry=ttu"
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
