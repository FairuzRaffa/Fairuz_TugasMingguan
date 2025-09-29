<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FilmKu.ID | Kontak</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
      body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #0f0f0f;
        color: #ffffff;
      }
      /* Navbar */
      .navbar {
        background-color: #1c1c1c;
      }
      .navbar .nav-link {
        color: #ffffff !important;
        font-weight: 500;
        margin: 0 10px;
      }
      .navbar .nav-link:hover {
        color: #fbc02d !important;
      }
      .navbar-brand {
        font-weight: bold;
      }

      /* Contact Section */
      .contact-card {
        background-color: #1c1c1c;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        color: #fff;
      }
      .contact-card h3 {
        color: #fbc02d;
        margin-bottom: 20px;
        font-weight: bold;
      }
      .form-control {
        background-color: #292929;
        border: none;
        color: #fff;
      }
      .form-control:focus {
        background-color: #333;
        color: #fff;
        box-shadow: 0 0 5px #fbc02d;
      }
      .btn-custom {
        background-color: #fbc02d;
        color: #000;
        font-weight: bold;
        border-radius: 30px;
        padding: 10px 25px;
      }
      .btn-custom:hover {
        background-color: #ffc107;
      }

      /* Info box */
      .info-box {
        background-color: #292929;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
      }
      .info-box h5 {
        color: #fbc02d;
      }
      .info-box p {
        color: #ccc;
      }

      /* Footer */
      footer {
        background-color: #1c1c1c;
        color: #aaa;
      }

      /* Google Maps */
      .map-container {
        margin-top: 30px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">FilmKu.ID</a>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="berita">Berita</a></li>
          <li class="nav-item"><a class="nav-link" href="profile">Profil</a></li>
          <li class="nav-item"><a class="nav-link active" href="contact">Kontak</a></li>
        </ul>
      </div>
    </nav>

        <!-- Info Kontak -->
        <div class="container mt-5">
          <div class="info-box">
            <h5>Alamat</h5>
            <p>Jl. Kedungmundu Raya No. 18, Semarang</p>
          </div>
          <div class="info-box">
            <h5>Email</h5>
            <p>info@unimus.ac.id</p>
          </div>
          <div class="info-box">
            <h5>Telepon</h5>
            <p>+62 812 3456 7890</p>
          </div>
        </div>
      </div>
    </div>

     <!-- Google Maps Embed -->
      <div class="map-container mt-4">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6263517378836!2d110.4659492750514!3d-7.933411492097783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c3b6d0c8a1b%3A0x3039d80b220cf90!2sUniversitas%20Muhammadiyah%20Semarang!5e0!3m2!1sid!2sid!4v1709977777777!5m2!1sid!2sid" 
          width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center p-3 mt-5">
      &copy; <?php echo date("Y"); ?> FilmKu.ID | All Rights Reserved
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
