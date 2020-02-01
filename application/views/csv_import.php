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
      <div id="imported_csv_data"></div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){

  load_data();

  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>importdata/load_data",
      method:"POST",
      success:function(data)
      {
        $('#imported_csv_data').html(data);
      }
    })
  }

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
        $('#import_csv_btn').html('Import Done');
        	load_data();
      }
    })
  });

});
</script>
