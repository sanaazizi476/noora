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
       

          <!-- Page Header End -->
          <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">فرم هدایت تحصلیی</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item"><a href="#">صفحه ها</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">فرم هدایت تحصلیی</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <form action="form.php" method="post">
            <fieldset>
              <legend>اطلاعات شخصی</legend>
              <label for="name">نام:</label>
              <input type="text" id="name" name="name" required>
              <label for="email">ایمیل:</label>
              <input type="email" id="email" name="email" required>
            </fieldset>
            <button type="submit">ارسال</button>
          </form>