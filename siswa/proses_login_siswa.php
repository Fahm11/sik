<?php
include '../koneksi.php';
session_start();

$nisn = $_POST['nisn'];

$sql = mysqli_query($con, "select * from rekap where nisn='$nisn'");

$cek = mysqli_num_rows($sql);

if ($cek == 1) {
    while ($data = mysqli_fetch_array($sql)) {
        $_SESSION['rekap_id'] = $data['rekap_id'];
    }


    header('location:home.php');
} else {
    header('location:../login.php');
}
