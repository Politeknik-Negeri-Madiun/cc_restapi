<?php
$hostname = "localhost";
$database = "cc_dbrestapi";
$username = "root";
$password = "asdqwe123";
$connect = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi   
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}