<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog page</title>
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
                    <h1 class="m-0 text-secondary"><i class="ri-heart-pulse-fill"></i>Weight Loss</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link m-2 nav-item " href="index.php">Home</a>
                        <a class="nav-link m-2 nav-item " href="site.php">About Us</a>
                        <a class="nav-link m-2 nav-item" href="services.php">Services</a>
                        <a class="nav-link m-2 nav-item active " href="blog.php">Blog</a>
                    </div>
                    <a href="register.php" class="btn btn-secondary m-2 rounded-pill px-3 d-none d-lg-block">Register <i class="ri-arrow-right-fill"></i></a>
                    <a href="login_form.php" class="btn btn-secondary m-2 rounded-pill px-3 d-none d-lg-block">Login <i class="ri-arrow-right-fill"></i></a>
                </div>
        </nav>
        <!-- end of navbar-->
        <div class="container bg-white p-3"></div>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/pic1.jpg" alt="" class="d-block" style="width:100%; height:500px">
                    <div class="carousel-caption">
                        <h1 style="font-style:italic; color:red; font-size:50px">You are what you eat</h1>
                        <h4 class="text-capitalize">nutrition for body maintenance</h4>
                        <p class="text-capitalize"> Feeling good about yourself is so much more important than striving for a certain body type — especially when that body type simply isn't obtainable.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/Pregnancy1.jpg" alt="" class="d-block" style="width:100%; height:500px">
                    <div class="carousel-caption">
                        <h3>Weight Maintenance</h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/cancer.jpg" alt="" class="d-block" style="width:100%;  height:500px">
                    <div class="carousel-caption">
                        <h3>Meal Plan</h3>
                        <p></p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="container-fluid p-3">
        <div class="container-sm">
            <div class="row">
                <div class="col-sm-4 p-3">
                    <div><a href="https://www.nih.gov" class=" nav-link">
                            <img src="images/NIH.jpg" alt="" class="rounded img-fluid">
                            <p></p>
                            <img src="images/nih.png" alt="" class="rounded-pill img-fluid" style="width: 25px;">https://www.nih.gov
                            <h4>National Institutes Of Health(NIH) </h4>
                        </a></div>
                </div>
                <div class="col-sm-4 p-3">
                    <div><a href="https://www.eatright.org" class="nav-link">
                            <img src="images/and.jpg" alt="" class="rounded img-fluid">
                            <p></p>
                            <img src="images/loga.png" alt="" class="rounded-pill img-fluid" style="width: 25px;">https://www.eatright.org
                            <h4>Academy Of Nutrition And Dietetics(AND)</h4>
                        </a></div>
                </div>
                <div class="col-sm-4 p-3">
                    <div>
                        <a href="https://www.who.int" class=" nav-link">
                            <img src="images/who.png" alt="" class="rounded img-fluid">
                            <p></p>
                            <img src="images/who.jpg" alt="" class="rounded-pill img-fluid" style="width: 25px;">https://www.who.int
                            <h4>World Health Organisation(WHO)</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-4 p-3">
                    <div>
                        <a href="https://www.cdc.gov/index.htm" class=" nav-link">
                            <img src="images/cdc.png" alt="" class="rounded img-fluid">
                            <p></p>
                            <img src="images/cd.png" alt="" class="rounded-pill img-fluid" style="width: 25px;">https://www.cdc.gov/index.htm
                            <h4>Centers Of Disease Control And Pervention(CDC) </h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div>
                        <a href="https://www.usda.gov" class=" nav-link">
                            <img src="images/nih1.jpg" alt="" class="rounded img-fluid">
                            <p></p>
                            <img src="images/who.jpg" alt="" class="rounded-pill img-fluid" style="width: 25px;">https://www.usda.gov
                            <h4>U.S. Department Of Agriculture(USDA) </h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div>
                        <a href="https://www.mayoclinic.org" class=" nav-link">
                            <img src="images/mc.jpg" alt="" class="rounded img-fluid">
                            <p></p>
                            <img src="images/mc.png" alt="" class="rounded-pill img-fluid" style="width: 25px;">https://www.mayoclinic.org
                            <h4>Mayo Clinic </h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div>
                        <a href="https://www.efsa.europa.eu/en" class=" nav-link">
                            <img src="images/efs.png" alt="" class="rounded img-fluid">
                            <p></p>
                            <img src="images/efs1.png" alt="" class="rounded-pill img-fluid" style="width: 25px;">https://www.efsa.europa.eu/en
                            <h4>Europe Food Safety Authority(EFSA) </h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div>
                        <a href="https://www.nutrition.gov" class=" nav-link">
                            <img src="images/nu.jpg" alt="" class="rounded img-fluid">
                            <p></p>
                            <img src="images/nut.jpg" alt="" class="rounded-pill img-fluid" style="width: 25px;">https://www.nutrition.gov
                            <h4>Nutrition.gov </h4>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div>
                        <a href="https://www.hsph.harvard.edu" class="nav-link">
                            <img src="images/hth.png" alt="" class="rounded img-fluid">
                            <p></p>
                            <img src="images/ht.png" alt="" class="rounded-pill img-fluid" style="width: 25px;">https://www.hsph.harvard.edu
                            <h4>Harvard T.H. Chan School Of Public Health </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
     </div>


        <div class="container">
            <h1 >Did you grow up in a family obsessed with weight and dieting?</h1>
            <p>If generational diet trauma impacts your relationship to food and body image today, you're not alone. I'm Yvette, Registered Dietitian offering 1:1 nutrition therapy and body image coaching that takes into account your lived experience with lifelong diet cycles, eating disorders, and body image concerns.</p>
        </div>

        <!-- Appointment Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Make Appointment</h1>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                                <label for="gname"> Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                                <label for="gmail"> Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                                <label for="cname">Age</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                                <label for="cage">Sex</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="images/pic.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->

        <!-- testimony starts-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Clients Say!</h1>
                    <p></p>
                </div>

            </div>
        </div>

        <!-- testimony ends-->

        <!-- footer starts-->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="ri-map-pin-line"></i>Douala Cameroon</p>
                        <p class="mb-2"><i class="ri-phone-line"></i>+237 674505677</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light rounded-pill" href=""><i class="ri-whatsapp-line"></i></a>
                            <a class="btn btn-outline-light rounded-pill" href=""><i class="ri-facebook-circle-fill"></i></a>
                            <a class="btn btn-outline-light rounded-pill" href=""><i class="ri-youtube-line"></i></a>
                            <a class="btn btn-outline-light rounded-pill" href=""><i class="ri-instagram-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer ends-->

    </div>
</body>

</html>





