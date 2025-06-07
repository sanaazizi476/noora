<?php

session_start();


$_SESSION['page_name']="about"
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

    <!-- Custo
     
    ed Bootstrap Stylesheet -->
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

         <!-- About Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1>درباره سایت هدایت تحصیلی نورا</h1>
                      <p>این سایت برای آشنایی دانش اموزان با روند هدایت تحصیلی و انتخاب رشته ایجاد شده است 
                        دانش اموزان می توانند با کمک این سایت و اطلاعات لازم  برای  هدایت تحصیلی و اتخاب رشته درست کسب کنند</p>               
                        <p class="mb-4"> </p>
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/classes_9.jpg" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/classes_7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About End -->

          <!-- About Start -->
          <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1>چرا ما اسم این پلتفرم را به نام هدایت تحصیلی نورا انتخاب کردیم</h1>
                        <p>شما میتواند با مراجعه به بخش و اما نورا درباره  سایت ما بیشتر بدونید</p>
                        <a class="btn btn-primary py-3 px-5" href="but_noora.php">واما نورا<i class="fa fa-arrow-right ms-2"></i></a>                  
                        <p class="mb-4"> </p>
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/classes - 10.jpg" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/classes_8.jpg" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/classes-11.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- About End -->



         <!-- Call To Action Start -->
         <div class="container-xxl py-5">
            <div class="container"> 
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/about-1.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">داستان ما چگونه به وجود امد ؟</h1>
                                <p>ایده در راه‌اندازی یک کسب و کار حرف اول را می‌زند پس باید خلاقانه باشد و اجرایی موفق را پشت سر بگذراد. راه‌اندازی یک پلتفرم هدایت تحصیلی آنلاین شاید چندان ایده نویی نباشد اما به جبران این موضوع، اجرای قدرتمند آن می‌تواند یک پوئن مثبت باشد. هدایت تحصیل و انتخاب رشته یکی از مشکلات دانش اموزان و دانشجویان است، وجود پلتفرم کامل در این زمینه می تواند کمک بزرگی به پیشرفت کشور  کمک به جامعه علمی کشور کند
                                    ما با راه اندازی پلتفرم هدایت تحصیلی نورا هدف این را داریم که در این زمینه گام بزرگی برداریم و  به اینده سازان  کشورمان کمک کنیم</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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












