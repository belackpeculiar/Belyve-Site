<?php 
   
   require 'connect.php';
  
   if(isset($_POST[' submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM registration WHERE ( email = '$email' && password = '$password' ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows ($result) > 0){
        $error[] = 'user already exit';
    }
    else{
        if($password != $repeat_password){
            $error[] = 'Password do not match';
        }
        else{
            $insert = "INSERT INTO registration(name, email, password, user_type) VALUE('$name','$email','$password','$user_type')";
            mysqli_query($conn, $insert);
            header("location:login_form.php");
        }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <?php
      if($name_error != null){
        ?> <style>.name-error{display: block}</style> <?php
      }
      if($email_error != null){
        ?> <style>.email-error{display: block}</style> <?php
      }
      if($repassword_error != null){
        ?> <style>.repassword-error{display: block}</style> <?php
      }
      if($password_error != null){
        ?> <style>.password-error{display: block}</style> <?php
      }
      if($success != null){
        ?> <style>.success{display: block}</style> <?php
      }
    ?>
</head>

<body style="background-color:#fcf1f3">
    <div class="container bg-white">
        <!--navbar starts-->

        <nav class="navbar navbar-expand-lg navbar-light sticky-top px-lg-5 py-lg-0 container position-fixed bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h1 class="m-0 text-secondary"></i><i class="ri-heart-pulse-fill"></i>Weight Loss</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span cla  ss="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link m-2 nav-item active " href="index.php">Home</a>
                        <a class="nav-link m-2 nav-item " href="site.php">About Us</a>
                        <a class="nav-link m-2 nav-item" href="services.php">Services</a>
                        <a class="nav-link m-2 nav-item" href="blog.php">Blog</a>
                    </div>
                </div>
                <div class="d-flex">
                    <a href="register.php" class="m-2 btn btn-secondary rounded-pill px-3 d-none d-lg-block">Register <i class="ri-arrow-right-fill"></i></a>
                    <a href="login_form.php" class="m-2 btn btn-secondary rounded-pill px-3 d-none d-lg-block">Login <i class="ri-arrow-right-fill"></i></a>
                </div>
        </nav>
        <!-- end of navbar-->
        <div class="container p-5"> </div>
        <div class="container h-100 d-flex flex-column justify-content-center p-5">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4 text-center">Registration Form</h1>
                            <form action="" method="post">
                                <?php 
                                   if(isset($error)){
                                    foreach($error as $error){
                                        echo '<span class="form_error">'.$error. '</span>';
                                    };
                                   };
                                ?>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" placeholder=" Name" name="name" value = "<?php echo $name ?>">
                                            <label for="gname"> Name</label>
                                            <p class=" name-error">
                                               <?php echo $name_error ?>
                                            </p>  <!-- error message -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" placeholder=" Email" name="email" value = "<?php echo $email ?>">
                                            <label for="gmail"> Email</label>
                                            <p class=" email-error">
                                               <?php echo $email_error ?>
                                            </p>  <!-- error message -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control border-0" placeholder="" name="password" value = "<?php echo $password ?>">
                                            <label for="pass">Password</label>
                                            <p class=" password-error">
                                               <?php echo $password_error ?>
                                            </p>  <!-- error message -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control border-0" placeholder="" name="repeat_password" value = "<?php echo $repassword ?>">
                                            <label for="cpass">Repeat Password</label>
                                            <p class=" repassword-error">
                                               <?php echo $repassword_error ?>
                                            </p>  <!-- error message -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select name="user_type" class="form-select">
                                                <p>select user</p>
                                                <option value="user">User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input name="submit" value="Register Now" class="btn btn-primary w-100 py-3" type="submit" onclick="document.write(error)"></input>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating text-center">
                                            <p>Already have an account? <a href="login_form.php" class="a">Login Now</a></p>
                                            <p class="success">
                                                <?php echo $success ?>
                                            </p>  <!-- success message -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-5"></div>
    </div>
</body>

</html>