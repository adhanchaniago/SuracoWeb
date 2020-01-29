<html>
<head>
	<title>Kirim Email dengan CodeIgniter</title>
</head>
<body>
	<div class="row mt-5 justify-content-center">
	<div style="padding: 5px 30px;" >
		<h1>Form Kirim Email</h1>
		<hr />
		<?php if ($pesan == 1){ ?>
			<div class="alert alert-danger" role="alert">
					Maaf, Pesan Gagal Dikirim !
				</div>
		<?php }elseif($pesan== 2) { ?>
			<div class="alert alert-success" role="alert">
					Selamat, Pesan Berhasil Dikirim
				</div>
		<?php } ?>
		<?php echo form_open('email/send/'.$konsumen['id'], ['method'=>'post', 'enctype'=>'multipart/form-data']) ?>
		<div style="margin-bottom: 10px;">
			<label>Kepada</label><br />
			<input type="email" name="email_penerima" placeholder="Email Penerima"value="<?= $konsumen['email'] ?>" style="margin-top: 5px;width: 400px" />
		</div>
		<div style="margin-bottom: 10px;">
			<label>Subjek</label><br />
			<input type="text" name="subjek" placeholder="Subjek" value="Informasi STNK dan Plat" style="margin-top: 5px;width: 400px" />
		</div>
		<div style="margin-bottom: 10px;">
			<label>Pesan</label><br />
			<input name="pesan" placeholder="Pesan" rows="8" value="Selamat, STNK dan Plat anda telah terbit" style="margin-top: 5px;width: 400px"></input	>
		</div>
		<hr />
	  <a href="<?= base_url(); ?>konsumen" class="btn btn-secondary float-right">Kembali</a>
		<button type="submit" class="btn btn-primary float-right mr-2">KIRIM EMAIL</button>
		<?php echo form_close() ?>
	</div>
	</div>
</body>
</html>
