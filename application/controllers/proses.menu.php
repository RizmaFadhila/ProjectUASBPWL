<?php
include_once "../model/class.menu.php";

$menu = new Menu();
$aksi = $_GET['aksi'];
if ($aksi == "simpan"){
    $menu->input($_POST['id_menu'],$_POST['nama_menu'],$_POST['harga'],$_POST['kategori']);
    header("location:../view/admin.php?view=menu");
}
else if($aksi == "hapus"){
    $menu->hapus($_GET['id_menu']);
    header("location:../view/admin.php?view=menu");
}
if ($aksi == "update"){
    $menu->update($_POST['id_menu'],$_POST['nama_menu'],$_POST['harga'],$_POST['kategori']);
    header("location:../view/admin.php?view=menu");
}