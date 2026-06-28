<?php
include '../koneksi.php';
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);
$lembaga = $_POST['lembaga'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$logo = $_FILES['logo']['name'];

$query = mysqli_query($con, "insert into admin(username,password,lembaga,logo,alamat,telp) values('$username','$password','$lembaga','$logo','$alamat','$telp')");
if (!$query) {
    header('location:tambah_admin.php');
} else {
    if (move_uploaded_file($_FILES['logo']['tmp_name'], $logo)) {
        echo 'foto terupload';
    } else {
        echo 'foto belum terupload';
    }
    header('location:admin.php');
}
