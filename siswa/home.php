<?php
include '../koneksi.php';


session_start();
$rekap_id = $_SESSION['rekap_id'];

mysqli_query($con, "update rekap set status='Y'where rekap_id='$rekap_id'");

if (!$rekap_id) {
  header('location:../login.php');
}


$query = mysqli_query($con, "select * from rekap where rekap_id='$rekap_id'");
while ($data = mysqli_fetch_array($query)) {
  $nama = $data['nama'];
  $nisn = $data['nisn'];
  $jurusan = $data['jurusan'];
  $ket = $data['ket'];
  $s1 = $data['s1'];
  $s2 = $data['s2'];
  $s3 = $data['s3'];
  $s4 = $data['s4'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <title>SIK || Sistem Informasi Kelulusan SMK SAKA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- <script src="js/bootswatch.js"></script> -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/smk.png">


</head>

<body style="background: url('../bg.png') repeat;">
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-fixed-top">
    <div class="container-fluid navbar-fixed-top">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <img src="../smk (1).png" width="60" style="margin-left: 40px;">

      <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-fixed-top">
          <li class="nav-item">
            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 1.5rem; font-weight:bold; color:black;">SMK SALAFIYAH</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="height: 100%; display: flex; justify-content: center; align-items: center;">
    <table>
      <tr>
        <td style="padding: 10px;">
          <div class='well' style='margin-bottom: 50px; background-color:white; margin-top:30px; border-radius:3%; padding:30px;'>
            <p align='center'><img src='../smk (1).png' height='75' /></p>
            <h4 align='center' style='margin: 15px 0 -10px 0;'><b>SISTEM INFORMASI</br>STATUS KELULUSAN SISWA</b></h4>
            <hr>
            <div align='center' class='alert alert-dismissable alert-danger'>
              <h4><b>DETAIL STATUS KELULUSAN</b></h4>
            </div>
            <table min-width='100' class='table table-striped table-bordered'>
              <tr class='success'>
                <td colspan='4' align='center'>
                  <font color='#000000' size='4' style='font-weight: bold;' ;><b>IDENTITAS PESERTA DIDIK</b>
                </td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td colspan='3'>
                  <font style='text-transform: capitalize;'><strong><?= $nama ?></strong></font>
                </td>
              </tr>

              <tr class='secondary'>
                <td width='250'>NISN </td>
                <td width='480'><strong><?= $nisn ?></strong></td>
              </tr>

              <tr>
                <td>Kelas</td>
                <td colspan='3'><strong>XII <?= $jurusan ?></strong></td>
              </tr>


              <tr>
                <td>Asal Sekolah</td>
                <td colspan='3'>
                  <font style='text-transform: capitalize;'><strong>SMK SALAFIYAH</strong></font>
                </td>
              </tr>

              <tr class='success'>
                <td colspan='4' align='center'>
                  <font color='#000000' size='4' style='font-weight: bold;' ;>STATUS KELULUSAN DINYATAKAN
                </td>
              </tr>
              <tr class='warning'>
                <td colspan='4' align='center'>
                  <font color='#0066FF' size='6' style='text-transform: uppercase;'><b><?= $ket ?></b>
                </td>
              </tr>
              <tr class='success'>
                <td colspan='4' align='center'><b>Apapun hasil yang didapat, semoga ini adalah yang terbaik, tetap semangat dan optimis.</b></td>
              </tr>

              <tr class='secondary'>
                <td colspan='4'></td>
              </tr>
              <tr>
                <td colspan='4' align='center' class="bg-danger text-white">
                  <b>Catatan:</b> Guna mengambil SKL, mohon menunjukkan surat keputusan kelulusan.
                </td>
              </tr>
            </table>
            <div class='form-group' style='margin-bottom: -10px;'>
              <p align='center'>
                <?php
                if ($s1 == 'N' || $s2 == 'N' || $s3 == 'N' || $s4 == 'N') {
                ?>
                  <a href='#' class='btn btn-primary disabled' target='_blank' rel='noopener noreferrer'>
                    DONWLOAD SURAT KEPUTUSAN
                  </a>
                <?php
                } else {
                ?>
                  <a href="../suratsmk/YAYASAN SALAFIYAH KAJEN-<?= $rekap_id ?>.pdf" class='btn btn-primary' target='_blank' rel='noopener noreferrer'>
                    DONWLOAD SURAT KEPUTUSAN
                  </a>
                <?php
                }
                ?>

              </p>
            </div>

            <!-- Surat Keputusan -->
            <div align='center' class='alert alert-dismissable alert-warning' style=" margin-top: 50px;">
              <h4><b>SYARAT UNDUH SURAT KEPUTUSAN</b></h4>
            </div>

            <table min-width='100' class='table table-striped table-bordered'>
              <tr class='success'>
                <td colspan='4' align='center'>
                  <font color='#000000' size='4' style='font-weight: bold;' ;><b>SYARAT TERPENUHI ATAU TIDAK</b>
                </td>
              </tr>
              <tr>
                <td>Administrasi</td>
                <td colspan='3'>
                  <?php
                  if ($s1 == 'Y') {
                  ?>
                    <font style='text-transform: capitalize;'><strong>Terpenuhi</strong></font>
                  <?php
                  } else {
                  ?>
                    <font style='text-transform: capitalize;'><strong>Belum Terpenuhi</strong></font>
                  <?php
                  }
                  ?>
                </td>
              </tr>

              <tr class='secondary'>
                <td width='250'>BEBAS PERPUS</td>
                <?php
                if ($s2 == 'Y') {
                ?>
                  <td width='480'><strong>Terpenuhi</strong></td>
                <?php
                } else {
                ?>
                  <td width='480'><strong>Belum Terpenuhi</strong></td>
                <?php
                }
                ?>

              </tr>

              <tr>
                <td>IJAZAH JENJANG SEBELUMNYA</td>
                <?php
                if ($s3 == 'Y') {
                ?>
                  <td colspan='3'><strong>Terpenuhi</strong></td>
                <?php
                } else {
                ?>
                  <td colspan='3'><strong>Belum Terpenuhi</strong></td>
                <?php
                }
                ?>
              </tr>
            </table>
        </td>
      </tr>
    </table>
  </div>
  <footer>
    <div class="bg-white" style="padding: 20px;">
      <h5 align="center" style="color:black; font-size:1rem;">SMK SALAFIYAH</br>SISTEM INFORMASI KELULUSAN &copy 2024</h5>
    </div>
  </footer>
</body>

</html>