<html>

<head>
  <title>
    Aplikasi Kasir STARBUCKS
  </title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <script type="text/javascript" src="assets/js/bootstrap.js"> </script>
</head>

<body background="image/D.jpg">
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
        <img src="image/v.jpg" width="20%" class="rounded-circle img-thumbnail">
        <font color="fffff">
          <h1 class="display-4">STARBUCKS</h1>
          <h3 class="lead">WELCOME</h3>
          <h3 class="lead">TO THE STARBUCKS COFFE</h3>
        </font>
        </element>
      </div>
    </div>
  </div>

  <div>
    <?php
    if (isset($_GET['views'])) {
      $halaman = $_GET['views'];
      switch ($halaman) {
        case 'home':
          include "../views/home.php";
          break;
        case 'menu':
          include "../views/menu.php";
          break;
        case 'meja':
          include "../views/meja.php";
          break;
        case 'editmenu':
          include "../views/edit.menu.php";
          break;
        case 'editmeja':
          include "../views/edit.meja.php";
          break;
        default:
          echo "Maaf, Halaman tidak di temukan !";
          break;
      }
    }
    ?>

</body>

</html>