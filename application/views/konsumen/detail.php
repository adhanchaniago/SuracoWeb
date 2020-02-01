<div class="container">
  <div class="row mt-3 justify-content-center">
    <div class="col-md-8">
      <div class="card">
          <div class="card-header">
            Detail Data Konsumen
          </div>
          <div class="card-body">
            <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Nama Konsumen</h4>
              <h4 class="card-subtitle mb-2 text-muted">Nomor Rangka</h4>
              <p>Alamat</p>
              <p>Merk</p>
              <p>Telepon</p>
              <p>E-mail</p>
              <p>Tanggal</p>
              <p>Status</p>
            </div>
            <div class="col-md-6">
              <h4 class="card-title">: <?= $konsumen['nama']; ?></h4>
              <h4 class="card-subtitle mb-2 text-muted">: <?= $konsumen['norang']; ?></h4>
              <p class="card-text">: <?= $konsumen['alamat']; ?></p>
              <p class="card-text">: <?= $konsumen['type']; ?></p>
              <p class="card-text">: <?= $konsumen['telp']; ?></p>
              <p class="card-text">: <?= $konsumen['email']; ?></p>
              <p class="card-text">: <?= date('d F Y', strtotime($konsumen['tanggal'])); ?></p>
              <p class="card-text">: <?= $konsumen['status']; ?></p>
            </div>
          </div>
            <a href="<?= base_url(); ?>" class="btn btn-primary float-right">Kembali</a>
          </div>
        </div>

    </div>
  </div>

</div>
