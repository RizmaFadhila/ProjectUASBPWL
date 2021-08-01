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
        <a class="navbar-brand" href="#">
        </a>
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
            <div class="nav navbar-nav navbar-right">
                <a class="nav-item nav-link bg-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
            </div>
    </nav>
    <div class="jumbotron jumbotron-fluid jumbotron-drak bg-dark">
        <div class="container">
            <div class="text-center">
                <img src="../image/v.jpg" width="20%" class="rounded-circle img-thumbnail">
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
            <form action="<?php echo base_url('login/insertTransaksi'); ?>" method="POST">

                <div class="form-group">
                    <label>
                        <font color="ffffff">Nama Customer
                    </label>
                    <input type="textbox" name="nama_customer" class="form-control" placeholder="Nama Customer">
                </div>

                <div class="form-group">
                    <label>
                        <font color="ffffff"> Pesanan
                    </label>
                    <input type="textbox" name="nama_pesanan" class="form-control" placeholder="Nama Pesanan">
                </div>

                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" name="tanggal" class="form-control" placeholder="Tanggal"></td>
                </tr>

                <div class="form-group">
                    <label>
                        <font color="ffffff">Jumlah
                    </label>
                    <input type="textbox" name="jumlah" class="form-control" placeholder="Jumlah">
                </div>

                <div class="form-group">
                    <label>Total Harga</label>
                    <input type="textbox" name="total_harga" class="form-control" placeholder="Total Harga">

                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Total Harga</th>
                        <th> Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $this->m_login->getdata('transaksi');
                    $no = 1;
                    foreach ($query->result() as $data) {
                    ?>
                        <tr>
                            <td>
                                <font color="ffffff"><?php echo $no++; ?>
                            </td>
                            <td>
                                <font color="ffffff"><?php echo $data->nama_customer; ?>
                            </td>
                            <td>
                                <font color="ffffff"><?php echo $data->nama_pesanan; ?>
                            </td>
                            <td>
                                <font color="ffffff"><?php echo $data->tanggal; ?>
                            </td>
                            <td>
                                <font color="ffffff"><?php echo $data->jumlah; ?>
                            </td>
                            <td>
                                <font color="ffffff"><?php echo $data->total_harga; ?>
                            </td>
                            <td>
                                <!-- <a href="<?php echo base_url('login/editTransaksi/' . $data->id_pesanan) ?>">Edit</a> -->
                                <a href="<?php echo base_url('login/hapusTransaksi/' . $data->id_pesanan) ?>">Hapus</a>
                        </tr>
                        </form>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>