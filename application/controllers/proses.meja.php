<?php
include_once "../model/class.meja.php";

$meja = new Meja();
$aksi = $_GET['aksi'];
if ($aksi == "simpan"){
    $meja->input($_POST['id_meja'],$_POST['nama_meja']);
    header("location:../view/admin.php?view=meja");
}
else if($aksi == "hapus"){
    $meja->hapus($_GET['id_meja']);
    header("location:../view/admin.php?view=meja");

}else if ($aksi == "update"){
    $meja->update($_POST['id_meja'],$_POST['nama_meja']);
    header("location:../view/admin.php?view=meja");
}