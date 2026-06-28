<?php
// menghubungkan dengan koneksi
include '../koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
// upload file xls
$target = basename($_FILES['filerekap']['name']);
move_uploaded_file($_FILES['filerekap']['tmp_name'], $target);

echo $target;

// beri permisi agar file xls dapat di baca
chmod($_FILES['filerekap']['name'], 0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filerekap']['name'], false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index = 0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i = 2; $i <= $jumlah_baris; $i++) {

    // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
    $nisn     = $data->val($i, 1);
    $password   = $data->val($i, 2);
    $nama  = $data->val($i, 3);
    $jurusan  = $data->val($i, 4);
    $ket  = $data->val($i, 5);
    $s1  = $data->val($i, 6);
    $s2  = $data->val($i, 7);
    $s3  = $data->val($i, 8);
    $s4  = $data->val($i, 9);
    $admin_id = $_SESSION['admin_id'];


    // if ($nisn != "" && $password != "" && $nama != "" && $jurusan != "" && $ket != "" && $s1 != "" && $s2 != "" && $s3 != "" && $s4 != "") {

    mysqli_query($con, "insert into rekap(admin_id,nisn,password,nama,jurusan,ket,s1,s2,s3,s4) values('$admin_id','$nisn','$password','$nama','$jurusan','$ket','$s1','$s2','$s3','$s4')");
    $berhasil++;
    // }
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filerekap']['name']);

// alihkan halaman ke index.php
// header("location:rekap.php?berhasil=$berhasil");
