<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Dashboard Operator</title>
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
                        Operator<br>
                        Fakultas Sains dan Matematika
                    </div>
                </div>
            </div>
            <div class="nav-bar">
                <div class="d-flex card card-nav">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a href="#">Dashboard</a>
                        <hr>
                        <a href="#">Profile</a>
                        <hr>
                        <a href="#">Data Mahasiswa</a>
                        <hr>
                        <a href="#">Data PKL Mahasiswa</a>
                        <hr>
                        <a href="#">Data Skripsi Mahasiswa</a>
                        <hr>
                        <a href="#">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                    <form action="">
                             <div class="card- pb-0">
                                   <h5 class="card-title">
                                        Data Departemen
                                 </h5>
                                 <table class="table table-condensed">
                                       <thead>
                                         <tr>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        <tr>
                                            <td>Mahasiswa</td>
                                            <td class="fw-bold">555</td>
                                        </tr>
                                        <tr>
                                            <td>Dosen</td>
                                            <td class="fw-bold">233</td>
                                        </tr>
                                        <tr>
                                            <td>Mata Kuliah</td>
                                            <td class="fw-bold">65</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body pb-0">
                                <h5 class="card-title">
                                    Status Mahasiswa
                                </h5>
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Aktif</td>
                                            <td class="fw-bold">555</td>
                                        </tr>
                                        <tr>
                                            <td>Cuti</td>
                                            <td class="fw-bold">233</td>
                                        </tr>
                                        <tr>
                                            <td>Mangkir</td>
                                            <td class="fw-bold">65</td>
                                        </tr>
                                        <tr>
                                            <td>DO</td>
                                            <td class="fw-bold">555</td>
                                        </tr>
                                        <tr>
                                            <td>Undur Diri</td>
                                            <td class="fw-bold">233</td>
                                        </tr>
                                        <tr>
                                            <td>Lulus</td>
                                            <td class="fw-bold">65</td>
                                        </tr>
                                        <tr>
                                            <td>Meninggal Dunia</td>
                                            <td class="fw-bold">65</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>