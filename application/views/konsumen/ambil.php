<div class="container">

	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Form Detail Pengambilan STNK Dan Plat
				</div>
				<div class="card-body">
					<form class="" action="<?= base_url().'simpan_pengambilan' ?>" method="post">
						<input type="hidden" name="norang" value="<?= $norang; ?>">
						<div class="row">
							<div class="col-md-6">
								<label for="nik">STNK</label>
								<?php if (isset($ambil['status1'])){ ?>
									<input type="text" name="stnk" class="form-control" id="norang" value="<?= $ambil['status1'] ?>" readonly>
								<?php }else {?>
									<select class="form-control" id="merk" name="stnk">
										<option value="belum ambil">Belum Diambil</option>
										<option value="sudah ambil">Sudah Diambil</option>
									</select>
								<?php } ?>
								<small class="form-text text-danger"><?= form_error('nik'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="nama">Plat</label>
								<?php if (isset($ambil['status2'])){ ?>
									<input type="text" name="plat" class="form-control" id="norang" value="<?= $ambil['status2'] ?>" readonly>
								<?php }else {?>
									<select class="form-control" id="merk" name="plat">
										<option value="belum ambil">Belum Diambil</option>
										<option value="sudah ambil">Sudah Diambil</option>
									</select>
								<?php } ?>
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="norang">Nama Pengambil</label>
								<?php if (isset($ambil['status1'])){?>
									<input type="text" name="pengambil_stnk" class="form-control" id="norang" value="<?= $ambil['nama1'] ?>" readonly>
								<?php }else{ ?>
									<input type="text" name="pengambil_stnk" class="form-control" id="norang">
								<?php } ?>
								<small class="form-text text-danger"><?= form_error('norang'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="alamat">Nama Pengambil</label>
								<?php if (isset($ambil['status2'])){ ?>
									<input type="text" name="pengambil_plat" class="form-control" id="alamat" value="<?= $ambil['nama2'] ?>" readonly>
								<?php }else{?>
									<input type="text" name="pengambil_plat" class="form-control" id="alamat">
								<?php } ?>
								<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="telp">Tanggal Pengambilan <?=  date('Y-m-d') ?></label>
								<?php if (isset($ambil['status1'])){ ?>
									<input type="date" name="tgl_stnk" class="form-control" id="telp " value="<?= $ambil['tgl1'] ?>" readonly >
								<?php }else{ ?>
									<input type="date" name="tgl_stnk" class="form-control" min="2010-12-31" id="telp ">
								<?php } ?>
								<small class="form-text text-danger"><?= form_error('telp'); ?></small>
							</div>
							<div class="col-md-6">
								<label for="email">Tanggal Pengambilan</label>
								<?php if (isset($ambil['status2'])){ ?>
									<input type="date" name="tgl_plat" class="form-control" id="email" value="<?= $ambil['tgl2'] ?>" readonly>
								<?php }else{ ?>
									<input type="date" name="tgl_plat" class="form-control" id="email">
								<?php } ?>
								<small class="form-text text-danger"><?= form_error('email'); ?></small>
							</div>
						</div>
						<div class="form-group mt-3">
								<?php if (!isset($ambil['status2']) || !isset($ambil['status1'])){ ?>
							<a href="<?= base_url(); ?>konsumen" class="btn btn-danger float-right ">Kembali</a>
							<button type="submit" class="btn btn-primary float-right mr-2">Simpan Data</button>
						<?php } ?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
