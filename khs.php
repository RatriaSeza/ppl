<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="nav/nav_mhs/style_nav.css" />
    <script src="https://cdn.tailwindcss.com"></script>

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
                    <li><a id="Profil" href="../ir"><img src="nav/icon/IRS.png" alt="" /> Profil</a></li>
                    <hr>
                    <li><a id="IRS" href="#"><img src="nav/icon/IRS.png" alt="" /> Data IRS</a></li>
                    <hr>
                    <li><a id="KHS" href="#"><img src="nav/icon/KHS.png" alt="" /> Data KHS</a></li>
                    <hr>
                    <li><a id="PKL" href="#"><img src="nav/icon/PKL.png" alt="" /> Data PKL</a></li>
                    <hr>
                    <li><a id="Skripsi" href="#"><img src="nav/icon/Skripsi.png" alt="" /> Data Skripsi</a></li>
                    <hr>
                    <li><a id="Logout" href="#"><img src="nav/icon/Logout.png" alt="" /> Keluar</a></li>
                </ul>
            </div>
        </div>
        <div class="content-irs card sky-blue-50 grow" style="padding:50px 70px; margin-top: 10vh; margin-bottom:10vh; margin-right:5vw;">
            <div class="card-header mb-2" style="font-size: 30px ;font-weight: 700;">Data KHS</div>
            <div class="card-body">
                <form method="POST" action="" class="grid gap-7">
                    <div class="from-group mt-3">
                        <label class="block tracking-wide  text-sm font-bold mb-2" for="grid-state">
                            Semester Aktif
                        </label>
                        <div class="relative">
                            <select name="semester" class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-500 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" required>
                                <option value="">Pilih Semester</option>
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
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-city">
                            SKS Semester
                        </label>
                        <input name="SKS Kumatif" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-city">
                            SKS Kumulatif
                        </label>
                        <input name="SKS Kumatif" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-city">
                            IP Semester
                        </label>
                        <input name="SKS Kumatif" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-city">
                            IP Kumulatif
                        </label>
                        <input name="SKS Kumatif" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="number" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-city">
                            Upload Scan KHS
                        </label>
                        <div class="flex justify-center items-center w-full">
                            <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-100 rounded-lg border-2 border-gray-100 border-solid cursor-pointer dark:hover:bg-gray-50 dark:bg-gray-100 hover:bg-gray-200 dark:border-gray-100 dark:hover:border-gray-200 dark:hover:bg-gray-200">
                                <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                    <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-600 dark:text-gray-600"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>
                    <div class="justify-self-end">
                        <button class="bg-violet-500 hover:bg-violet-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('IRS').style.opacity = '2';
    </script>
</body>

</html>
