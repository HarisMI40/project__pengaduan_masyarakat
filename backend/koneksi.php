<?php
    $koneksi = new PDO("mysql:host=localhost;dbname=ppm", "root", "");

    if(!$koneksi){
        print_r($koneksi->errorInfo());
    }