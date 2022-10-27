<?php
session_start();
require_once('db_con.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);

    if ($password == '' || $username == '') {
        $error = '<div class="alert alert-danger">Masukkan username dan Password!</div>';
    } else {
        $query = 'SELECT * FROM user WHERE username="' . $username . '" AND password="' .$password. '"';

        $result = mysqli_query($con, $query);
        if (!$result) {
            die("Could not query the database <br />" . mysqli_error($con));
        } else {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result); 
                $role = $row["role"];
                $_SESSION['username'] = $username;
                if ($role == 'mahasiswa'){
                    header('Location: DashboardMahasiswa.php'); 
                }
                else if ($role == 'dosen'){
                    header('Location: dashdosen6.php');
                }
                else if ($role == 'operator'){
                    header('Location: DashboardOperator.php');
                }
                else if ($role == 'departemen'){
                    header('Location: dashdepartemen5.php');
                }
                $_SESSION['role'] = $role; 
                exit;
            } else {
                $error = '<div class="alert alert-danger">Username atau Password yang dimasukkan salah</div>';
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
    <link rel="stylesheet" href="css/style2.css">
    <style>
        body {
            background: #f8f9fa;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <?php if (isset($tes)) echo $tes ?>
    <div class="grid mx-96 flex" style="margin-top: 30vh;">
        <form class="mx-auto flex flex-col grid card w-96 p-10" method="post">
            <div class="text-center text-5xl font-medium mb-7">
                Login
            </div>
            <label class="block text-gray-500 text-xl font-bold mb-0 pr-4" for="inline-full-name">
                Username
            </label>
            <div class="mb-5">
                <input name="username" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="NIM / NIP / Email">
            </div>
            <label class="block text-gray-500 text-xl font-bold mb-0 pr-4" for="inline-password">
                Password
            </label>
            <div class="mb-5">
                <input name="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="password">
            </div>
            <div>
                <?php if (isset($error)) echo $error ?>
            </div>
            <div class="justify-self-end">
                <button name="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>

</html>