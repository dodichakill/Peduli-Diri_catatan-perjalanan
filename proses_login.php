<?php

$nik            = $_POST['nik'];
$nama_lengkap   = $_POST['nama_lengkap'];

$format = "$nik|$nama_lengkap";
$file = file('config.txt', FILE_IGNORE_NEW_LINES);

// cek data dalam file config.txt
if (in_array($format, $file)) {
  session_start();
  $_SESSION['nik'] = $nik;
  $_SESSION['nama_lengkap'] = $nama_lengkap;

  header("Location:user.php");
} else {
  echo "<script>alert('Maaf Kombinasi NIK dan Nama lengkap Salah!'); window.location.assign('index.php');</script>";
}