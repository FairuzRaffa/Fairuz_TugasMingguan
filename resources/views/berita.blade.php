<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FilmKu.ID | Berita</title>
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

      /* Berita Section */
      .section-title {
        text-align: center;
        margin: 50px 0 30px;
        color: #fbc02d;
        font-weight: bold;
      }
      .card {
        background-color: #1c1c1c;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 20px rgba(0,0,0,0.6);
      }
      .card img {
        height: 200px;
        object-fit: cover;
      }
      .card-body {
        color: #fff;
      }
      .card-title {
        color: #fbc02d;
        font-weight: bold;
      }
      .btn-custom {
        background-color: #fbc02d;
        color: #000;
        font-weight: bold;
        border-radius: 30px;
        padding: 6px 20px;
      }
      .btn-custom:hover {
        background-color: #ffc107;
      }

      /* Footer */
      footer {
        background-color: #1c1c1c;
        color: #aaa;
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
          <li class="nav-item"><a class="nav-link active" href="berita">Berita</a></li>
          <li class="nav-item"><a class="nav-link" href="profile">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="contact">Kontak</a></li>
        </ul>
      </div>
    </nav>

    <!-- Berita Section -->
    <div class="container">
      <h2 class="section-title">Berita Film Terkini</h2>
      <div class="row">
        <?php
          // Data berita sederhana
          $berita = [
            [
              "judul" => "Jumbo",
              "deskripsi" => "Jumbo telah mencetak sejarah sebagai film Indonesia terlaris sepanjang masa. Pada awal Juni 2025, film ini berhasil mengumpulkan lebih dari 10 juta penonton hanya dalam 63 hari penayangan.",
              "gambar" => "https://images.harpersbazaar.co.id/unsafe/0x0/smart/media/body_20e0c72106b3487cafa8c206488729a4.jpg",
              "link" => "#"
            ],
            [
              "judul" => "Avatar 3 : Fire and Ash",
              "deskripsi" => "Avatar 3 : Fire and Ash adalah film ketiga dalam seri Avatar karya James Cameron yang akan datang, dijadwalkan rilis di bioskop pada 19 Desember 2025. Film ini akan menjelajahi wilayah baru di Pandora dan menampilkan pengenalan suku Na'vi yang lebih agresif. ",
              "gambar" => "https://www.satelitnews.com/wp-content/uploads/2025/07/avatarr-3.jpg",
              "link" => "#"
            ],
            [
              "judul" => "Captain America : Brave New World",
              "deskripsi" => "Captain America: Brave New World adalah film Marvel Studios tahun 2025 yang menampilkan Anthony Mackie sebagai Captain America yang baru, Sam Wilson.",
              "gambar" => "https://disney.images.edge.bamgrid.com/ripcut-delivery/v2/variant/disney/0758e403-7535-45d0-b34a-19e1d0d121aa/compose?aspectRatio=1.78&format=webp&width=1200",
              "link" => "#"
            ]
          ];

          // Loop berita
          foreach ($berita as $item) {
            echo '
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="'.$item['gambar'].'" class="card-img-top" alt="gambar berita">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">'.$item['judul'].'</h5>
                  <p class="card-text">'.$item['deskripsi'].'</p>
                  <a href="'.$item['link'].'" class="btn btn-custom mt-auto">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
            ';
          }
        ?>
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
