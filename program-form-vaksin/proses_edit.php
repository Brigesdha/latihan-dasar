<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

 // membuat variabel untuk menampung data dari form
 $id = $_POST['id'];
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

 // jalankan query UPDATE berdasarkan ID yang produknya kita edit
 $query = "UPDATE data_vaksin SET nik='$nik', nama='$nama', tgl_lahir='$tgl_lahir', umur='$umur', jenis_kelamin='$jenis_kelamin', alamat='$alamat', email='$email', no_hp='$no_hp', jenis_vaksin='$jenis_vaksin', pekerjaan='$pekerjaan', kategori='$kategori', kecamatan='$kecamatan', kelurahan='$kelurahan', rt='$rt', rw='$rw'";
 $query .= "WHERE id = '$id'";
 $result = mysqli_query($koneksi, $query);
 // periska query apakah ada error
 if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                     " - ".mysqli_error($koneksi));
 } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }