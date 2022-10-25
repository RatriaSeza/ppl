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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <style>
            body {
                background: #f8f9fa;
            }
        </style>
        <title>Login</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h3 class="card-title text-center mb-5 fw-bold">LOGIN</h3>
                            <form method="POST" >
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email">
                                    <label for="floatingInput" class="opacity-75">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                    <label for="floatingPassword" class="opacity-75">Password</label>
                                </div>
                                <div class="error p-2">
                                    <?php if (isset($error)) echo $error ?>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login fw-normal" name="submit" type="submit">Login</button>
                                </div>
                                <div class="register mt-3">
                                    Don't have an Account? <a href="register.php">Register Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>