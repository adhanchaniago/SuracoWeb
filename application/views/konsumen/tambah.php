<div class="container">

  <div class="row mt-3 justify-content-center">
    <div class="col-md-6">

      <div class="card">
          <div class="card-header">
            Form Tambah Data Konsumen
          </div>
          <div class="card-body">
            <?php if ($pesan == 1): ?>
              <div class="alert alert-success" role="alert">
                  Data Berhasil Ditambahkan
                </div>
            <?php endif; ?>
            <form  action="<?= base_url().'cari' ?>" method="post">
            <div class="form-group">
                <label for="nik">Cari NIK</label>
                <input type="number" name="nik" class="form-control" id="nik" required>
                <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                <button type="submit"class="btn btn-mint" style="padding-left:5%;padding-right:5%;"name="button">Cari</button>
              </div>
             </form>
            <form class="" action="<?= base_url().'simpan' ?>" method="post">
              <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="number" name="nik" class="form-control" id="nama" value="<?= $user['nik'] ?>" required>
                   <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                </div>
              <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" id="nama" value="<?= $user['nama'] ?>" required>
                   <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
              <div class="form-group">
                    <label for="norang">Nomor Rangka</label>
                    <input type="text" name="norang" class="form-control" id="norang" required>
                     <small class="form-text text-danger"><?= form_error('norang'); ?></small>
              </div>
              <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $user['alamat'] ?>" required>
                     <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
              </div>
              <div class="form-group">
                 <label for="status">Status STNK dan Plat</label>
                 <select class="form-control" id="merk" name="merk">
                   <option value="Yamaha Freego">Yamaha Freego</option>
                   <option value="Yamaha Nmax">Yamaha Nmax</option>
                   <option value="Yamaha Lexi">Yamaha Lexi</option>
                 </select>
              </div>
              <div class="form-group">
                    <label for="telp">Telepon</label>
                    <input type="number" name="telp" class="form-control" id="telp " value="<?= $user['telp'] ?>" required>
                     <small class="form-text text-danger"><?= form_error('telp'); ?></small>
              </div>
              <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?= $user['email'] ?>" required>
                     <small class="form-text text-danger"><?= form_error('email'); ?></small>
              </div>
              <div class="form-group">
                 <label for="status">Status STNK dan Plat</label>
                 <select class="form-control" id="status" name="status">
                   <option value="STNK dan Plat Belum Ada">STNK dan Plat Belum Ada</option>
                   <option value="STNK Sudah Ada dan Plat Belum Ada">STNK Sudah Ada dan Plat Belum Ada</option>
                   <option value="STNK dan Plat Sudah Ada">STNK dan Plat Sudah Ada</option>
                 </select>
               </div>


               <a href="<?= base_url(); ?>konsumen" class="btn btn-secondary float-right ">Kembali</a>
                <button type="submit" class="btn btn-primary float-right mr-2">Tambah Data</button>


            </form>
          </div>
      </div>

    </div>

  </div>

</div>
