<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Progress Belajar</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body style="background: #ece8fb;">
<div class="container text-start">
<div class="row align-items-start">
<div class="col-4">
    <div class="navpro" style="margin-top:50px">
    <div class="profile">
        <img class="profile-img" src="img/olix.png" alt="">
        <div class="nama">
            <h5>Olivia Rodrigo</h5>
            <div class="deskripsi">
                Dosen <br>
                Departemen Informatika <br>
                Fakultas Sains dan Matematika
            </div>
        </div>
    </div>
    <div class="nav-bar">
        <ul class="nav flex-column ml-4 mb-5 mt-5">
            <li class="nav-item">
                <a class="nav-link active" href="edit_profil.php"><i class="fa-solid fa-people mr-3"></i>Dashboard</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="detail-data-mhs.php"><i class="fas fa-user-graduate mr-3"></i>Detail Data Mahasiswa</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="khs.php"><i class="fa-solid fa-chalkboard-user mr-3"></i>Generate Verifikasi Mahasiswa</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pkl.php"><i class="fa-solid fa-user-pen mr-3"></i>Progress Belajar Mahasiswa</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="skripsi.php"><i class="fa-solid fa-calendar-days mr-3"></i>Data PKL Mahasiswa</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="skripsi.php"><i class="fa-solid fa-calendar-days mr-3"></i>Data Skripsi Mahasiswa</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="keluar.php"><i class="fa-solid fa-paper-plane mr-3"></i>Keluar</a><hr class="bg-secondary">
            </li>
        </ul>

    </div>
</div>
</div>
<div class="col">
    <p style="margin-top:30px">Pilih Angkatan :</p>
    <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2016</button>
    <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2017</button>
    <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2018</button>
    <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2019</button>
    <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2020</button>
    <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2021</button>
    <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2022</button>

    <div class="col-md-10 p-5 pt-2">
        <div class="card-header bordered">Profil Mahasiswa</div>
        <div class="card-body">
            <div class="row">
            <div class="col-2">
                <div class="profile">
                    <img class="profile-img" src="img/olix.png" alt="">
                </div>
            </div>
            <div class="col-10">
                <div class="form-group">
                <?php
                    if (isset($_POST['submit'])) {
                        $nama = test_input($_POST['nama']);
                        $nim = test_input($_POST['nim']);
                        $angkatan = test_input($_POST['angkatan']);
                        // $alamat = test_input($_POST['alamat']);
                        // $provinsi = test_input($_POST['provinsi']);
                        // $kabkota = test_input($_POST['kabkota']);
                        // $email = test_input($_POST['email']);
                        // $nohp = test_input($_POST['nohp']);

                        $result = $db->query("INSERT INTO mahasiswa(nama, nim, angkatan, alamat, provinsi, kabkota, email, nohp) 
                        VALUES('$nama', '$nim', '$angkatan', '$alamat', '$provinsi', '$kabkota', '$email', '$nohp')");

                        if ($result):
                        ?>
                            <div class="alert alert-success">Data berhasil disimpan</div>
                        <?php else: ?>
                            <div class="alert alert-error">Data gagal disimpan <?php echo $db->error ?></div>
                        }
                        <?php
                        endif;
                    }
                ?>
                <form method="POST" onsubmit="return submitForm()" name="form">
                    <div class="form-group">
                        <label for="naam">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                        <small class="form-text text-danger" id="nama_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="naam">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim">
                        <small class="form-text text-danger" id="nim_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="naam">Angkatan</label>
                        <input type="text" class="form-control" name="angkatan" id="angkatan">
                        <small class="form-text text-danger" id="angkatan_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="dosen">Dosen Wali</label>
                        <textarea class="form-control" id="dosen" name="dosen"></textarea>
                        <small class="form-text text-danger" id="dosen_error"></small>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Tampilkan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="nama-semester">
    <p style="margin-top:50px">Semester</p>
    </div>
    <div class="semester">
        <a href="#" class="detail-semester">1</a>
        <a href="#" class="detail-semester">2</a>
        <a href="#" class="detail-semester">3</a>
        <a href="#" class="detail-semester">4</a>
        <a href="#" class="detail-semester">5</a>
        <a href="#" class="detail-semester">6</a>
        <a href="#" class="detail-semester">7</a>
        <a href="#" class="detail-semester">8</a>
        <a href="#" class="detail-semester">9</a>
        <a href="#" class="detail-semester">10</a>
        <a href="#" class="detail-semester">11</a>
        <a href="#" class="detail-semester">12</a>
        <a href="#" class="detail-semester">13</a>
        <a href="#" class="detail-semester">14</a>
    </div>
    <div class="detail-mhs">
        <p style="margin-top:50px">Detail Keterangan Mahasiswa</p>
        <a href="#" class="IRSlink">IRS</a>
        <a href="#" class="KHSlink">KHS</a>
        <a href="#" class="PKLlink">PKL</a>
        <a href="#" class="Skripsilink">Skripsi</a>
    </div>

</div>
</div>
</div>


</body>

</html>