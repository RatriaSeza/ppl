<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>IRS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
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
                        <a href="#">Profil</a>
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
            <div class="card-header">IRS</div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Pilih Semester</label>
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">SKS Kumulatif</label>
                        <input type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Upload Scan IRS</label>
                        <input type="file">
                    </div>
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>