<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NILAI SISWA</title>
   
</head>
<body> 
<nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">
            <h3>Nilai Siswa</h3>
        </a>
</nav>
<br>
<form class="form-horizontal" method="POST" action="nilai_siswa.php">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="form-group row">
    <label for="text" class="col-6 col-form-label">Nama Lengkap</label> 
    <div class="col-6">
      <input id="text" name="nama"  type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-6 col-form-label">Mata Kuliah</label> 
    <div class="col-6">
      <select id="" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="BD1">Basis Data</option>
        <option value="PW1">Pemograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-6 col-form-label">Nilai UTS</label> 
    <div class="col-6">
      <input id="text2" name="nilai_uts"  type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-6 col-form-label">Nilai UAS</label> 
    <div class="col-6">
      <input id="text3" name="nilai_uas"  type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-6 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-6">
      <input id="text4" name="nilai_tugas"  type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-6 col-6">
      <button name="submit" type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
<?php
require_once 'libfungsi.php';
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$total = $nilai_uts + $nilai_uas +$nilai_tugas;
$_nilai = $total/3;
$hasil_ujian = kelulusan($_nilai);
$peringkat = grade($_nilai);
//data
echo "Nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $nilai_uts";
echo "<br/>Nilai UAS : $nilai_uas";
echo "<br/>Nilai Tugas : $nilai_tugas";
echo "<br/>Keterangan : $hasil_ujian";
echo "<br/>Grade : $peringkat";

?>
</body>
</html>