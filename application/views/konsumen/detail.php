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
        </div>
      </div>

    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Detail Data Pengambilan STNK
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Status Pengambilan</h4>
              <h4 class="card-title">Nama</h4>
              <h4 class="card-title">Tanggal Pengambilan</h4>
            </div>
            <div class="col-md-6">
              <h4 class="card-title">: <?= $ambil['status1']; ?></h4>
              <h4 class="card-subtitle mb-2 text-muted">: <?= $ambil['nama1']; ?></h4>
              <h4 class="card-subtitle mb-2 text-muted">: <?= $ambil['tgl1']; ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Detail Data Pengambilan PLAT
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Status Pengambilan</h4>
              <h4 class="card-title">Nama</h4>
              <h4 class="card-title">Tanggal Pengambilan</h4>
            </div>
            <div class="col-md-6">
              <h4 class="card-title">: <?= $ambil['status2']; ?></h4>
              <h4 class="card-subtitle mb-2 text-muted">: <?= $ambil['nama2']; ?></h4>
              <h4 class="card-subtitle mb-2 text-muted">: <?= $ambil['tgl2']; ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
