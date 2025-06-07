
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>هدایت تحصیلی نورا</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a  href="index.php" class="nav-item nav-link <?php if($_SESSION['page_name'] == 'index') { ?> active <?php } ?>">خانه</a>
                    <a  href="about.php" class="nav-item nav-link <?php if($_SESSION['page_name'] == 'about') { ?> active <?php } ?>">درباره ما</a>
                    <a  href="but_noora.php" class="nav-item nav-link<?php if($_SESSION['page_name'] == 'but_noora') { ?> active <?php } ?>">و  اما  نورا</a>
                    <a  href="help.php" class="nav-item nav-link <?php if($_SESSION['page_name'] == 'help') { ?> active <?php } ?>">راهنما</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">رشته ها</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="nazare.php" class="nav-item nav-link <?php if($_SESSION['page_name'] == 'nazare') { ?> active <?php } ?>"> نظری</a>
                            <a href="team.php" class="nav-item nav-link <?php if($_SESSION['page_name'] == 'team') { ?> active <?php } ?>">فنی حرفه ای</a>
                            <a href="work.php" class="nav-item nav-link <?php if($_SESSION['page_name'] == 'work') { ?> active <?php } ?>">کار و دانش</a>
                            <a href="book.php" class="nav-item nav-link <?php if($_SESSION['page_name'] == 'book') { ?> active <?php } ?>">تست های خود شناسی</a>
                            <a href="404.php" class="nav-item nav-link <?php if($_SESSION['page_name'] == '404') { ?> active <?php } ?>">404 Error</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link <?php if($_SESSION['page_name'] == 'contact') { ?> active <?php } ?>">تماس با ما</a>
                </div>
                <a href="contact.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">ثبت نام<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->