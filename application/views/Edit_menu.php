<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body background="image/Di.jpg">
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
    <a class="navbar-brand" href="#">
      <font color="fffff">Navbar</font>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link " href=" <?php echo base_url('login/home'); ?>">Home</font></a>
        <a class="nav-item nav-link" href="<?php echo base_url('login/menu'); ?>">Menu</font></a>
        <a class="nav-item nav-link" href="<?php echo base_url('login/meja'); ?>">Meja</font></a>
        <a class="nav-item nav-link" href="<?php echo base_url('login/transaksi'); ?>">Transaksi</font></a>
      </div>
    </div>
    <div>
      <div class="nav navbar-nav navbar-right">
        <a class="nav-item nav-link bg-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
      </div>
  </nav>
  <div class="jumbotron jumbotron-fluid jumbotron-drak bg-dark">
    <div class="container">
      <div class="text-center">
        <!-- <img src="application/image/vi.jpg" width="10%" class="rounded-circle img-thumbnail"> -->
        <font color="fffff">
          <h1 class="display-4">STARBUCKS</h1>
          <h3 class="lead">WELCOME</h3>
          <h3 class="lead">TO THE STARBUCKS COFFE</h3>
        </font>
        </element>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-md-6">
      <?php
      foreach ($menu as $x) {
      ?>
        <form action="<?php echo base_url('login/update'); ?>" method="POST">
          <!-- <div class="form-group">
        <label>Id Menu</label>
        <input type="textbox" name="id_menu" class="form-control" value="">
      </div> -->

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Menu</label>
            <div class="col-sm-10">
              <input type="hidden" class="form-control" id="id_menu" name="id_menu" value="<?php echo $x->id_menu ?>">
              <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="<?php echo $x->nama_menu ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="harga" name="harga" value=" <?php echo $x->harga ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
              <select class="form-control" name="kategori" value="<?php echo $x->kategori ?>">
                <option value="makanan"> Makanan </option>
                <option value="minuman"> Minuman </option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        <?php } ?>
        </form>
    </div>