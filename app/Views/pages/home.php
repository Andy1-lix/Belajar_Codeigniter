  <?= $this->extend('layout/template'); ?> <!-- Mengambil tampilan/data pada folder layout -->
  <?= $this->section('content'); ?> <!-- Untuk me render content ke semua halaman yang di inginkan -->
  
  <div class="container">
      <div class="row">
          <div class="col">
              <h1>Hello, world!</h1>
          </div>
        </div>
    </div>
    <?= $this->endSection(); ?> <!-- Akhir dari section -->