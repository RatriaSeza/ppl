<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>KHS</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
            <div class="card-header h3">Data KHS</div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label class="form-label" for="">Pilih Semester</label><br>
                        <select class="form-select" name="" id="">
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
                        <label class="form-label" for="">SKS Semester</label><br>
                        <input class="form-control" type="number">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">SKS Kumulatif</label><br>
                        <input class="form-control" type="number">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">IP Semester</label><br>
                        <input class="form-control" type="number">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">IP Kumulatif</label><br>
                        <input class="form-control" type="number">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Upload Scan KHS</label><br>
                        <div class="flex justify-center items-center w-full">
                            <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-gray-50 dark:bg-gray-400 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-800">
                                <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                    <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-600 dark:text-gray-600"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>
                    <button class="position-absolute end-0" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>