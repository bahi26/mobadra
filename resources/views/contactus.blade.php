<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>مبادرة</title>
    <meta charset="UTF-8">
    <meta name="description" content="Glamour Fashion HTML Template">
    <meta name="keywords" content="glamour, fashion, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/logo.jpg" rel="shortcut icon" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />


    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
            href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/signup.css" rel="stylesheet" media="all">
    <link href="css/contactus.css" rel="stylesheet" media="all">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- for fontowesome inFire fox -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" media="all"
          rel="stylesheet" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<!-- <div id="preloder">
    <div class="loader"></div>
</div> -->

<div id="overlay" onclick="closeNav()"></div>
<div class="top-header">
    <div class="container containerCustom">
        <div class="row">
            <div class="col-md-6 col-sm-6 social-icons-Contianer">
                <div class="social-icons">
                    <ul>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>

                    </ul>
                    <div class="clearfix"></div>
                </div> <!-- /.social-icons -->
            </div> <!-- /.col-md-6 -->
            <div class="col-md-6 col-sm-6 SignIn">
                <div class="top-header-left">
                    @guest
                    <a href="/login"><i class="fa fa-sign-in"></i> تسجيل الدخول </a>
                    @if (Route::has('register'))
                        <a href="/register"><i class="fa fa fa-user" aria-hidden="true"></i> تسجيل جديد </a>
                    @endif

                    @else
                        <div>
                            <a id="navbarDropdown"  href="#">
                                {{ Auth::user()->email }} <span class="caret"></span>
                            </a>

                            <div >
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"> تسجيل الخروج </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        @endguest
                </div> <!-- /.top-header-left -->
            </div> <!-- /.col-md-6 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.top-header -->

<!-- Header section -->
<header class="header-section droid-arabic-naskh" style="padding: 0px">
    <div class="row Logocontainer" style="margin:30px auto">
        <ul class="main-menu-left site-menu-style col-md-5">
            <li><a href="/contactus">تواصل معنا</a></li>
            <li><a href="/joinus">إنضم إلينا</a></li>
            <li><a href="/questions">الأسئلة الشائعة</a></li>

            <li><a href="/activities">الأنشطة والفعاليات</a></li>
        </ul>
        <a href="/" class="site-logo col-md-2">
            <img src="../img/logo.png" alt="">
        </a>
        <ul class="main-menu-right site-menu-style col-md-5">

            <li><a href="/projects">المشاريع</a></li>
            <li><a href="/stages">المراحل</a></li>
            <li><a href="/aboutus">عن المبادرة</a></li>

            <li><a href="/index">الرئسية</a></li>

        </ul>
    </div>
    <div id="mySidenav" class="sidenav">
        <div class="logoSidebar">
            <img src="img/logo.png" />
        </div>
        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
        <a href="/index" class="sideLinks">الرئسية</a>
        <a href="/aboutus" class="sideLinks">عن المبادرة</a>
        <a href="/stages" class="sideLinks">المراحل </a>
        <a href="/projects" class="sideLinks">المشاريع</a>
        <a href="/activities" class="sideLinks">الأنشطة والفعاليات</a>
        <a href="/questions" class="sideLinks">الأسئلة الشائعة</a>
        <a href="/joinus" class="sideLinks">إنضم إلينا</a>
        <a href="/contactus" class="sideLinks">تواصل معنا</a>
    </div>


</header>
<div class="main-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-5">

            </div> <!-- /.col-md-12 -->
            <div class="col-md-6 col-sm-7 pages">
                <h2 class="pagetitle">تواصل معنا</h2>
                <div class="list-menu">
                    <ul>
                        <li><a class="active" href="/index">الرئيسية <span class="inActive">/</span></a></li>
                        <li><a class="inActive">تواصل معنا</a></li>
                    </ul>
                </div> <!-- /.list-menu -->
            </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.main-nav -->

<!-- Hero section -->
<section class="hero-section">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins row">

        <div class="col-md-9 col-sm-12 col-xl-9 Regcard inputDiv">
            <div class="card card-4 rightcard">
                <div class="card-body">
                    <h4 class="title"><i class="fa fa-user"></i> تواصل معنا </h4>
                    <hr>
                    <form method="POST" action="{{ route('contactus') }}">
                        @csrf
                        <div class="row row-space">
                            <div class="col-md-12 col-sm-12 col-xl-12 inputDiv">
                                <div class="input-group row">
                                    <label class="label col-md-3">الأسم <span>*</span>:
                                    </label>
                                    <input class="input--style-4 col-md-9 inputDiv" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xl-12 inputDiv">
                                <div class="input-group row ">
                                    <label class="label col-md-3">البريد الإلكتروني <span>*</span>:
                                    </label>
                                    <input class="input--style-4 col-md-9 inputDiv" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xl-12 inputDiv">
                                <div class="input-group row">
                                    <label class="label col-md-3">رقم الموبايل <span>*</span>:
                                    </label>
                                    <input class="input--style-4 col-md-9 inputDiv" type="text" name="phone">
                                    <label class="label col-md-3">&nbsp;
                                    </label>
                                    <span class="help-block">فضلاً أدخل رقم موبايل يكون يعمل على الواتساب</span>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xl-12 inputDiv">
                                <div class="input-group row">
                                    <label class="label col-md-3">المحافظة <span>*</span>:
                                    </label>
                                    <div class="rs-select2 js-select-simple select--no-search col-md-9 inputDiv"
                                         style="width:100%;padding: 0%">
                                        <select name="state">
                                            <option disabled="disabled" selected="selected">أختار المحافظة</option>
                                            <option value="القاهرة">القاهرة</option>
                                            <option value="الجيزة">الجيزة</option>
                                            <option value="الشرقية">الشرقية</option>
                                            <option value="الدقهلية">الدقهلية</option>
                                            <option value="البحيرة">البحيرة</option>
                                            <option value="المنيا">المنيا</option>
                                            <option value="القليوبية">القليوبية</option>
                                            <option value="الاسكندرية">الاسكندرية</option>
                                            <option value="الغربية">الغربية</option>
                                            <option value="سوهاج">سوهاج</option>
                                            <option value="أسيوط">أسيوط</option>
                                            <option value="المنوفية">المنوفية</option>
                                            <option value="الفيوم">الفيوم</option>
                                            <option value="قنا">قنا</option>
                                            <option value="بنى سويف">بنى سويف</option>
                                            <option value="كفرالشيخ">كفرالشيخ</option>
                                            <option value="أسوان">أسوان</option>
                                            <option value="دمياط">دمياط</option>
                                            <option value="الإسماعيلية">الإسماعيلية</option>
                                            <option value="الأقصر">الأقصر</option>
                                            <option value="بورسعيد">بورسعيد</option>
                                            <option value="السويس">السويس</option>
                                            <option value="مطروح">مطروح</option>
                                            <option value="شمال سيناء">شمال سيناء</option>
                                            <option value="البحرالأحمر">البحرالأحمر</option>
                                            <option value="الوادى الجديد">الوادى الجديد</option>
                                            <option value="جنوب سيناء">جنوب سيناء</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xl-12 inputDiv">
                                <div class=" input-group row">
                                    <label class="label col-md-3">المدينة <span>*</span>:
                                    </label>
                                    <input class="input--style-4 col-md-9 inputDiv" type="text" name="city">

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xl-12 inputDiv">
                                <div class="input-group row">
                                    <label class="label col-md-3">موضوع الرسالة <span>*</span>:
                                    </label>
                                    <input class="input--style-4 col-md-9 inputDiv" type="text" name="msgHeader">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xl-12 inputDiv">
                                <div class="input-group row">
                                    <label class="label col-md-3">نوع الرسالة <span>*</span>:
                                    </label>
                                    <div class="rs-select2 js-select-simple select--no-search col-md-9 inputDiv"
                                         style="width:100%;padding: 0px">
                                        <select name="msgType">
                                            <option disabled="disabled" selected="selected">فضلا أختر
                                            </option>
                                            <option value="استفسار">استفسار</option>
                                            <option value="اقتراح">اقتراح</option>
                                            <option value="شكوى">شكوى</option>
                                            <option value="مشكلة">مشكلة</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xl-12 inputDiv">
                                <div class="input-group row">
                                    <label class="label col-md-3">الرسالة <span>*</span>:
                                    </label>
                                    <textarea class="input--style-4 col-md-9 inputDiv" name="msgbody" rows="4"
                                              cols="50"></textarea>

                                </div>
                            </div>
                        </div>

                        <div class="p-t-15 submitContaier">
                            <button class="btn btn--radius-2 btn--blue submit" type="submit">إرسال الرسالة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 col-xl-3 inputDiv cotactContainer">
            <div class="card card-4 cotactContainerinner">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 inputDiv">
                            <div class="box_group_items white_shadow">
                                <div class="bg_head">
                                    <h2>بيانات الاتصال</h2>
                                </div>
                                <div class="bg__body">
                                    <div class="data_info">
                                        <ul>
                                            <li><img src="https://attaa.sa/assets/frontend/images/mail.png" alt="">
                                                ex@example.com</li>

                                            <li><i class="fa fa-phone"></i>
                                                &nbsp; 01151475706 </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 inputDiv">
                            <div class="box_group_items white_shadow cnUs">
                                <div class="bg_head">
                                    <h2>تابعنا</h2>
                                </div>
                                <div class="bg__body">
                                    <ul class="contact__info">
                                        <li class="ci_twitter">
                                            <a href="" target="_blank"><i
                                                        class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;
                                                Twitter</a>
                                        </li>
                                        <li class="ci_face">
                                            <a href="" target="_blank"><i
                                                        class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;
                                                Facebook</a>
                                        </li>
                                        <li class="ci_insta">
                                            <a href="" target="_blank"><i
                                                        class="fa fa-instagram"></i>&nbsp;&nbsp;&nbsp;
                                                Instagram</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- Hero section end -->
<!-- Footer section -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 order-md-1 order-2 footer" style="margin: auto;">
                <div class="copyright">
                    جميع الحقوق محفوظة &copy; <span>|</span> مبادرة إكتشف إبدأ

                </div>

                <div class="linksFooter">
                    &nbsp;<a href="http://www.wachannel.com/privacy" target="_self">شروط الإستخدام</a>
                    <span>|</span>&nbsp;<a href="http://www.wachannel.com/terms" target="_self">سياسة الخصوصية</a>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- Footer section end -->


<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->


<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/main.js"></script>

<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/datepicker/moment.min.js"></script>
<script src="vendor/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/signup.js"></script>


</body>

</html>