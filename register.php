<?php
   include 'db/db_login.php';

   if(isset($_POST['submit'])){

      $nama = mysqli_real_escape_string($con, $_POST['nama']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_real_escape_string($con, md5($_POST['password']));
      $cpassword = mysqli_real_escape_string($con, md5($_POST['cpassword']));
      $image = $_FILES['image']['name'];
      $image_size = $_FILES['image']['size'];
      $image_tmp_name = $_FILES['image']['tmp_name'];
      $image_folder = 'uploaded_img/'.$image;

      $select = mysqli_query($con, "SELECT * FROM user WHERE email = '$email' AND password = '$password'") or die('query failed');

      if(mysqli_num_rows($select) > 0){
         $message[] = 'user already exist'; 
      }else{
         if($password != $cpassword){
            $message[] = 'confirm password not matched!';
         }elseif($image_size > 2000000){
            $message[] = 'image size is too large!';
         }else{
            $insert = mysqli_query($con, "INSERT INTO user (nama, email, password, image) VALUES('$nama', '$email', '$password', '$image')") or die('query failed');

            if($insert){
               move_uploaded_file($image_tmp_name, $image_folder);
               $message[] = 'registered successfully!';
               header('location:login.php');
            }else{
               $message[] = 'registeration failed!';
            }
         }
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
        <title>Register</title>
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h3 class="card-title text-center mb-3 fw-bold">REGISTER</h3>
                            <?php
                                if(isset($message)){
                                    foreach($message as $message){
                                    echo '<div class="message">'.$message.'</div>';
                                    }
                                }
                            ?>
                            <form method="POST" enctype='multipart/form-data'>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                    <label for="name" class="opacity-75">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    <label for="email" class="opacity-75">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    <label for="password" class="opacity-75">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                                    <label for="cpassword" class="opacity-75">Confirm Password</label>
                                </div>
                                <div class="box">
                                    <input type="file" class="form-control" name="image" placeholder="Image" accept="image/jpg, image/jpeg, image/png"> 
                                    <label for="image"></label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login fw-normal" name="submit" type="submit" value="Register">Register</button>
                                </div>
                                <div class="register mt-2">
                                    Already have an Account? <a href="login.php">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>