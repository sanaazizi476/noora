<?php

session_start();


$_SESSION['page_name']="help"
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
    <link href="img/favicon.ic" rel="icon">

   
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
                <span class="sr-only">........بارگیری</span>
            </div>
        </div>
        <!-- Spinner End -->


<?php


include 'includes/main_menu.php'; 
?>
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>هدایت تحصیلی نورا</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link ">خانه</a>
                    <a href="about.php" class="nav-item nav-link">درباره ما</a>
                    <a href="but_noora.php" class="nav-item nav-link ">و  اما  نورا</a>
                    <a href="help.php" class="nav-item nav-link active">راهنما</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">رشته ها</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="nazare.php" class="dropdown-item"> نظری</a>
                            <a href="team.php" class="dropdown-item">فنی حرفه ای</a>
                            <a href="call-to-action.php" class="dropdown-item">کار و دانش</a>
                            <a href="appointment.php" class="dropdown-item">کتاب های برتر</a>
                            <a href="404.php" class="dropdown-item">404 Error</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">تماس با ما</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">ثبت نام<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">درباره ما</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item"><a href="#">صفحه ها</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">درباره ما</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->



        


        \
