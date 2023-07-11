<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "absen";

$mysqli  = mysqli_connect($host,$user,$pass,$db);
if (!$mysqli){
    die("proses koneksi gagal:".mysqli_connect_error());
}
?>