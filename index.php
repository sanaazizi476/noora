<?php

session_start();


$_SESSION['page_name']="index"

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
 
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown mb-4">به نام خداوند لوح و  قلم
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(13, 13, 13, 0.2);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown mb-4">هدایت تحصیلی نورا<h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1>درباره سایت هدایت تحصیلی نورا</h1>
                      <p>این سایت برای آشنایی دانش اموزان با روند هدایت تحصیلی و انتخاب رشته ایجاد شده است 
                        دانش اموزان می توانند با کمک این سایت و اطلاعات لازم  برای  هدایت تحصیلی و اتخاب رشته درست کسب کنند</p>
                        <a class="btn btn-primary py-3 px-5" href="about.php">درباره سایت<i class="fa fa-arrow-right ms-2"></i></a>                  
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

         <!-- Call To Action Start -->
         <div class="container-xxl py-5">
            <div class="container"> 
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/classes_10.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">هدایت تحصیلی چیست؟</h1>
                                <p>هدایت تحصیلی چیست؟
                                    دانش آموزان پایه دهم، برای ورود به دوره متوسطه دوم ملزم به انتخاب رشته هستند. انتخاب رشته برای ورود به مقطع بالاتر طی فرآیند برنامه ریزی شده‌ای از سوی آموزش و پرورش صورت می گیرد. این فرآیند شامل بررسی معیارهایی است که هریک از این معیارها دارای امتیاز مختص به خود می باشد 
                                    
                                    در نهایت بر اساس امتیازهای کسب شده در هریک از این معیارها امتیاز نهایی دانش آموز در هریک از رشته های دوره متوسطه دوم محاسبه و ملاک انتخاب رشته مجاز قرار می گیرد.
                                    
                                    در واقع آموزش و پرورش برای راهنمایی دانش آموزان در انتخاب رشته، با برگزاری آزمون ها و طرح پرسش نامه هایی، اولویت‌بندی رشته ها برای هر فرد را سامان‌دهی و استانداردسازی می کند. و در نهایت مدارس دوره دوم متوسطه متناسب با اولویت های تعیین شده در برگه هدایت تحصیلی دانش آموزان را ثبت نام می کنند.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->


        

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1>اهداف هدایت تحصیلی</h1>
                        <p>هدف اصلی از انجام هدایت تحصیلی شناسایی استعدادها، توانمندی ها، علایق و در نهایت انتخاب آگاهانه و صحیح رشته تحصیلی برای دانش آموزان است. در واقع این مرحله، اولین و -در جایگاه خود- مهمترین گام در تعیین سرنوشت شغلی دانش آموز به حساب می آید. بنابراین انتخاب آگاهانه رشته تحصیلی می تواند مهم ترین هدف هدایت تحصیلی بر شمرده شود.

                            از سوی دیگر این فرآیند باعث توزیع عادلانه منابع و امکانات آموزشی و تحصیلی و همچنین بهبود روند تحصیل دانش آموزان می شود. این فرآیند مهم در هدایت و توزیع متناسب دانش آموزان به شاخه ها و رشته های گوناگون در آینده منجر به تقسیم موقعیت های مختلف شغلی و تامین نیروی انسانی مورد نیاز در بخش های مختلف جامعه می گردد.
                            
                            در واقع هدایت دانش آموزان به رشته های تحصیلی به صورت متناسب و بر اساس اصول فردی، جغرافیایی و اجتماعی از تمرکز افراد بر تعدادی شغل خاص جلوگیری می کند و به توزیع بازار کار حرفه ای در بزرگسالی منتهی می گردد.</p>
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
                                <img class="position-absolute w-100 h-100 rounded" src="img/classes_10.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">هدایت تحصیلی در  اصل چیست؟</h1>
                                <p>در ادامه با یکی از مشاوران تحصیلی خانم سید اشرف نوری 
                                      با هدایت تحصیلی و اهداف ان بیشتر اشنا میشم همراه ما باشید 
                                  
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->








        ......

        <div style="background-image: url('https://static.cdn.asset.aparat.cloud/avt/56784915-6678-l__8471.jpg?width=900&quality=90&secret=e6SO6BmbinUdJT9knZQXqw')">
     
        
        <!-- video start-->
<div style="text-align:center"> 
   
    <button onclick="playPause()">اجرا</button> 
    <button onclick="playPause()">متوقف</button> 
    <button onclick="makeBig()">بزرگ کردن</button>
    <button onclick="makeSmall()">کوچیک کردن</button>
    <button onclick="makeNormal()">سایز عادی</button>
    <br> <h1>اشنایی با هدایت تحصیلی</h1></br>
    <video id="video1" width="420">
      <source src="video/moive2.mp4" type="video/mp4">
      <source src="video/moive2.mp4" type="video/ogg">
      
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

  <div style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfWgoPr63JJBaKFWWfIVgM-L2-VVGId50GNcXrmI20BVR4HXAeI1cJLVk3XgE-uEavI6A&usqp=CAU')">
     


 <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1>جمع اوری اعطلاعات شخص برای ارسال به مشاور</h1>
                      <p>شما می تونید با پرکردن فرم زیر با مشاور ما در ارتباط باشید</p>
                        <a class="btn btn-primary py-3 px-5" href="https://forms.gle/cU6kVtEztBWds3Q27">ورود به نظر سنجی<i class="fa fa-arrow-right ms-2"></i></a>                  
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
                        <h1>در اخر شما با دادن تست های مختلف 
                            می توانید با هدایت تحصیلی و انتخاب رشته خوددر اینده اشنا شوید ما در بخشی از سایت تست های خود شناسی را برای شما فراهم کردیم که با مراجع می توانید از این قسمت بهره مند شوید
                        </h1>

                        <a class="btn btn-primary py-3 px-5" href==test.php">ورود به صفحه نظر و تست ها ی<i class="fa fa-arrow-right ms-2"></i></a>                  
                       
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