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
            <a class="nav-link active" aria-current="page" href="<?= base_url('home') ?>" >Home</a>
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