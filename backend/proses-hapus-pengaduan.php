<?php

include "koneksi.php";

$id = $_GET['id'];

$query = $koneksi->query("delete from pengaduan where id_pengaduan=$id");

if($query){
    header("location:../home.php");
}else{
    print_r($koneksi->errorInfo());
    die();
}