<?php
session_start();
require_once('db/db_login.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if ($password == '' || $email == '') {
        $error = '<div class="alert alert-danger">Masukkan Email dan Password!</div>';
    } else {
        $query = " SELECT * FROM user WHERE email='" . $email . "' AND password='" . $password . "' ";

        $result = mysqli_query($con, $query);
        if (!$result) {
            die("Could not query the database <br />" . mysqli_error($con));
        } else {
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['email'] = $email;
                header('Location: edit_profil.php');
                exit;
            } else {
                $error = '<div class="alert alert-danger">Email atau Password yang dimasukkan salah</div>';
            }
        }
        mysqli_close($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background: #f8f9fa;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="grid mx-96 flex" style="margin-top: 30vh;">
        <form class="flex flex-col grid card w-full ">
            <label class="block text-gray-500 font-bold mb-0 pr-4" for="inline-full-name">
                NIM/NIP/Email
            </label>
            <div class="mb-4">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="Jane Doe">
            </div>
            <label class="block text-gray-500 font-bold mb-0 pr-4" for="inline-password">
                Password
            </label>
            <div class="mb-4">
                <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="******************">
            </div>
            <div class="justify-self-end">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>

</html>
