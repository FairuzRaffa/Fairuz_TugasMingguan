<?php
// --- Data Home disimpan di array PHP ---
$home = [
  "judul" => "Selamat Datang di FilmKU.ID",
  "deskripsi" => "Temukan berbagai informasi, berita, dan Film menarik di sini",
  "link" => "#",
  "tombol" => "Jelajahi Sekarang"
];

?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FilmKu.ID | Home</title>
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

      /* Hero Section */
      .hero {
        min-height: 90vh;
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                    url('https://source.unsplash.com/1600x900/?technology,cinema') no-repeat center center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding: 50px 20px;
      }
      .hero h1 {
        font-size: 3rem;
        font-weight: bold;
      }
      .hero p {
        font-size: 1.2rem;
        margin: 20px 0;
      }
      .hero .btn-custom {
        background-color: #fbc02d;
        color: #000;
        font-weight: bold;
        border-radius: 30px;
        padding: 12px 30px;
      }
      .hero .btn-custom:hover {
        background-color: #ffc107;
        color: #000;
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
      <a class="navbar-brand font-weight-bold" href="#">FilmKu.ID</a>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="berita">Berita</a></li>
          <li class="nav-item"><a class="nav-link" href="profile">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="contact">Kontak</a></li>
        </ul>
      </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
      <div>
        <h1><?php echo $home['judul']; ?></h1>
        <p><?php echo $home['deskripsi']; ?></p>
        <a href="<?php echo $home['link']; ?>" class="btn btn-custom">
          <?php echo $home['tombol']; ?>
        </a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center p-3 mt-5">
      &copy; <?php echo date("Y"); ?> FilmKu.ID | All Rights Reserved
    </footer>
  </body>
</html>
