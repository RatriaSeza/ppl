<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Rekap PKL</title>
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
                                Mahasiswa Aktif <br>
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
            <div class="col-8">
                <p style="margin-top:30px">Overview Data Mahasiswa PKL :</p>
                <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2016</button>
                <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2017</button>
                <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2018</button>
                <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2019</button>
                <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2020</button>
                <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2021</button>
                <button type="button" class="btn btn-primary" style="background: #613fe5;width:100px">2022</button>
                <div style="margin-top:20px">

            </div>

                <p style="margin-top:30px">Rekap Mahasiswa PKL Tiap Angkatan :</p>
                <br>
                <p><button type="button" class="btn btn-primary" style="width:50px;height:10px"></button> Mahasiswa Aktif</p>
                <p><button type="button" class="btn btn-info" style="width:50px;height:10px"></button> Mahasiswa Cuti</p>
                <div class="bg-light border border-dark"
                    style="width:40%;transform:rotate(-90deg);transform-origin:center;margin-left:150px;margin-top:-100px;padding-bottom:70px;padding-top:50px;padding-right:30px">

                    <div class="container text-end">
                        <div class="row align-items-start">
                            <div class="col-1">

                            </div>
                            <div class="col-11">
                                <div class="container text-end">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            50
                                        </div>
                                        <div class="col">
                                            100
                                        </div>
                                        <div class="col">
                                            150
                                        </div>
                                        <div class="col">
                                            200
                                        </div>
                                        <div class="col">
                                            250
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container text-start pt-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <p style="transform:rotate(90deg);transform-origin: right;">2016</p>
                            </div>
                            <div class="col-11">
                                <div class="progress border border-dark" style="height:35px">
                                    <div class="progress-bar" role="progressbar" aria-label="Segment two"
                                        style="width: 70%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar" aria-label="Segment one"
                                        style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-start pt-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <p style="transform:rotate(90deg);transform-origin:right;">2017</p>
                            </div>
                            <div class="col-11">
                                <div class="progress border border-dark" style="height:35px">
                                    <div class="progress-bar" role="progressbar" aria-label="Segment two"
                                        style="width: 65%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar" aria-label="Segment one"
                                        style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-start pt-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <p style="transform:rotate(90deg);transform-origin:right;">2018</p>
                            </div>
                            <div class="col-11">
                                <div class="progress border border-dark" style="height:35px">
                                    <div class="progress-bar" role="progressbar" aria-label="Segment two"
                                        style="width: 60%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar" aria-label="Segment one"
                                        style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-start pt-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <p style="transform:rotate(90deg);transform-origin:right;">2019</p>
                            </div>
                            <div class="col-11">
                                <div class="progress border border-dark" style="height:35px">
                                    <div class="progress-bar" role="progressbar" aria-label="Segment two"
                                        style="width: 50%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar" aria-label="Segment one"
                                        style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-start pt-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <p style="transform:rotate(90deg);transform-origin:right;">2020</p>
                            </div>
                            <div class="col-11">
                                <div class="progress border border-dark" style="height:35px">
                                    <div class="progress-bar" role="progressbar" aria-label="Segment two"
                                        style="width: 40%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar" aria-label="Segment one"
                                        style="width: 10%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-start pt-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <p style="transform:rotate(90deg);transform-origin:right;">2021</p>
                            </div>
                            <div class="col-11">
                                <div class="progress border border-dark" style="height:35px">
                                    <div class="progress-bar" role="progressbar" aria-label="Segment two"
                                        style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar" aria-label="Segment one"
                                        style="width: 5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container text-start pt-4">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <p style="transform:rotate(90deg);transform-origin:right;">2022</p>
                            </div>
                            <div class="col-11">
                                <div class="progress border border-dark" style="height:35px">
                                    <div class="progress-bar" role="progressbar" aria-label="Segment two"
                                        style="width: 20%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-info" role="progressbar" aria-label="Segment one"
                                        style="width: 5%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--</div>-->
            </div>
        </div>
    </div>


</body>

</html>