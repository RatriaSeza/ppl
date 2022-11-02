<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Dashboard Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container nt">
        <div class="navpro">
            <div class="profile">
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
            <div class="nav-bar">
                <div class="d-flex card card-nav">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a href="#">Dashboard</a>
                        <hr>
                        <a href="#">Data IRS</a>
                        <hr>
                        <a href="#">Data KHS</a>
                        <hr>
                        <a href="#">Data PKL</a>
                        <hr>
                        <a href="#">Data Skripsi</a>
                        <hr>
                        <a href="#">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                <div class="flexbox-container">
                    <form action="">
                    <div class="flexbox-container cont1">
                            <div class="form-group mb-5">
                                <label for="">Status Akademik</label>
                                <div class="flexbox-container item1">
                                    <div class="card-body Status1">
                                        <h6>Semester</h6>
                                        <p></p>
                                    </div>
                                    <div class="card-body Status1">
                                        <h6>Status</h6>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Prestasi Akademik</label>
                                <div class="flexbox-container item1">
                                    <div class="card-body Status1">
                                        <h6>IPk</h6>
                                        <p></p>
                                    </div>
                                    <div class="card-body Status1">
                                        <h6>SKSk</h6>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="">Entry Akademik</label><br>
                        <div class="flexbox-container cont2">
                                <button>Entry IRS</button>
                                <button>Entry KHS</button>
                                <button>Entry PKL</button>
                                <button>Entry Skripsi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>