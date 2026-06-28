<?php
// date_default_timezone_set('Asia/Jakarta');
// $date = new DateTime('2024-05-06 16:00:00');
// $result = $date->format('Y-m-d H:i:s');
// echo date("Y-m-d H:i:s");
// if (date("Y-m-d H:i:s") <= $result) {
//   header("location:index.php");
// }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <title>SIK || Sistem Informasi Kelulusan SMK SAKA</title>
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/smk.png">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- <script src="js/bootswatch.js"></script> -->
</head>

<body style="background: url('bg.png') repeat;">
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-fixed-top">
    <div class="container-fluid navbar-fixed-top">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <img src="smk (1).png" width="60" style="margin-left: 40px;">

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
          </br>
          <div class="container mt-5" style="height: 100%; display: flex; justify-content: center; align-items: center;">
            <div style="top: 60%; transform:translate(0, -50%); position: absolute;">
              <div class="well bg-white" style="padding: 30px; border-radius: 5%; margin: 20px; margin-top: 100px;">
                <p align="center"><img src="smk (1).png" height="75" /></p>
                <h4 align="center" style="margin: 15px 0 -10px 0;"><b>SISTEM INFORMASI</br>STATUS KELULUSAN SISWA</b></h4>
                <hr>
                <!-- countdown -->
                <h4 align=" center">
                  <div id="clock" class="alert alert-dismissable alert-success" style="padding:10px">
                  </div>
                </h4>
                <div id="xpengumuman">
                  <div class="alert alert-dismissable alert-success">
                    <h4 align=" center">
                      <b>PENGUMUMAN STATUS KELULUSAN</br>TAHUN 2024 DIBUKA
                      </b>
                    </h4>
                  </div>
                  <hr>
                  <form class="form-horizontal" form name="formcarino" method="post" action="siswa/proses_login_siswa.php">
                    <fieldset id="xpengumuman">
                      <div class="form-group">
                        <input type="text" class="form-control" name="nisn" placeholder="KETIK/MASUKKAN NOMOR NISN" size="auto">
                      </div>

                      <div class="form-group" style="margin-bottom: -10px;">
                        <p align="center"><input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="PERIKSA DATA" class="btn btn-danger" style="margin-top: 15px;"></p>
                      </div>
                    </fieldset>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>