<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

        <title>Edit Profil</title>
    </head>
    <body>
        <div class="nav">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary">
            <a class="navbar-brand" href="style.css">Dashbord > <b>Profil</b></a>
        </nav>
        </div>
        <div class="row no-gutters mt-5">
            <div class="col-md-2 mt-2 pr-3 pt-4 ">
                <div class="profile ml-4 pt-3 text-center">
                    <img class="profile-img" src="img/olix.png" alt="">
                    <div class="nama">
                        <h5>Olivia Rodrigo</h5>
                        <div class="deskripsi">
                            Mahasiswa Aktif <br>
                            Departemen Informatika <br>
                            Fakultas Sains dan Matematika
                        </div>
                    </div>
                </div>
                <ul class="nav flex-column ml-4 mb-5 mt-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="edit_profil.php"><i class="fa-solid fa-people mr-3"></i>Profil</a><hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="irs.php"><i class="fas fa-user-graduate mr-3"></i>Data IRS</a><hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="khs.php"><i class="fa-solid fa-chalkboard-user mr-3"></i>Data KHS</a><hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pkl.php"><i class="fa-solid fa-user-pen mr-3"></i>Data PKL</a><hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skripsi.php"><i class="fa-solid fa-calendar-days mr-3"></i>Data Skripsi</a><hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keluar.php"><i class="fa-solid fa-paper-plane mr-3"></i>Keluar</a><hr class="bg-secondary">
                    </li>
                </ul>
            </div> 

            <div class="col-md-10 p-5 pt-2">
                <div class="card-header bordered">Edit Profil</div>
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
                                $alamat = test_input($_POST['alamat']);
                                $provinsi = test_input($_POST['provinsi']);
                                $kabkota = test_input($_POST['kabkota']);
                                $email = test_input($_POST['email']);
                                $nohp = test_input($_POST['nohp']);

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
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat"></textarea>
                                <small class="form-text text-danger" id="alamat_error"></small>
                            </div>
                            
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <select class="form-control" id="provinsi" name="provinsi">
                                    <option value="0">Pilih provinsi</option>
                                </select>
                                <small class="form-text text-danger" id="provinsi_error"></small>
                            </div>
                            
                            <div class="form-group">
                                <label for="kabkota">Kabupaten/Kota</label>
                                <select class="form-control" id="kabkota" name="kabkota">
                                    <option value="0">Pilih kabupaten/kota</option>
                                </select>
                                <small class="form-text text-danger" id="kabkota_error"></small>
                            </div>
                            <div class="form-group">
                                <label for="naam">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                                <small class="form-text text-danger" id="email_error"></small>
                                <small class="form-text text-success" id="email_success" style="display: none">Email tersedia</small>
                            </div>
                            <div class="form-group">
                                <label for="naam">No Handphone</label>
                                <input type="text" class="form-control" name="nohp" id="nohp">
                                <small class="form-text text-danger" id="nohp_error"></small>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Daftar</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script src="script.js"></script>
    </body>
</html>