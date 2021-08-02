<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="../image/D.jpg">
<nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link " href=" <?php echo base_url('login/home'); ?>">
                    <font color="fffff">Home</font>
                </a>
                <a class="nav-item nav-link" href="<?php echo base_url('login/menu'); ?>">
                    <font color="fffff">Menu</font>
                </a>
                <a class="nav-item nav-link" href="<?php echo base_url('login/meja'); ?>">
                    <font color="fffff">Meja</font>
                </a>
                <a class="nav-item nav-link" href="<?php echo base_url('login/transaksi'); ?>">
                    <font color="fffff">Transaksi</font>
                </a>

            </div>
</div>
  <div>
  <div class = "nav navbar-nav navbar-right">
    <a class="nav-item nav-link bg-primary" href="<?php echo base_url('login/logout'); ?>"><font color="fffff">Logout</a></font>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid jumbotron-drak bg-dark">
         <div class="container">
             <div class="text-center">
                 <img src="../image/v.jpg" width="20%" class="rounded-circle img-thumbnail">
                 <font color="fffff">
                 <h1 class="display-4">STARBUCKS</h1>
                 <h3 class="lead">WELCOME</h3>
                 <h3 class="lead">TO THE STARBUCKS COFFE</h3></font>
                </element> 
             </div>
         </div>
     </div>

<section class="Portfolio" id="Portfolio">
         <div class="container">
             <div class="row pt-5 mb-4">
                 <div class="col text-center">
                    <font color="fffff">   <h2>SOCIAL MEDIA</h2></font>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md mb-4">
                     <div class="card">
                    <img src="../image/c5.jpg" width="20%" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">+6282386745603</p>
                        </div>
                    </div>
                 </div>
                 <div class="col-md mb-4">
                    <div class="card">
                   <img src="../image/c6.jpg" width="20%" class="card-img-top">
                       <div class="card-body">
                           <p class="card-text">@anzalasakinah.yr</p>
                       </div>
                   </div>
             </div>
            <div class="col-md mb-4">
               <div class="card">
              <img src="../image/c7.jpg" width="20%" class="card-img-top">
                  <div class="card-body">
                      <p class="card-text">anzala20ti@mahasiswa.pcr.id</p>
                  </div>
              </div>
        </div>
     </section>
</body>
</html>