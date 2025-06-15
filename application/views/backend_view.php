<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css">
<style>
  footer{
    position: fixed;
    height:70px;
    bottom:0;
    width:100%;
  }
</style>
    <title>Admin</title>
  </head>
  <body>
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('home') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('kamar')?>">Kamar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Backend')?>" tabindex="-1">Admin</a>
          </li>
        </ul>
        <form class="d-flex">
          <a class="btn btn-outline-info" href="<?= base_url('auth/login')?>" type="submit">Logout</a>
        </form>
      </div>
    </div>
  </nav>
</header>
<main>
    <div class="p-5 mb-2 mt-3 bg-light rounded-3 text-center">
        <div class="container-fluid">
            <h3 class="display-5">Welcome Admin</h3>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Durasi</th>
                                <th>Tipe Kamar</th>
                                <th>Metode Pembayaran</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bookings as $booking): ?>
                            <tr>
                                <td><?= $booking->nama ?></td>
                                <td><?= $booking->tanggal ?></td>
                                <td><?= $booking->durasi ?> hari</td>
                                <td><?= $booking->tipe_kamar ?></td>
                                <td><?= $booking->metode_pembayaran ?></td>
                                <td>Rp <?= number_format($booking->harga, 0, ',', '.') ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="text-center mt-4">
      <span>© Hotel Transylvania 2025</span>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
<script>
    new DataTable('#example');
</script>
  </body>
</html>