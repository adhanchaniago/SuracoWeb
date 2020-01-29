<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My CSS -->
      <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/suraco.png">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <title><?= $judul;  ?></title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
    <a class="navbar-brand" href="#">Suraco</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="<?= base_url(); ?>">Konsumen</a>
      </div>
    </div>
        <form class="form-inline my-2 my-lg-0">
              <a class="btn btn-danger my-2 my-sm-0" onclick="return confirm('yakin?');" href="<?= base_url().'logout'; ?>">Logout</a>
       </form>
    </div>
  </nav>
