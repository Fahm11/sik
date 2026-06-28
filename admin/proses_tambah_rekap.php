<?php
include '../koneksi.php';
session_start();

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$ket = $_POST['ket'];
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4'];
$admin_id = $_SESSION['admin_id'];

$query = mysqli_query($con, "insert into rekap(admin_id,nisn,nama,jurusan,ket,s1,s2,s3,s4,status) values('$admin_id','$nisn','$nama','$jurusan','$ket','$s1','$s2','$s3','$s4','N')");
if (!$query) {
    header('location:tambah_rekap.php');
} else {
    header('location:rekap.php');
}
