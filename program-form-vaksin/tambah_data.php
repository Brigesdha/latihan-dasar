<?php
include('koneksi.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Membuat form pendaftaran vaksin</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand text-warning pl-3" href="index.php">Formulir Pendaftaran Vaksinasi</a>
    </nav>
    <!-- akhir navbar -->

    <!-- form -->
    <div class="container">
      <span class="d-block p-2 bg-primary text-white pl-3 rounded">Data Pendaftar</span>
      <form method="POST" action="proses_tambah.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNik">NIK :</label>
            <input type="text" class="form-control" id="inputNik" name="nik" placeholder="Masukan NIK" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputPekerjaan">Pekerjaan :</label>
            <select class="form-control" id="inputPekerjaan" name="pekerjaan">
              <option value="">-- Pilih Pekerjaan --</option>
              <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
              <option value="Wiraswasta">Wiraswasta</option>
              <option value="BUMN">BUMN</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNamaLengkap">Nama Lengkap :</label>
            <input type="text" class="form-control" id="inputNamaLengkap" name="nama" placeholder="Masukan Nama" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputKategori">Kategori :</label>
            <select class="form-control" id="inputKategori" name="kategori">
              <option value="">-- Pilih Kategori --</option>
              <option value="Karyawan">Karyawan</option>
              <option value="Pedagang">Pedagang</option>
              <option value="Masyarakat Umum">Masyarakat Umum</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputTanggalLahir">Tanggal Lahir :</label>
            <input type="text" class="form-control" id="inputTanggalLahir" name="tgl_lahir" placeholder="2000-3-11" required="" />
          </div>

          <div class="form-group col-md-3">
            <label for="inputUmur">Umur :</label>
            <input type="text" class="form-control" id="inputUmur" name="umur" placeholder="16" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputNomorHP">Nomor Handphone(Whatsapp) :</label>
            <input type="tel" class="form-control" id="inputNomorHP" name="no_hp" placeholder="+62" required="" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputJenisKelamin">Jenis Kelamin :</label>
            <input type="text" class="form-control" id="inputJenisKelamin" name="jenis_kelamin" placeholder="Laki-laki" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputJenisVaksin">Jenis Vaksin :</label>
            <select class="form-control" id="inputJenisVaksin" name="jenis_vaksin">
              <option value="">-- Pilih Jenis Vaksin --</option>
              <option value="Pfizer">Pfizer</option>
              <option value="Sinovac">Sinovac</option>
              <option value="Moderna">Moderna</option>
              <option value="AstraZaneca">AstraZaneca</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputAlamat">Alamat Domisili :</label>
            <input type="text" class="form-control" id="inputAlamat" name="alamat" placeholder="Masukan Alamat" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputEmail">Email :</label>
            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Masukan Email" required="" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputKecamatan">Kecamatan :</label>
            <select class="form-control" id="inputKecamatan" name="kecamatan">
              <option value="">-- Pilih Lokasi Kecamatan --</option>
              <option value="Tangerang">Tangerang</option>
              <option value="Neglasari">Neglasari</option>
              <option value="Benda">Benda</option>
              <option value="Cibodas">Cibodas</option>
              <option value="Karawaci">Karawaci</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="inputKelurahan">Kelurahan :</label>
            <select class="form-control" id="inputKelurahan" name="kelurahan">
              <option value="">-- Pilih Lokasi Kecamatan --</option>
              <option value="Cikokol">Cikokol</option>
              <option value="Mekarsari">Mekarsari</option>
              <option value="Jurumudi">Jurumudi</option>
              <option value="Jatiuwung">Jatiuwung</option>
              <option value="Cimone">Cimone</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="RT">RT :</label>
            <select class="form-control" id="RT" name="rt">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <label for="RW">RW :</label>
            <select class="form-control" id="RW" name="rw">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>
        </div>

      <!-- button -->
        <div class="d-flex justify-content-between">
          <a href="index.php" class="btn btn-warning">Kembali</a>
          <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
        </div>
      <!-- akhir button -->

    </form>
    <!-- akhir form -->


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
