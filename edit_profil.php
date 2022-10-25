<?php
    include('db/db_login.php');
    session_start();
    $email = $_SESSION['email'];

    if (!isset($_SESSION['email'])) {
        header('Location: login.php');
    }

    if(isset($_GET['logout'])){
        unset($email);
        session_destroy();
        header('location:login.php');
     }
?>

<html>
    <head>
        <title>Edit Profil</title>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="nav/style_nav.css" />
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="container flex">
            <div class="left sticky top-0">
                <div class="user flex card">
                    <?php
                        $select = mysqli_query($con, "SELECT * FROM user WHERE email = '$email'") or die('query failed');
                        if(mysqli_num_rows($select) > 0){
                            $fetch = mysqli_fetch_assoc($select);
                        }
                        if($fetch['image'] == ''){
                            echo '<img src="img/default-avatar.png">';
                        }else{
                            echo '<img src="uploaded_image/'.$fetch['image'].'">';
                        }
                    ?>
                    <div class="flex-row mr-5">
                        <img id="avatar" <?php echo $fetch['image']; ?> />
                    </div>
                    <div class="flex-row  mt-1 pr-5">
                        <p class="nama"> <b><?php echo $fetch['nama']; ?></b> </p>  <a id="update_profil" href="update_profile.php"><i class="fa-solid fa-pen-to-square"></i></a>
                        <p class="status">Mahasiswa Departemen Informatika Fakultas Sains dan Matematika</p>
                    </div>
                </div>
                <div class="sidenav card">
                    <ul class="grid gap-2">
                        <li><a id="Profil" href="edit_profil.php"><img src="nav/icon/Profil.png" alt="" /> Profil</a></li>
                        <hr>
                        <li><a id="IRS" href="#"><img src="nav/icon/IRS.png" alt="" /> Data IRS</a></li>
                        <hr>
                        <li><a id="KHS" href="#"><img src="nav/icon/KHS.png" alt="" /> Data KHS</a></li>
                        <hr>
                        <li><a id="PKL" href="#"><img src="nav/icon/PKL.png" alt="" /> Data PKL</a></li>
                        <hr>
                        <li><a id="Skripsi" href="#"><img src="nav/icon/Skripsi.png" alt="" /> Data Skripsi</a></li>
                        <hr>
                        <li><a id="Logout" href="logout.php"><img src="nav/icon/Logout.png" alt="" /> Keluar</a></li>
                    </ul>
                </div>
            </div>
            <div class="content-irs card sky-blue-50 grow" style="padding:50px 70px;margin-left:10vh; margin-top: 10vh; margin-bottom:10vh; margin-right:5vw;">
                <div class="card-header mb-2" style="font-size: 30px ;font-weight: 700;">Edit Profil</div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['submit'])) {
                            $nama = test_input($_POST['nama']);
                            $nim = test_input($_POST['nim']);
                            $angkatan = test_input($_POST['angkatan']);
                            $status_kuliah = test_input($_POST['status_kuliah']);
                            $jalur_masuk = test_input($_POST['jalur_masuk']);
                            $jenis_kelamin = test_input($_POST['jenis_kelamin']);
                            $alamat = test_input($_POST['alamat']);
                            $provinsi = test_input($_POST['provinsi']);
                            $kabupaten = test_input($_POST['kabupaten']);
                            $email = test_input($_POST['email']);
                            $nohp = test_input($_POST['nohp']);

                            $result = $con->query("INSERT INTO mahasiswa(nama, nim, angkatan, status_kuliah, jalur_masuk, jenis_kelamin, alamat, id_provinsi, id_kabupaten, email, nohp) 
                            VALUES('$nama', '$nim', '$angkatan', '$status_kuliah', '$jalur_masuk', '$jenis_kelamin', '$alamat', '$provinsi', '$kabupaten', '$email', '$nohp')");

                            if ($result):
                            ?>
                                <div class="alert alert-success">Data berhasil disimpan</div>
                            <?php else: ?>
                                <div class="alert alert-error">Data gagal disimpan <?php echo $con->error ?></div>
                            }
                            <?php
                            endif;
                        }
                        ?>
                    <form method="POST" onsubmit="return submitForm()" name="form" class="grid gap-7">

                        <div class="form-group">
                            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="nama">Nama Lengkap</label>
                            <input name="nama" id="nama" type="text" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="<?php echo $fetch['nama']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="nim">NIM</label>
                            <input name="nim" id="nim" type="text" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Masukkan NIM" required>
                        </div>

                        <div class="from-group">
                            <label class="block tracking-wide text-sm font-bold mb-2" for="angkatan">Angkatan</label>
                            <div class="relative">
                                <select name="angkatan" id="angkatan" class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                    <option value="0">Pilih Angkatan</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="from-group">
                            <label class="block tracking-wide text-sm font-bold mb-2" for="status_kuliah">Status</label>
                            <div class="relative">
                                <select name="status_kuliah" id="status_kuliah" class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                    <option selected>Pilih Status</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Mangkir">Mangkir</option>
                                    <option value="Cuti">Cuti</option>
                                    <option value="Lulus">Lulus</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="from-group">
                            <label class="block tracking-wide text-sm font-bold mb-2" for="jalur_masuk">Jalur Masuk</label>
                            <div class="relative">
                                <select name="jalur_masuk" id="jalur_masuk" class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                    <option value="">Pilih Jalur Masuk</option>
                                    <option value="SNMPTN">SNMPTN</option>
                                    <option value="SBMPTN">SBMPTN</option>
                                    <option value="SBUB">SBUB</option>
                                    <option value="Mandiri">Mandiri</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="form-check mt-2">
                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                    <label class="form-check-label" for="jenis_kelamin1">Laki-laki</label>
                                </div>
                                <div class="form-check mt-2">
                                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                                    <label class="form-check-label" for="jenis_kelamin2">Perempuan</label>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="alamat">Alamat</label>
                            <input name="alamat" id="alamat" type="text-area" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Masukkan Alamat" required>
                        </div>

                        <div class="from-group">
                            <label class="block tracking-wide text-sm font-bold mb-2" for="provinsi">Provinsi</label>
                            <div class="relative">
                                <select name="provinsi" id="provinsi" class="form-control block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                    <option value="0">Pilih Provinsi</option>
                                    <?php
                                    $result = $con->query("SELECT * FROM provinsi ORDER BY nama");

                                    while ($data = $result->fetch_object()):
                                    ?>
                                        <option value="<?php echo $data->id ?>"><?php echo $data->nama ?></option>
                                    <?php endwhile ?>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="from-group">
                            <label class="block tracking-wide text-sm font-bold mb-2" for="kabupaten">Kabupaten/Kota</label>
                            <div class="relative">
                                <select name="kabupaten" id="kabupaten" class="form-control block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                    <option value="all">Pilih Kabupaten/Kota</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                            <input name="email" id="email" type="email" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="<?php echo $fetch['email']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="nohp">No Handphone</label>
                            <input name="nohp" id="nohp" type="text" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Masukkan No Handphone" required>
                        </div>
                        
                        <div class="justify-self-end">
                            <button class="bg-violet-500 hover:bg-violet-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>

