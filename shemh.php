<?php

session_start();


$_SESSION['page_name']
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>هدایت تحصیلی نورا</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

   
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">....بارگیری</span>
            </div>
        </div>
        <!-- Spinner End -->



        <!-- Navbar Start 7-->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>هدایت تحصیلی نورا</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link">خانه</a>
                    <a href="nazare.php" class="nav-item nav-link ">اشنایی با رشته های نظری</a>
                    <a href="math.php" class="nav-item nav-link active">ریاضی فیزیک</a>
                    <a href="humanities.php" class="nav-item nav-link">علوم انسانی</a>
                    <a href="science.php" class="nav-item nav-link">علوم تجربی</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">ثبت نام<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
<!-- Page Header End -->
<div class="container-xxl py-5 page-header position-relative mb-5">
    <div class="container py-5">
        <h1 class="display-2 text-white animated slideInDown mb-4">مهندسی شیمی</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item"><a href="#">صفحه ها</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">مهندسی شیمی</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


       
           
......

<div style="background-image: url('https://www.gfxdownload.ir/uploads/posts/2023-06/colored-background5.jpg')">


<!-- video start-->
<div style="text-align:center"> 

<button onclick="playPause()">اجرا</button> 
<button onclick="playPause()">متوقف</button> 
<button onclick="makeBig()">بزرگ کردن</button>
<button onclick="makeSmall()">کوچیک کردن</button>
<button onclick="makeNormal()">سایز عادی</button>
<br> <h1>مهندسی شیمی،</h1></br>
<video id="video1" width="420">
<source src="video/moive5.mp4" type="video/mp4">
<source src="video/moive5.mp4" type="video/ogg">

</video>
</div> 

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
if (myVideo.paused) 
myVideo.play(); 
else 
myVideo.pause(); 
} 

function makeBig() { 
myVideo.width = 560; 
} 

function makeSmall() { 
myVideo.width = 320; 
} 

function makeNormal() { 
myVideo.width = 420; 
} 
</script> 



<!-- video End -->


          
    
        <a class="btn btn-primary py-3 px-5" href="math.php">برگشتن<i class="fa fa-arrow-right ms-2"></i></a> 
        <!-- Call To Action End -->

 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4"> </h3>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i></p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4"></h3>
                <a class="btn btn-link text-white-50" href=""></a>
                <a class="btn btn-link text-white-50" href=""></a>
                <a class="btn btn-link text-white-50" href=""></a>
                <a class="btn btn-link text-white-50" href=""></a>
                <a class="btn btn-link text-white-50" href=""></a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4"></h3>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-1.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-2.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-3.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-4.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-5.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4"></h3>
                <p>
                    
                </p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">ثبت نام</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#"></a>, 
                    Designed By <a class="border-bottom" href=>sana azizi</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>
                        <a href=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->




<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>!> 

<!--  استفاده از کد های سایت با اجازه طراح فقظ مجاز است ظراح: ثنا عزیزی -->