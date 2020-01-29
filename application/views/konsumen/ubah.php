<div class="container">

  <div class="row mt-3 justify-content-center">
    <div class="col-md-6">

      <div class="card">
          <div class="card-header">
            Form Ubah Data Konsumen
          </div>
          <div class="card-body">
            <?php if ($pesan == 1): ?>
              <div class="alert alert-success" role="alert">
                  Data Berhasil Diubah
                </div>
            <?php endif; ?>

            <form class="" action="<?= base_url().'simpan_perubahan/'.$konsumen['id']; ?>" method="post">
              <input type="hidden" name="id" value="<?= $konsumen['id']; ?>">
              <input type="hidden" name="nik" value="<?= $konsumen['nik']; ?>">
              <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" value="<?= $konsumen['nama'];  ?>" required>
                   <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
              <div class="form-group">
                    <label for="norang">Nomor Rangka</label>
                    <input type="text" name="norang" class="form-control" id="norang" value="<?= $konsumen['norang'];  ?>" readonly>
                     <small class="form-text text-danger"><?= form_error('norang'); ?></small>
              </div>
              <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $konsumen['alamat'];  ?>"readonly>
                     <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
              </div>
              <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" name="merk" class="form-control" id="merk" value="<?= $konsumen['type'];  ?>"readonly>
                     <small class="form-text text-danger"><?= form_error('merk'); ?></small>
              </div>
              <div class="form-group">
                    <label for="telp">Telepon</label>
                    <input type="text" name="telp" class="form-control" id="telp" value="<?= $konsumen['telp'];  ?>"readonly>
                     <small class="form-text text-danger"><?= form_error('telp'); ?></small>
              </div>
              <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= $konsumen['email'];  ?>" readonly>
                     <small class="form-text text-danger"><?= form_error('email'); ?></small>
              </div>
              <div class="form-group">
                 <label for="status">Status STNK dan Plat</label>
                 <select class="form-control" id="status" name="status">
                   <?php foreach ($status as $s) : ?>
                     <?php if( $s == $konsumen['status']) : ?>
                     <option value="<?= $s; ?>" selected><?= $s;  ?></option>
                   <?php else : ?>
                      <option value="<?= $s; ?>"><?= $s;  ?></option>
                   <?php endif; ?>
                   <?php endforeach; ?>
                 </select>
               </div>
                  <a href="<?= base_url(); ?>konsumen" class="btn btn-secondary float-right ">Kembali</a>
               <button type="submit" name="ubah" class="btn btn-primary float-right mr-2">Ubah Data</button>
            </form>
          </div>
      </div>

    </div>

  </div>

</div>
