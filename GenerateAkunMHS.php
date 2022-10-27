<?php
require_once('db_login.php');
if(isset ($_POST['submit'])){
    $isValid = true;
    $namalengkap = test_input($_POST['nama_lengkap']);
    if($namalengkap == ""){
        $error_nama_lengkap = "Nama lengkap harus diisi";
    }


    $nim = test_input($_POST['NIM']);
    if($nim == ""){
        $error_nim = "NIM harus diisi";
    }

    $angkatan = test_input($_POST['angkatan']);
    if($angkatan == ""){
        $error_angkatan = "Angkatan harus diisi";
    }

    $role = ($_POST['role']);
    if (!isset($_POST['role']) || $_POST['role'] == 0) {
        $error_role = "role harus dipilih";
        $isValid = false;
    }

    $status = $_POST['status'];
    if ($status == '') {
        $error_status = "Status harus dipilih";
        $isValid = false;
    }

    $query = "INSERT INTO user (username, password) VALUES ('" . $nim . "','" . '123'.  "')";
    $result = $db->query($query);
    $user_id = $db->insert_id;

    $query = "INSERT INTO mahasiswa (nim, nama_mhs, angkatan, status_mhs, user_id) VALUES ('" . $nim . "','" . $namalengkap . "','" . $angkatan . "','" . $status . "','" . $user_id . "')";
    $result = $db->query($query);

     $query = "INSERT INTO irs (nim, semester_mhs, sks, status_irs) VALUES ('" . $nim . "',1,21,' BELUM DISETUJUI')";
     $result = $db->query($query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/15d5872470.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <title>Dashboard Mahasiswa</title>
        <link rel="stylesheet" href="css/style2.css">

        <title>PPL</title>
</head>

<body>
    <div class="container nt flex">
    <div class="left sticky top-0">
          <div class="user flex card">
                  <img class="shrink" id="avatar" src="img/olix.png" alt="" />
                  <div class="flex-row ml-5">
                      <p class="username">Olivia Rodrigo
                          <!-- <span style="font-size: 12px;">24060120130052</span> -->
                      </p>
                      <p class="status">
                          Operator <br> Departemen Informatika <br> Fakultas Sains dan Matematika
                      </p>
                  </div>
              </div>
            <div class="sidenav card">
                <ul id="navlist" class="divide-y divide-gray-500 grid">
                    <li><a id="Profil" href=""><i class="fas fa-user"></i> Profile</a></li>
                    <li><a id="IRS" href="#"><i class="fas fa-file-lines"></i> Generate Akun</a></li>
                    <li><a id="KHS" href="#"><i class="fas fa-file-lines"></i> Data Mahasiswa</a></li>
                    <li><a id="PKL" href="#"><i class="fas fa-building"></i> Data PKL Mahasiswa</a></li>
                    <li><a id="Skripsi" href="#"><i class="fas fa-book-bookmark"></i> Data Skripsi Mahasiswa</a></li>
                    <li><a id="Logout" href="#"><i class="fas fa-right-from-bracket"></i> Keluar</a></li>
                </ul>
            </div>
        </div>
        <div class="logform">
            <div class="block p-6 rounded-lg shadow-2xl bg-gray max-w-md">
                <form method="POST">
                    <div class="grid grid-cols-2 gap-4">
                    <div class="form-group mb-6 xl:w-96">
                        <input name="nama_lengkap" type="text" class="form-control block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput123"
                        aria-describedby="emailHelp123" placeholder="Nama Lengkap">
                    <div id="error_nama_lengkap" style="color:red">
                            <?php
                                if(isset($error_nama_lengkap)){
                                    echo $error_nama_lengkap;
                                }
                            ?>
                    </div>
                    </div>
                    </div>
                    <div class="form-group mb-6 w-full">
                    <input name="NIM" type="text" class="form-control block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125"
                        placeholder="NIM">
                        <div id="error_nim" style="color:red">
                            <?php
                                 if(isset($error_nim)){
                                    echo $error_nim;
                                 }
                            ?>
                        </div>
                    </div>
                    <div class="form-group mb-6 w-full">
                    <input name="angkatan" type="text" class="form-control block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126"
                        placeholder="Angkatan">
                        <div id="error_angkatan" style="color:red">
                            <?php
                                 if(isset($error_angkatan)){
                                    echo $error_angkatan;
                                 }
                            ?>
                        </div>
                    </div>                          
                        <div class="form-group mb-6">
                            <div class="relative">
                                <select id="status" name="status" class="block appearance-none w-full border text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option selected="" value="">-- Pilih Status --</option>
                                <option value="AKTIF">Aktif</option>
                                <option value="CUTI">Cuti</option>
                                <option value="MANGKIR">Mangkir</option>
                                <option value="DO">DO</option>
                                <option value="UNDUR DIRI">Undur Diri</option>
                                <option value="LULUS">Lulus</option>
                                <option value="MENINGGAL DUNIA">Meninggal Dunia</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                                <div id="error_status" style="color:red">
                                <?php
                                    if(isset($error_status)){
                                        echo $error_status;
                                    }
                                ?>
                            </div>
                            
                        </div>
                    <button name="submit" type="submit" class="
                    w-full
                    px-6
                    py-2.5
                    bg-blue-600
                    text-white
                    font-medium
                    text-xs
                    leading-tight
                    uppercase
                    rounded
                    shadow-md
                    hover:bg-blue-700 hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg
                    transition
                    duration-150
                    ease-in-out">GENERATE</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('IRS').style.opacity = '2';
        document.getElementById('IRS').style.color = '#4ade80';  
    </script>  
</body>
</html>

