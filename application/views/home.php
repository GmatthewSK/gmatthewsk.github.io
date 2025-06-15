<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Hotel Transylvania</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
      body {
        font-family: 'Quicksand', sans-serif;
        background: linear-gradient(135deg, #1e1e2f, #141422);
        color: #e0e0e0;
      }

      header {
        background: linear-gradient(90deg, #1a1a2e, #3a0ca3);
      }

      .hero-section {
        background: #22223b;
        padding: 60px 20px;
        border-radius: 1rem;
        box-shadow: 0 4px 20px rgba(160, 64, 255, 0.3);
        margin-top: 20px;
        color: #f8f8ff;
      }

      .card {
        border: none;
        background-color: #2c2c54;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s;
        color: #ffffff;
      }

      .card:hover {
        transform: scale(1.03);
      }

      .btn-primary {
        background-color: #6a4c93;
        border: none;
      }

      .btn-primary:hover {
        background-color: #3f37c9;
      }

      footer {
        text-align: center;
        padding: 2px 0;
        color:rgb(18, 16, 16);
      }

      .card-img-wrapper {
        position: relative;
        overflow: hidden;
      }

      .card-img-wrapper img {
        transition: transform 0.5s ease, filter 0.5s ease;
        width: 100%;
        display: block;
      }

      .card-img-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(15, 15, 15, 0.7);
        color: #f1f1f1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.4s ease;
        text-align: center;
        padding: 20px;
        font-size: 0.95rem;
      }

      .card-img-wrapper:hover img {
        transform: scale(1.05);
        filter: blur(2px) brightness(0.8);
      }

      .card-img-wrapper:hover .card-img-overlay {
        opacity: 1;
      }

      .modal-content {
        background-color: #2a2a40;
        color: #ffffff;
      }

      .form-control,
      .form-select {
        background-color: #1e1e2e;
        border: 1px solid #444;
        color: #fff;
      }

      .form-control:focus,
      .form-select:focus {
        background-color: #1e1e2e;
        color: #fff;
        border-color: #6a4c93;
        box-shadow: 0 0 0 0.2rem rgba(160, 64, 255, 0.3);
      }

      .btn-close {
        filter: invert(1);
      }

      .nav-link {
        color: #e0e0e0 !important;
      }

      .nav-link:hover {
        color: #ff85d8 !important;
      }

      .btn-outline-light {
        border-color: #ccc;
        color: #fff;
      }

      .btn-outline-light:hover {
        background-color: #5a189a;
        border-color: #5a189a;
      }

      .btn-warning-light {
        background-color: #ff85d8;
        color: #1e1e2f;
        border: none;
      }

      .btn-warning-light:hover {
        background-color: #f72585;
        color: #fff;
      }

      h1, h3, h4, h5 {
        color: #fdfdfd;
      }

      small {
        color: #aaa;
      }

      a {
        color: #a78bfa;
        text-decoration: none;
      }

      a:hover {
        color: #fbb6ce;
      }
    </style>

  </head>
  <body>

  <!-- Header Navbar -->
  <header class="p-3 text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between">
        <h3 class="mb-0">🏰 Hotel Transylvania</h3>
        <ul class="nav">
          <li><a href="<?= base_url('home') ?>" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="#booking" class="nav-link px-2 text-white">Booking</a></li>
          <li><a href="#about" class="nav-link px-2 text-white">About</a></li>
        </ul>
        <form class="d-flex me-3">
          <input type="search" class="form-control form-control-light" placeholder="Search..." aria-label="Search">
        </form>
        <div>
          <a href="<?= base_url('auth/login') ?>" class="btn btn-outline-light me-2">Login</a>
          <a href="<?= base_url('auth/signup') ?>" class="btn btn-warning-light me-2">Sign-up</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <main>
    <div class="container hero-section text-center mt-4">
      <h1 class="display-5 fw-bold">💫 Selamat Datang di Hotel Transylvania! 🪄</h1>
      <p class="fs-5 mt-3">Tempat sempurna untuk liburan penuh kenyamanan dan keseruan!  
        Didesain dengan nuansa fantasi yang ramah dan hangat, kami menawarkan berbagai tipe kamar modern, 
        fasilitas lengkap, serta pelayanan ramah untuk keluarga, pasangan, maupun solo traveler.  
        Yuk, temukan pengalaman menginap yang unik dan menyenangkan hanya di sini!</p>
    </div>

    <!-- Room Cards -->
    <div class="container mt-5" id="booking">
      <div class="row mb-5">
        <?php foreach($row as $r) : ?>
        <?php
        $specs = [
          'Standard Room' => [
            '1 Queen Bed',
            'Free Wi-Fi',
            'AC & TV',
            'Private Bathroom',
            'Complimentary Breakfast',
          ],
          'Deluxe Room' => [
            '1 King Bed & Sofa',
            'City View',
            'Free Wi-Fi & Netflix',
            'Mini Fridge & Coffee Maker',
            'Room Service 24/7',
          ],
          'Presendial Room' => [
            '2 King Beds & Living Area',
            'Private Jacuzzi',
            'Ocean View Balcony',
            'Smart Home Features',
            'VIP Butler Service',
          ],
          'Ball Room' => [
            'Sound System & Microphone',
            'Proyektor & Layar Besar',
            'Pencahayaan & Lighting Dekoratif',
            'Kursi & Meja',
            'AC & Fasilitas Kenyamanan',
          ],
          'Restaurant' => [
            'Layanan Buffet & À la Carte',
            'Tempat Duduk Nyaman & Interior Berkelas',
            'Free Wi-Fi',
            'Musik Latar & Kadang Live Music',
            'Standar Kebersihan Tinggi & Layanan Profesional',
          ],
          'Meeting Room' => [
            'Proyektor & Layar Presentasi',
            'Sound System & Microphone',
            'Kursi & Meja Meeting',
            'Coffee Break & Snack Area',
            'Wi-Fi & Soket Listrik',
          ]
        ];
        $tipe = $r->tipe_kamar;
        $fitur = $specs[$tipe] ?? ['Fitur belum tersedia'];
        ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
              <div class="card-img-wrapper">
                <img src="<?= base_url('uploads/'.$r->gambar) ?>" class="card-img-top" alt="Room Image">
                <div class="card-img-overlay">
                  <h6 class="fw-bold"><?= $r->tipe_kamar ?></h6>
                  <ul class="list-unstyled">
                    <?php foreach($fitur as $f) : ?>
                      <li>• <?= $f ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            <div class="card-body text-center">
              <h5 class="card-title"><?= $r->tipe_kamar ?></h5>
              <p class="card-text">Rp <?= number_format($r->harga) ?></p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" onclick="setRoomType('<?= $r->tipe_kamar ?>')">Booking</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

<!-- Modal Booking -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="<?= base_url('bookings/submit') ?>" method="post" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingModalLabel">Formulir Booking</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <input type="hidden" name="tipe_kamar" id="inputTipeKamar">

        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal Check-In</label>
          <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <div class="mb-3">
          <label for="durasi" class="form-label">Jumlah Hari Sewa</label>
          <input type="number" class="form-control" id="durasi" name="durasi" min="1" required>
        </div>

        <div class="mb-3">
          <label for="pembayaran" class="form-label">Metode Pembayaran</label>
          <select class="form-select" id="pembayaran" name="pembayaran" required>
            <option value="">-- Pilih --</option>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="GoPay">GoPay</option>
            <option value="Bayar di Tempat">Bayar di Tempat</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim Pemesanan</button>
      </div>
    </form>
  </div>
</div>

  <!-- Footer -->
  <!-- Tambahkan ini di <head> agar ikon muncul -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Footer -->
<footer id="about" class="mt-5 py-4" style="background-color: #f5f5ff;">
  <div class="container">
    <div class="row">
      <!-- Kontak -->
      <div class="col-md-4 mb-3">
        <h4 class="mb-3" style="color: rgb(0,0,0);">Contact Us</h4>
        <ul class="list-unstyled">
          <li class="mb-2">
            <i class="fab fa-github me-2"></i>
            <a href="https://github.com/GmatthewSK" target="_blank">GitHub</a>
          </li>
          <li class="mb-2">
            <i class="fab fa-youtube me-2"></i>
            <a href="https://youtube.com/@dragonmatthew9444?si=ZnpHLEsFSYr4SNrg" target="_blank">Transylvania Channel</a>
          </li>
          <li class="mb-2">
            <i class="fab fa-instagram me-2"></i>
            <a href="https://www.instagram.com/g.matthew.sk?igsh=aWR1dnNsMnI4M21h" target="_blank">Transylvania.Hotel</a>
          </li>
          <li class="mb-2">
            <i class="fas fa-phone me-2"></i>
            <a href="https://wa.me/qr/233F7CD5EXUSH1" target="_blank">+62 87883375756</a>
          </li>
        </ul>
      </div>

      <!-- Maps -->
    <div class="col-md-8 mb-3">
      <h4 class="mb-3" style="color: rgb(0,0,0);">📍 Lokasi Kami</h4>
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3044480783615!2d107.62777107499696!3d-6.973362593027319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1749806975448!5m2!1sen!2sid" 
          width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>


    <!-- Copyright -->
    <div class="text-center mt-4">
      <small>© Hotel Transylvania 2025</small>
    </div>
  </div>
</footer>



  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function setRoomType(tipe) {
    document.getElementById('inputTipeKamar').value = tipe;
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($this->session->flashdata('success')): ?>
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: '<?= $this->session->flashdata('success'); ?>',
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'OK'
});
</script>
<?php endif; ?>

  </body>
</html>
