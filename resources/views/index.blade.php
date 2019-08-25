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
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />


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
<!-- Header section end -->
<div class="main-nav">
    <h2 class="pagetitle" style="padding-top: 16px; padding-bottom: 10px;text-align: center">أين انت من العالم</h2>

</div>


<!-- Hero section -->
<!-- Hero section -->
<section class="hero-section">

    <!-- <div class="hero-slider owl-carousel">
        <div class="hero-slider-item set-bg" data-setbg="img/worldmap.gif">
            <div class="hs-content">
                <div class="container">

                </div>
            </div>
        </div>
    </div> -->
    <div id='map'></div>
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
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/main.js"></script>


<!-- map  -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSWw1UPtURwVAL-UxE7pj1GSFfL64j7Os&callback=initMap">
</script>
<script>
    function initMap() {
        var mapOptions = {
            center: new google.maps.LatLng(0, 0),
            zoom: Math.ceil(Math.log2($(window).width())) - 8,
        };

        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        setTimeout(function () {
            map.setCenter(new google.maps.LatLng(26.705753, 29.924526));
            map.setZoom(6);



            var participants = {!! json_encode($participants->toArray()) !!};
            var len=participants.length;
            var supporters = {!! json_encode($supporters->toArray()) !!};
            var len=supporters.length;
            console.log(supporters);
            console.log(participants);
            for (var i = 0; i < len; i++)
                addMarker({lat:participants[i].latitude,lng:participants[i].longitude},
                    participants[i].name,participants[i].sceond,participants[i].state, participants[i].city, map);
            for (var i = 0; i < len; i++)
                addMarker2({lat:supporters[i].latitude,lng:supporters[i].longitude},
                    supporters[i].name,supporters[i].state, supporters[i].city, supporters[i].type, map);


        }, 6000);

    }

    function addMarker2(myLatLng, userName, gov, city, type, map) {
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: userName + '\n' + city + '/' + gov + '\n' + type,
            zIndex: 3
        });
    }
    function addMarker(myLatLng, userName,engName, gov, city, map) {
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: userName + '\n' +engName+ '\n' + city + '/' + gov ,
            zIndex: 3
        });
    }
</script>
</body>

</html>