<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
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
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link m-2 nav-item active " href="index.php">Home</a>
                        <a class="nav-link m-2 nav-item " href="site.php">About Us</a>
                        <a class="nav-link m-2 nav-item" href="services.php">Services</a>
                        <a class="nav-link m-2 nav-item" href="blog.php">Blog</a>
                    </div>
                    <a href="register.php" class=" m-2 btn btn-secondary rounded-pill px-3 d-none d-lg-block">Register <i class="ri-arrow-right-fill"></i></a>
                    <a href="login_form.php" class=" m-2 btn btn-secondary rounded-pill px-3 d-none d-lg-block">Login <i class="ri-arrow-right-fill"></i></a>
                </div>
        </nav>
        <!-- end of navbar-->
        <div class="container-fliud h-100 w-100 p-5 mb-5"></div>
        <div class="container h-100 d-flex flex-column justify-content-center p-5">
            <div class="bg-light rounded">
                <div class="row g-0">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                            <h1 class="mb-4 text-center">Login Form</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="gname" placeholder="Email">
                                            <label for="gname"> Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control border-0" id="gmail" placeholder="Paasword">
                                            <label for="gmail"> Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="cname" placeholder="Age">
                                            <label for="cade">Age</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="cage" placeholder="Sex">
                                            <label for="csex">Sex</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Login Now</button>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-floating text-center">
                                            <p>Don't have an account? <a href="register.php" class="a">Regiter Now</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fliud h-100 w-100 p-5 mb-5"></div>
    </div>

</body>

</html>