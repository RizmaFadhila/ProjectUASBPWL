<?php
session_start();
include_once "../function/class.pesanan.php";

$pesanan = new Pesanan();

$aksi = $_GET['aksi'];
if ($aksi == "simpan") {
    $pesanan->input(
        $_POST['id_pesanan'],
        $_POST['id_pesanan'],
        $_POST['id_pelanggan'],
        $_POST['menu'],
        $_POST['jumlah'],
        $_POST['sub_total'],
        $_POST['tanggal'],
        $id_user = $_SESSION['id_user'],
        $_POST['id_user'],
        $_POST['id_meja']
    );
    header("location:../admin.php?halaman=pesanan");
}
