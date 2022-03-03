<?php

$nik            = $_POST['nik'];
$nama_lengkap   = $_POST['nama_lengkap'];
$type           = 'user';
$gender         = $_POST['gender'];


// cek apakah nik sudah terdaftar
$data = file('config.txt', FILE_IGNORE_NEW_LINES);
foreach ($data as $value) {
  $pecah = explode('|', $value);
  if ($nik == $pecah['0']) {
    $cek = true;
  }
}

if (@$cek) { // jika nik sudah terdaftar 
  echo "<script>alert('Maaf NIK yang anda gunakan sudah terdaftar'); window.location.assign('register.php')</script> ";
} else { // jika nik tidak ditemukan
  // buat format penyimpanan ke config.txt
  $format = "\n$nik|$nama_lengkap|$type|$gender";

  // buka file config.txt 
  $file = fopen('config.txt', 'a');
  fwrite($file, $format);

  //tutup file 
  fclose($file);

  echo "<script>alert('Pendaftaran berhasil dilakukan'); window.location.assign('index.php')</script>";
}