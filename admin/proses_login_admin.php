<?php
include '../koneksi.php';
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = mysqli_query($con, "select * from admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek == 1) {
    while ($data = mysqli_fetch_array($sql)) {
        $_SESSION['admin_id'] = $data['admin_id'];
    }
    header('location:rekap.php');
} else {
    header('location:index.php');
}
