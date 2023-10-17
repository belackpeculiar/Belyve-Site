<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['repeat_password']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM registration WHERE email = '$email' && password ='$pass' ";

    $result = mysqli_query($connect, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exit';
    } else {
        if ($pass != $cpass) {
            $error[] = 'Password do not match';
        } else {
            $insert = "INSERT INTO registration(name, email, password, user_type) VALUE('$name','$email','$pass','$user_type')";
            mysqli_query($connect, $insert);
            header("location:login_form.php");
        }
    }
};
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>


<body style="background-color:#fcf1f3">
    <div class="container bg-white">
        <div class="form-container">
            <!--navbar starts-->

            <nav class="navbar navbar-expand-lg navbar-light sticky-top px-lg-5 py-lg-0 container position-fixed bg-white">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <h1 class="m-0 text-secondary"></i><i class="ri-heart-pulse-fill"></i>Weight Loss</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span cla ss="navbar-toggler-icon"></span>
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

            <div class="container p-5"> </div>
            <div class="container h-100 d-flex flex-column justify-content-center p-5">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <form action="" method="post">
                                    <div class="row g-3 p-5">
                                        <h1 class="col-sm-12 text-center">Register Now</h1>
                                        <?php
                                        if (isset($error)) {
                                            foreach ($error as $error) {
                                                echo '<span class="form_error"> ' . $error . '</span>';
                                            };
                                        };
                                        ?>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" name="name" class="form-control border-0" placeholder="Input your name">
                                                <label for="">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" name="email" class="form-control border-0" placeholder="Input your email">
                                                <label for="">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating">
                                                <input type="password" name="password" class="form-control border-0" placeholder="Input your password">
                                                <label for="">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="repeat_password" name="repeat_password" class="form-control border-0" placeholder="Repeat your password">
                                                <label for="">Repeat_password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <select name="user_type" class="col-lg-12 form-control border-0">
                                                <option value="user">User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <input type="submit" name="submit" value="Register Now" class="btn btn-primary w-100 py-3" onclick="document.write(error)">
                                        </div>
                                        <p class="text-center">Already have an account? <a href="login_form.php" class="a"> Login Now</a></p>
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