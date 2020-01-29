<div class="container">

    <h3 align="center">Cari data Konsumen</h3>
  <div class="row mt-5 justify-content-center">
    <div class="col-md-6">
      <form action="<?= base_url('/pelanggan/cari'); ?>" method="post">
                <div class="input-group mb-3">
          <input type="text" name="keyword" class="form-control" placeholder="Cari data konsumen.." name="keywordm" autocomplete="off" autofocus>
          <div class="input-group-append">
            <input class="btn btn-primary" type="submit" name="submit">
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php if ($key == 2) { ?>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <?php if( empty($konsumen)) : ?>
          <div class=" alert alert-danger" role="alert">
            Data konsumen tidak ditemukan.
          </div>
        <?php endif; ?>
        <table class="table">
          <thead>
            <tr>

              <th>Nama Konsumen</th>
              <th>No.Rangka</th>
              <th>Merk</th>
              <th>Email</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ( $konsumen as $ksm ) : ?>
              <tr>
                <td><?= $ksm['nama']; ?></td>
                <td><?= $ksm['norang']; ?></td>
                <td><?= $ksm['merk']; ?></td>
                <td><?= $ksm['email']; ?></td>
                <td>
                  <a href="<?= base_url(); ?>pelanggan/detail/<?= $ksm['id']; ?>"
                    class="badge badge-primary">detail</a>
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      </div>
    <?php } ?>
</div>
