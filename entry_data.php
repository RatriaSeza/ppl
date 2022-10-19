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

        <title>Entry Data</title>
    </head>
    <body>
        <div class="nav">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-primary">
            <a class="navbar-brand" href="style.css">Dashbord > <b>Entry Data Mahasiswa</b></a>
        </nav>
        </div>
        <div class="row no-gutters mt-5">
            <div class="col-md-12 p-5 pt-2">
                <div class="card-header bordered"><b>Entry Data Mahasiswa</b></div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-2">
                        <div class="profile mt-4 ml-5">
                            <img class="profile-img" src="img/olix.png" alt="">
                        </div>
                    </div>
                    <div class="col-10 mt-4">
                        <div class="form-group">
                        <?php
                            if (isset($_POST['submit'])) {
                                $nama = test_input($_POST['nama']);
                                $nim = test_input($_POST['nim']);
                                $angkatan = test_input($_POST['angkatan']);
                                $status = test_input($_POST['status']);
                                $jalur_masuk = test_input($_POST['jalur_masuk']);

                                $result = $db->query("INSERT INTO mahasiswa(nama, nim, angkatan, status, jalur_masuk) 
                                VALUES ('$nama', '$nim', '$angkatan', '$status', '$jalur_masuk')");

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
                        <form method="POST" onsubmit="return submitForm()" name="form" class="row g-3">
                            <div class="form-group col-12">
                                <label for="naam">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                                <small class="form-text text-danger" id="nama_error"></small>
                            </div>
                            <div class="form-group col-12">
                                <label for="naam">NIM</label>
                                <input type="text" class="form-control" name="nim" id="nim">
                                <small class="form-text text-danger" id="nim_error"></small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="angkatan">Angkatan</label>
                                <select class="form-control" id="angkatan" name="angkatan">
                                    <option selected>Pilih Angkatan</option>
                                    <option value="0">2022</option>
                                    <option value="1">2021</option>
                                    <option value="2">2020</option>
                                    <option value="3">2019</option>
                                    <option value="4">2018</option>
                                    <option value="5">2017</option>
                                    <option value="6">2016</option>
                                </select>
                                <small class="form-text text-danger" id="status_error"></small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option selected>Pilih Status</option>
                                    <option value="0">Aktif</option>
                                    <option value="1">Mangkir</option>
                                    <option value="2">Cuti</option>
                                    <option value="3">Lulus</option>
                                </select>
                                <small class="form-text text-danger" id="status_error"></small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="jalur_masuk">Jalur Masuk</label>
                                <select class="form-control" id="jalur_masuk" name="jalur_masuk">
                                    <option selected>Pilih Jalur Masuk</option>
                                    <option value="0">SNMPTN</option>
                                    <option value="1">SBMPTN</option>
                                    <option value="2">SBUB</option>
                                    <option value="3">Mandiri</option>
                                </select>
                                <small class="form-text text-danger" id="status_error"></small>
                            </div>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary ml-3 mt-3">Generate</button>
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
    </body>
</html>