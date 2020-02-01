<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/suraco.png">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

</head>
<body>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Konsumen</th>
        <th>No.Rangka</th>
        <th>Merk</th>
        <th>Email</th>
        <th>Tanggal</th>
        <th>Tanda terima STNK</th>
        <th>Tanda terima Plat</th>
      </tr>
    </thead>

    <tbody>
      <?php if ($key == '1'){
        $no=1; foreach ( $konsumen as $ksm ) : ?>
        <tr>
          <th><?= $no++; ?></th>
          <td><?= $ksm['nama']; ?></td>
          <td><?= $ksm['norang']; ?></td>
          <td><?= $ksm['type']; ?></td>
          <td><?= $ksm['email']; ?></td>
          <td><?=date('d F Y', strtotime($ksm['tanggal'])); ?></td>
          <td></td>
          <td></td>
        </tr>
      <?php endforeach;
    }else {
      $no=1; foreach ( $cetak as $ksm ) : ?>
      <tr>
        <th><?= $no++; ?></th>
        <td><?= $ksm['nama']; ?></td>
        <td><?= $ksm['norang']; ?></td>
        <td><?= $ksm['type']; ?></td>
        <td><?= $ksm['email']; ?></td>
        <td><?=date('d F Y', strtotime($ksm['tanggal'])); ?></td>
        <td></td>
        <td></td>
      </tr>
    <?php endforeach;
  } ?>
</tbody>

</table>

<script type="text/javascript">
window.print();
</script>

</body>
</html>
