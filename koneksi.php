<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "toko_skielr";

$koneksi = mysqli_connect($server, $user, $password, $database) or die (mysqli_eror($koneksi));
 