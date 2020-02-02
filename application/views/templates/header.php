<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $judul;  ?></title>
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/suraco.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Roboto Slab Font [ OPTIONAL ] -->
  <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
  <!--Jasmine Stylesheet [ REQUIRED ]-->
  <link href="<?= base_url().'assets/css/style.css' ?>" rel="stylesheet">
  <link href="<?= base_url().'assets/css/custom_style.css' ?>" rel="stylesheet">
  <!--Font Awesome [ OPTIONAL ]-->
  <link href="<?= base_url().'assets/plugins/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
</head>
<body>
  <!--NAVBAR-->
  <header id="navbar">
    <div id="navbar-container" class="boxed">
      <!--Brand logo & name-->
      <div class="navbar-header">
        <!-- <a href="index.html" class="navbar-brand"> -->
        <div class="navbar-brand">
          <i class="fa fa-cube brand-icon"></i>
          <div class="brand-title">
            <span class="brand-text">Suraco</span>
          </div>

        </div>
        <!-- </a> -->
      </div>
      <!--End brand logo & name-->
      <div class="navbar-content clearfix">
        <ul class="navbar-top-links pull-left">
          <div class="row mt-3">
            <?php if (isset($this->session->uid)) {?>
            <a class="nav-item nav-link active" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?= base_url();?>konsumen/tambah">Tambah Data Konsumen</a>
            <a class="nav-item nav-link" href="" data-toggle="modal" data-target="#exampleModal">Cetak Berkas</a>
            <a class="nav-item nav-link" href="<?= base_url().'import'?>" >Import Data</a>
          <?php } ?>
          </div>
        </ul>
        <!--Navbar Dropdown-->
        <ul class="nav navbar-top-links pull-right">
          <div class="container mt-3">
            <?php if (isset($this->session->uid)) {?>
            <a class="btn btn-danger my-2 my-sm-0" onclick="return confirm('yakin?');" href="<?= base_url().'logout'; ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          <?php }else{ ?>
            <a class="btn btn-danger my-2 my-sm-0" onclick="return confirm('yakin?');" href="<?= base_url().'login'; ?>"><i class="fa fa-sign-out fa-fw"></i> Login</a>
          <?php } ?>
          </div>
        </ul>
      </div>
    </div>
  </header>
