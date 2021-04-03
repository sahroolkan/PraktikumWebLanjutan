<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    
    <title>Form BMI Pasien</title>
</head>
<body>
 <div class="container">
   <div class="card">
	   <h5> <strong> <center> Form Index BMI </center> </strong> </h5>
            <div class="card-body p-5">
                <form action="bmi.php" method="POST">
                    <div class="form-group">
                        <label><strong> Nama</strong></label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label><strong> Berat Badan </strong></label>
                        <div class="input-group">
                            <input type="text" class="form-control col-md" placeholder="Masukan Berat Badan"
                                name="beratBadan" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><strong> Tinggi Badan </strong></label>
                        <div class="input-group">
                            <input type="text" class="form-control col-md" placeholder="Masukan Tinggi Badan"
                                name="tinggiBadan" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><strong> Umur </strong></label>
                        <div class="input-group">
                            <input type="text" class="form-control col-md" placeholder="Masukan Umur"
                                name="umur" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Th</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><strong> Jenis Kelamin </strong></label>
                        <div class="input-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin" value="laki-laki">
                                <label class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin" value="perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <button type="submit" value="Simpan" name="proses" class="btn btn-success">Input Data</button>
                    </div>                    
                </form>
            </div>
            <div class="card output__card">
                    <?php 
                    require_once "kelas_bmipasien.php";
                    if(isset($_POST['proses'])) {
                        $nama = $_POST['nama'];
                        $beratBadan = $_POST['beratBadan'];
                        $tinggiBadan = $_POST['tinggiBadan'];
                        $umur = $_POST['umur'];
                        $jenisKelamin = $_POST['jenisKelamin'];
                        $pasien = new bimPasien($nama, $beratBadan, $tinggiBadan, $umur, $jenisKelamin);
                                
                        echo 'Nama : ' . $pasien->nama . '</br>';
                        echo 'Berat Badan : ' . $pasien->beratBadan . '</br>';
                        echo 'Tinggi Badan : ' . $pasien->tinggiBadan . '</br>' ;
                        echo 'Umur : ' . $pasien->umur. '</br>';
                        echo 'Jenis Kelamin : ' . $pasien->jenisKelamin . '</br>';
                        echo 'BMI : ' . round($pasien->hasilBMI()) . '</br>';
                        echo 'Status : ' . $pasien->statusBMI() . '</br>';
                        }
                    ?>
           </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>
