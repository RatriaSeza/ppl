<?php
    include('db/db_login.php');
    session_start();
    $email = $_SESSION['email'];

    $old_pass = mysqli_real_escape_string($con, md5($_POST['old_pass']));
    $new_pass = mysqli_real_escape_string($con, md5($_POST['new_pass']));
    $confirm_pass = mysqli_real_escape_string($con, md5($_POST['confirm_pass']));

    if(!empty($new_pass) || !empty($confirm_pass)){
        if($new_pass != $old_pass){
            $message[] = 'old password not matched!';
        }elseif($new_pass != $confirm_pass){
            $message[] = 'confirm password not matched!';
        }else{
            mysqli_query($con, "UPDATE user SET password = '$confirm_pass' WHERE email = '$email'") or die('query failed');
            $message[] = 'password updated successfully!';
        }
    }

    $update_image = $_FILES['update_image']['name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = 'uploaded_image/'.$update_image;

    if(!empty($update_image)){
        if($update_image_size > 2000000){
            $message[] = 'image is too large';
        }else{
            $image_update_query = mysqli_query($con, "UPDATE user SET image = '$update_image' WHERE email = '$email'") or die('query failed');
        if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
        }
        $message[] = 'image updated succssfully!';
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
        <title>Update Profile</title>
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h3 class="card-title text-center mb-3 fw-bold">UPDATE PROFIL</h3>
                            <?php
                                $select = mysqli_query($con, "SELECT * FROM user WHERE email = '$email'") or die('query failed');
                                if(mysqli_num_rows($select) > 0){
                                    $fetch = mysqli_fetch_assoc($select);
                                }
                            ?>
                            <form method="POST" enctype='multipart/form-data' name="form" class="grid gap-7">
                                <?php
                                if(isset($message)){
                                    foreach($message as $message){
                                    echo '<div class="message">'.$message.'</div>';
                                    }
                                }
                                ?>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="old_pass" placeholder="Old Password" required>
                                    <label for="password" class="opacity-75">Old Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="new_pass" placeholder="Confirm New Password" required>
                                    <label for="cpassword" class="opacity-75">New Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="confirm_pass" placeholder="Confirm New Password" required>
                                    <label for="cpassword" class="opacity-75">Confirm New Password</label>
                                </div>
                                <div class="box mb-3">
                                    <input type="file" class="form-control" name="update_image" placeholder="New Profile Image" accept="image/jpg, image/jpeg, image/png"> 
                                    <label for="image"></label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login fw-normal" name="submit" type="submit" value="update profile">Update Profile</button>
                                </div>
                                <div class="d-grid mt-3">
                                    <button class="btn btn-dark btn-login fw-normal"> <a id="edit_profil" href="edit_profil.php"></a> Go Back</button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>