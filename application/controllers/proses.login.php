<?php
session_start();
include_once "../model/class.user.php";
$user = new user();

$aksi = $_GET['aksi'];
if($aksi == "login"){
    $login = $user->cek_login($_POST['username'],$_POST['password']);
    if($login){
        return true;
    }
    else{
        echo "Username dan Password salah";
    }
}