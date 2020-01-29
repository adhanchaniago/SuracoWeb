<div class="container">
  <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3 ">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Konsumen <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url();?>konsumen/tambah" class="btn btn-primary">Tambah Data Konsumen</a>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-light mr-sm-2 " data-toggle="modal" data-target="#exampleModal">Cetak Berkas</button>
    </div>
  </div>
  <div class="row mt-5 justify-content-center">
    <div class="col-md-6">
      <form action="<?= base_url('konsumen'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari data konsumen.." name="keyword"
          autocomplete="off" autofocus>
          <div class="input-group-append">
            <input class="btn btn-primary" type="submit" name="submit">
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h3>Daftar Konsumen</h3>
      <?php if( empty($konsumen)) : ?>
        <div class=" alert alert-danger" role="alert">
          Data konsumen tidak ditemukan.
        </div>
      <?php endif; ?>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Konsumen</th>
            <th>No.Rangka</th>
            <th>Type</th>
            <th>Email</th>
            <th>Tanggal</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $konsumen as $ksm ) : ?>
            <tr>
              <th><?= ++$start; ?></th>
              <td><?= $ksm['nama']; ?></td>
              <td><?= $ksm['norang']; ?></td>
              <td><?= $ksm['type']; ?></td>
              <td><?= $ksm['email']; ?></td>
              <td><?=date('d F Y', strtotime($ksm['tanggal'])); ?></td>
              <td>
                <a href="<?= base_url(); ?>ubah/<?= $ksm['id']; ?>" class="btn btn-success float-right ml-2">ubah</a>
                <a href="<?= base_url(); ?>detail/<?= $ksm['id']; ?>" class="btn btn-primary float-right ml-2">detail</a>
                <a href="<?= base_url(); ?>kirim/<?= $ksm['id']; ?>" class="btn btn-warning float-right ml-2">kirim</a>
                <a href="<?= base_url().'pengambilan/'.$ksm['norang'] ?>" class="btn btn-info float-right">Ambil</a>
              </td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <?= $this->pagination->create_links(); ?>

    </div>
  </div>
</div>


<!-- Modal Cetak Berkas-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form cetak berkas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url().'cetak';?>" method="post" target="_blank">
          <table>
            <tr>
              <td>
                <div class="form-group">Dari Tanggal :</div>
              </td>
              <td>
                <div class="form-group">
                  <input type="date" name="tgl_a" class="form-control" required>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">Sampai Tanggal :</div>
              </td>
              <td>
                <div class="form-group">
                  <input type="date" name="tgl_b" class="form-control" required>
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
              </td>
            </tr>
          </table>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Cetak Tanggal Hari Ini</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="print" class="btn btn-danger" value="Cetak">
        </div>
      </form>
    </div>
  </div>
</div>
