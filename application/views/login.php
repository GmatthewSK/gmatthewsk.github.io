<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Hotel Transylvania</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('<?= base_url("assests/pic/login5.jpg") ?>'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;
      width: auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.3); 
      border: none;
      border-radius: 12px;
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.6);
      border: 1px solid #ccc;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.8);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card p-4 shadow">
          <h3 class="text-center mb-4 text-dark">Login</h3>
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger">
                    <?= $this->session->flashdata('error') ?>
                </div>
            <?php endif; ?>
          <form method="post" action="<?= base_url('auth/do_login') ?>">
            <div class="mb-3">
              <label for="username" class="form-label text-dark">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label text-dark">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
