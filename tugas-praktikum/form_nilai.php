<?php
  include_once('function.php');
  $nama = '';
    $nim = '';
    $matkul = '';
    $uts = '';
    $uas = '';
    $tugas = '';
    $total = '';
  if(isset($_POST['submit'])) {
    $nama = $_POST['Nama'];
    $nim = $_POST['NIM'];
    $matkul = $_POST['Matkul'];
    $uts = $_POST['UTS'];
    $uas = $_POST['UAS'];
    $tugas = $_POST['Tugas'];
    $total = (30*$uts/100) + (35*$uas/100) + (35*$tugas/100);
  }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css"/>
    <title>Hello, world!</title>
  </head>
  <body>
<div class="container py-5">
    <h2 class="mb-3">Form Nilai</h2>
<form method="POST" action="">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer013">Nama :</label>
      <input type="text" class="form-control" id="validationServer013" placeholder="First name" required name="Nama">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer023">NIM :</label>
      <input type="text" class="form-control" id="validationServer023" placeholder="NIM" required name="NIM">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer023">Matkul :</label>
      <input type="text" class="form-control" id="validationServer023" placeholder="Matkul" required name="Matkul">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer033">Nilai UTS :</label>
      <input type="text" class="form-control" id="validationServer033" placeholder="UTS"
        required name="UTS">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer043">Nilai UAS :</label>
      <input type="text" class="form-control" id="validationServer043" placeholder="UAS"
        required name="UAS">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer053">Nilai Tugas :</label>
      <input type="text" class="form-control" id="validationServer053" placeholder="Tugas"
        required name="Tugas">
    </div>
  </div>
  <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
</form>
<div class="mt-5">
    <h2 class="mb-3">Hasil :</h2>
    <table class="table table-bordered">
        <tr>
            <td width="18%">Nama</td>
            <td width="2%">:</td>
            <td width="80%"><?= $nama ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $nim ?></td>
        </tr>
        <tr>
            <td>Matkul</td>
            <td>:</td>
            <td><?= $matkul ?></td>
        </tr>
        <tr>
            <td>UTS</td>
            <td>:</td>
            <td><?= $uts ?></td>
        </tr>
        <tr>
            <td>UAS</td>
            <td>:</td>
            <td><?= $uas ?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?= $tugas ?></td>
        </tr>
        <tr>
            <td><strong>Total</strong></td>
            <td>:</td>
            <td><strong><?= $total ?></strong></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td>:</td>
            <td><?= predikat($total) ?></td>
        </tr>
        <tr>
            <td>Ip</td>
            <td>:</td>
            <td><?= ip($total) ?></td>
        </tr>
    </table>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js"/>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>