<?php
include '../koneksi.php';


$id = $_POST['id'];
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4'];

$query = mysqli_query($con, "update rekap set s1='$s1', s2='$s2', s3='$s3', s4='$s4' where rekap_id='$id'");
if (!$query) {
    header('location:tambah_rekap.php');
} else {
    header('location:rekap.php');
}
