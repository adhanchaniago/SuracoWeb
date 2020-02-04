<div class="container box mt-3">
  <h3 align="center">Import Data CSV</h3>
  <br />
  <div class="card">
    <div class="card-body">
      <form method="post" id="import_csv" enctype="multipart/form-data">
        <div class="form-group">
          <label for="csv_file">Select CSV File</label><br>
          <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
        </div>
        <br />
        <button type="submit" name="import_csv" class="btn btn-info" id="import_csv_btn">Import CSV</button>
      </form>
    </div>
  </div>
  <br/>
  <div class="card">
    <div class="card-body">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nik</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">Telp</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($info as $c): ?>
          <tr>
            <th scope="row"><?= $c['id'] ?></th>
            <td><?= $c['nik'] ?></td>
            <td><?= $c['nama'] ?></td>
            <td><?= $c['alamat'] ?></td>
            <td><?= $c['kota'] ?></td>
            <td><?= $c['telp'] ?></td>
            <td><?= $c['email'] ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<script>
$(document).ready(function(){
  $('#import_csv').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url(); ?>importdata/import",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      beforeSend:function(){
        $('#import_csv_btn').html('Importing...');
      },
      success:function(data)
      {
        $('#import_csv')[0].reset();
        $('#import_csv_btn').attr('disabled', false);
        $('#import_csv_btn').html('Import Selesai');
      }
    })
  });
});
</script>
