<?php

include "koneksi.php";

// membuat variabel untuk menampung data dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
 $tgl_lahir = $_POST['tgl_lahir'];
 $umur = $_POST['umur'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $alamat = $_POST['alamat'];
 $email = $_POST['email'];
 $no_hp = $_POST['no_hp'];
 $jenis_vaksin = $_POST['jenis_vaksin'];
 $pekerjaan = $_POST['pekerjaan'];
 $kategori = $_POST['kategori'];
 $kecamatan = $_POST['kecamatan'];
 $kelurahan = $_POST['kelurahan'];
 $rt = $_POST['rt'];
 $rw = $_POST['rw'];

 $query = "INSERT INTO data_vaksin (nik, nama, tgl_lahir, umur, jenis_kelamin, alamat, email, no_hp, jenis_vaksin, pekerjaan, kategori, kecamatan, kelurahan, rt, rw) VALUES ('$nik', '$nama', '$tgl_lahir', '$umur', '$jenis_kelamin', '$alamat', '$email', '$no_hp', '$jenis_vaksin', '$pekerjaan', '$kategori', '$kecamatan', '$kelurahan', '$rt', '$rw')";
           $result = mysqli_query($koneksi, $query);
           // periska query apakah ada error
           if(!$result){
               die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                    " - ".mysqli_error($koneksi));
           } else {
             //tampil alert dan akan redirect ke halaman index.php
             //silahkan ganti index.php sesuai halaman yang akan dituju
             echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
           }