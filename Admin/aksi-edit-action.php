<?php
// koneksi database
include 'config.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$title = $_POST['title'];
$deskripsi = $_POST['deskripsi'];
$image = $_POST['image'];
$date = $_POST['date'];
$link = $_POST['link'];

// update data ke database
mysqli_query($conn, "UPDATE tb_aksi SET title='$title', deskripsi='$deskripsi', image='$image', date='$date', link='$link' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:aksi.php");
