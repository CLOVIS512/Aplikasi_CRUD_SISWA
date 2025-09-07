<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "sekolah";

// urutannya yang diisi = server,username,password,nama database
$conn = mysqli_connect($server, $username, $password, $database);

//  cek koneksi database
//     if(!$conn){
//         echo "Koneksi gagal";
//     }else {
//         echo "Koneksi berhasil";
//     }
?>