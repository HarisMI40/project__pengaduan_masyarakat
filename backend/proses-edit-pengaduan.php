<?php
if(!isset($_GET['id'])){
    die("Halaman Error");
}


include "cek_login.php";
include "koneksi.php";



$isi = $_POST['isi_laporan'];
$id = $_GET['id'];

$query = $koneksi->query("update pengaduan set isi_laporan='$isi' where id_pengaduan=$id");

if($query){
    header("location:../home.php");
}else{
    print_r($koneksi->errorInfo());
    die();
}