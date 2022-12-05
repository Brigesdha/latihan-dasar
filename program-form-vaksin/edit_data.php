<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM data_vaksin WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
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
      <span class="d-block p-2 bg-primary text-white pl-3 rounded">Data Pendaftar : <span class="font-weight-bold"> <?php echo $data['nama']; ?> </span> </span>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNik">NIK :</label>
            <input type="text" class="form-control" id="inputNik" name="nik" value="<?php echo $data['nik']; ?>" autofocus="" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputPekerjaan">Pekerjaan :</label>
            <select class="form-control" id="inputPekerjaan" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>">
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
            <input type="text" class="form-control" id="inputNamaLengkap" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputKategori">Kategori :</label>
            <select class="form-control" id="inputKategori" name="kategori" value="<?php echo $data['kategori']; ?>">
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
            <input type="text" class="form-control" id="inputTanggalLahir" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" required="" />
          </div>

          <div class="form-group col-md-3">
            <label for="inputUmur">Umur :</label>
            <input type="text" class="form-control" id="inputUmur" name="umur" value="<?php echo $data['umur']; ?>" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputNomorHP">Nomor Handphone(Whatsapp) :</label>
            <input type="tel" class="form-control" id="inputNomorHP" name="no_hp" value="<?php echo $data['no_hp']; ?>" required="" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputJenisKelamin">Jenis Kelamin :</label>
            <input type="text" class="form-control" id="inputJenisKelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputJenisVaksin">Jenis Vaksin :</label>
            <select class="form-control" id="inputJenisVaksin" name="jenis_vaksin" value="<?php echo $data['jenis_vaksin']; ?>">
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
            <input type="text" class="form-control" id="inputAlamat" name="alamat" value="<?php echo $data['alamat']; ?>" required="" />
          </div>

          <div class="form-group col-md-6">
            <label for="inputEmail">Email :</label>
            <input type="text" class="form-control" id="inputEmail" name="email" value="<?php echo $data['email']; ?>" required="" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputKecamatan">Kecamatan :</label>
            <select class="form-control" id="inputKecamatan" name="kecamatan" value="<?php echo $data['kecamatan']; ?>">
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
            <select class="form-control" id="inputKelurahan" name="kelurahan" value="<?php echo $data['kelurahan']; ?>">
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
            <select class="form-control" id="RT" name="rt" value="<?php echo $data['rt']; ?>">
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
            <select class="form-control" id="RW" name="rw" value="<?php echo $data['rw']; ?>">
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
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="button" class="btn btn-success">Simpan</button>
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
