<?php
require('db/db_login.php');

if (isset($_POST['submit'])) {
    $semester = $_POST['semester'];
    $sksKum = $_POST['sksKum'];
    $scanIRS = $_POST['scanIRS'];

    $query = "INSERT INTO irs (semester_mhs, sks, berkas_irs) VALUES ('$semester','$sksKum', '$scanIRS')";
    $query_run = mysqli_query($con, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="nav/nav_mhs/style_nav.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .upload-file {
            height: 167px;
            display: flex;
            cursor: pointer;
            margin-bottom: 30px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-radius: 5px;
            border: 2px solid #cbd5e1;
        }

        .upload-file i {
            font-size: 50px;
        }

        .upload-file p {
            margin-top: 15px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container flex">
        <div class="left sticky top-0">
            <div class="user flex card">
                <img id="avatar" src="img/olix.png" alt="" />
                <div class="flex-row ml-5">
                    <p class="username">Olivia Rodrigo</p>
                    <p class="status">
                        Mahasiswa Aktif Departemen Informatika Fakultas Sains dan Matematika
                    </p>
                </div>
            </div>
            <div class="sidenav card">
                <ul class="grid gap-2">
                    <li><a id="Profil" href="#"><img src="nav/icon/IRS.png" alt="" /> Profil</a></li>
                    <hr>
                    <li><a id="IRS" href="#"><img src="nav/icon/IRS.png" alt="" /> Data IRS</a></li>
                    <hr>
                    <li><a id="KHS" href="khs.php"><img src="nav/icon/KHS.png" alt="" /> Data KHS</a></li>
                    <hr>
                    <li><a id="PKL" href="pkl.php"><img src="nav/icon/PKL.png" alt="" /> Data PKL</a></li>
                    <hr>
                    <li><a id="Skripsi" href="skripsi.php"><img src="nav/icon/Skripsi.png" alt="" /> Data Skripsi</a></li>
                    <hr>
                    <li><a id="Logout" href="#"><img src="nav/icon/Logout.png" alt="" /> Keluar</a></li>
                </ul>
            </div>
        </div>
        <div class="card sky-blue-50 grow" style="padding:50px 70px; margin-top: 10vh; margin-bottom:10vh; margin-right:5vw;">
            <div class="card-header mb-2" style="font-size: 30px ;font-weight: 700;">Data IRS</div>
            <div class="card-body">
                <form method="POST" name="fIRS" action="" class="grid dropzone" onsubmit="return validateForm()">
                    <div class="from-group mt-3 mb-7">
                        <label class="block tracking-wide  text-sm font-bold mb-2" for="grid-state">
                            Semester Aktif
                        </label>
                        <div class="relative">
                            <select name="semester" class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option value="">Pilih Semester</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                                <option value=8>8</option>
                                <option value=9>9</option>
                                <option value=10>10</option>
                                <option value=11>11</option>
                                <option value=12>12</option>
                                <option value=13>13</option>
                                <option value=14>14</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-7">
                        <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="">
                            SKS Kumulatif
                        </label>
                        <input name="sksKum" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" placeholder="Masukkan SKS Kumulatif">
                    </div>
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="">
                        Upload Scan IRS
                    </label>
                    <div class="upload-irs ">
                        <div class="mb-7 upload-file bg-gray-200">
                            <input class="file-input" id="inIRS" type="file" accept=".pdf" name="scanIRS" style="display:none;">
                            <span id="icon-up"><i class="fas fa-cloud-upload-alt text-gray-700"></i></span>
                            <span id="uploaded-file" class="block tracking-wide text-gray-700 text-sm font-bold opacity-75">Upload Scan IRS</span>
                        </div>
                    </div>
                    <div class="flex justify-between text-gray-700 shadow-inner rounded p-3 bg-red-400 mb-7" id="ferror" style="display: none;">
                        <p class="self-center text-slate-100"><strong><i class="fas fa-info-circle"></i> Mohon untuk mengisi semua data.</strong></p>
                    </div>
                    <div class="grid justify-self-end">
                        <button class="bg-violet-500 hover:bg-violet-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('IRS').style.opacity = '2';

        function validateForm() {
            var semester = document.forms["fIRS"]["semester"].value;
            var sksKum = document.forms["fIRS"]["sksKum"].value;
            var IRS = document.getElementById("IRS");
            if (semester == "" || sksKum == '' || IRS.files.length === 0) {
                document.getElementById('ferror').style.display = "flex";
                return false;
            }
        }

        const formUp = document.querySelector(".upload-file"),
            fileInput = document.querySelector(".file-input")

        formUp.addEventListener("click", () => {
            fileInput.click();
        });

        let inIRS = document.getElementById("inIRS");
        let uploadedFile = document.getElementById("uploaded-file");
        let iconUP = document.getElementById("icon-up");


        inIRS.addEventListener("change", () => {
            let inputFile = document.querySelector("input[type=file]").files[0];

            uploadedFile.innerText = inputFile.name;
            iconUP.innerHTML = '<i class="fas fa-file-alt text-gray-700"></i>';
        })
    </script>
</body>

</html>
