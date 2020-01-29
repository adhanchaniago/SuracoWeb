<div class="container">

	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Form Detail Pengambilan STNK Dan Plat
				</div>
				<div class="card-body">
					<!-- <?php if ($pesan == 1): ?>
						<div class="alert alert-success" role="alert">
							Data Berhasil Ditambahkan
						</div>
					<?php endif; ?> -->
					<form class="" action="<?= base_url().'simpan' ?>" method="post">
						<input type="hidden" name="norang" value="<?= $ambil['norang'] ?>">
						<div class="row">
							<div class="col-md-6">
								<label for="nik">STNK</label>
								<select class="form-control" id="merk" name="stnk">
									<option value="sudah ambil">Sudah Diambil</option>
									<option value="belum ambil">Belum Diambil</option>
								</select>
								<small class="form-text text-danger"><?= form_error('nik'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="nama">Plat</label>
								<select class="form-control" id="merk" name="plat">
									<option value="sudah ambil">Sudah Diambil</option>
									<option value="belum ambil">Belum Diambil</option>
								</select>
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="norang">Nama Pengambil</label>
								<input type="text" name="norang" class="form-control" id="norang" required >
								<small class="form-text text-danger"><?= form_error('norang'); ?></small>

							</div>
							<div class="col-md-6">
								<label for="alamat">Nama Pengambil</label>
								<input type="text" name="alamat" class="form-control" id="alamat" value="" required >
								<small class="form-text text-danger"><?= form_error('alamat'); ?></small>

							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="telp">Tanggal Pengambilan</label>
								<input type="date" name="telp" class="form-control" id="telp " value="" required >
								<small class="form-text text-danger"><?= form_error('telp'); ?></small>

							</div>
							<div class="col-md-6">
								<label for="email">Tanggal Pengambilan</label>
								<input type="date" name="email" class="form-control" id="email" value="" required >
								<small class="form-text text-danger"><?= form_error('email'); ?></small>

							</div>
						</div>
						<div class="form-group mt-3">
								<a href="<?= base_url(); ?>konsumen" class="btn btn-danger float-right ">Kembali</a>
								<button type="submit" class="btn btn-primary float-right mr-2">Simpan Data</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
