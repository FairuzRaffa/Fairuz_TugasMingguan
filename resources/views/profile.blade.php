<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FilmKu.ID | Profil</title>
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

      /* Profile Section */
      .profile-card {
        background-color: #1c1c1c;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        color: #fff;
      }
      .profile-card img {
        border-radius: 50%;
        max-width: 150px;
        margin-bottom: 20px;
        border: 3px solid #fbc02d;
      }
      .profile-card h3 {
        font-weight: bold;
        margin-bottom: 10px;
      }
      .profile-card p {
        color: #ccc;
        margin-bottom: 20px;
      }

      /* Table */
      .table {
        background-color: #1c1c1c;
        color: #fff;
      }
      .table th {
        background-color: #292929;
        color: #fbc02d;
      }
      .table td {
        background-color: #1c1c1c;
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
          <li class="nav-item"><a class="nav-link" href="berita">Berita</a></li>
          <li class="nav-item"><a class="nav-link active" href="profile">Profil</a></li>
          <li class="nav-item"><a class="nav-link" href="contact">Kontak</a></li>
        </ul>
      </div>
    </nav>

    <!-- Profile Section -->
    <div class="container mt-5">
      <div class="profile-card text-center">
        <img src="WhatsApp Image 2025-01-06 at 11.45.00.jpeg" alt="Foto Profil">
        <h3>Muhammad Alif Fairuz Raffa</h3>
        <p>Mahasiswa Teknologi Informasi - Universitas Muhammadiyah Semarang</p>
      </div>

      <h2 class="text-center my-5 text-warning">Biodata</h2>

      <?php
        // Biodata menggunakan array asosiatif
        $biodata = [
          "Nama" => "Muhammad Alif Fairuz Raffa",
          "NIM" => "13242420039",
          "Program Studi" => "Teknologi Informasi",
          "Universitas" => "Universitas Muhammadiyah Semarang",
          "Email" => "fairuzalif102@gmail.com"
        ];
      ?>

      <table class="table table-bordered table-striped">
        <tbody>
          <?php
            // Loop biodata
            foreach($biodata as $key => $value){
              echo "<tr>";
              echo "<th style='width:30%'>$key</th>";
              echo "<td>$value</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
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
