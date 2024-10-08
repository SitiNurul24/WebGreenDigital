<?php
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$title = $_POST['title'];
$deskripsi = $_POST['deskripsi'];
$image = $_POST['image'];
$date = $_POST['date'];
$link = $_POST['link'];

// menginput data ke database
mysqli_query($conn, "INSERT into tb_aksi values('','$title','$deskripsi','$image','$date','$link')");

// mengalihkan halaman kembali ke index.php
header("location:aksi.php");
