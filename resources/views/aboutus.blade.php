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

	<!-- Wow Lib -->
	<link rel='stylesheet prefetch' href='http://daneden.github.io/animate.css/animate.min.css'>
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css'>
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
	<link href="css/aboutus.css" rel="stylesheet" media="all">
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
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-5">

				</div> <!-- /.col-md-12 -->
				<div class="col-md-6 col-sm-7 pages">
					<div class="list-menu">
						<h2 class="pagetitle">عن المبادرة</h2>
						<ul>
							<li><a class="active" href="index.html">الرئيسية <span class="inActive">/</span></a></li>
							<li><a class="inActive">عن المبادرة</a></li>
						</ul>
					</div> <!-- /.list-menu -->
				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.main-nav -->

	<!-- Hero section -->
	<section class="hero-section">

		<div class="news-left">
			<div class="container">
				<h3 class="title ">عن <span> المبادرة</span></h3>
				<p class="con-para wow zoomIn" data-wow-duration="2s" data-wow-delay="2s" style="text-align: left">
					هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
					الخارجي للنص أو شكل توضع
					الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى
					حد ما- للأحرف عوضاً
					عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد
					من برامح النشر
					المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال
					"lorem ipsum" في أي
					محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة
					من نص لوريم إيبسوم،
					أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
				</p>
				<div class="hide-mobile">
					<div class="col-md-6 col-news wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
						<div class="col-bottom two">
							<h4>الرؤية </h4>
							<p>المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا
								قمت بإدخال
								"lorem ipsum" في أي
								محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ
								جديدة ومختلفة
								من نص لوريم إيبسوم،
								أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>

						</div>
						<div class="col-news-top">
							<div class="date-in">
								<img class="img-responsive" src="img/vision.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-news-right wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
						<div class="col-news-top">
							<div class="date-in">
								<img class="img-responsive" src="img/aboutus.jpg" alt="">
							</div>
							<div class="col-bottom">
								<h4>عن المنحة</h4>

								<p>المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص،
									وإذا قمت بإدخال
									"lorem ipsum" في أي
									محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت
									نسخ جديدة ومختلفة
									من نص لوريم إيبسوم،
									أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها..</p>
							</div>
						</div>

					</div>
					<div class="col-md-6 col-news wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="1s">
						<div class="col-bottom two">
							<h4>مهمة </h4>
							<p> المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا
								قمت بإدخال
								"lorem ipsum" في أي
								محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ
								جديدة ومختلفة
								من نص لوريم إيبسوم،
								أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>

						</div>
						<div class="col-news-top">
							<div class="date-in">
								<img class="img-responsive" src="img/mission.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-news-right wow bounceInDown" data-wow-duration="1.5s"
						data-wow-delay="1.5s">
						<div class="col-news-top">
							<div class="date-in">
								<img class="img-responsive" src="img/man.jpg" alt="">
							</div>
							<div class="col-bottom">
								<h4>أي كلمة</h4>
								<p> المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص،
									وإذا قمت بإدخال
									"lorem ipsum" في أي
									محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت
									نسخ جديدة ومختلفة
									من نص لوريم إيبسوم،
									أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
								</p>
							</div>
						</div>

					</div>
				</div>
				<div class="show-mobile">
					<div class="col-md-6 col-news-right wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
						<div class="col-news-top">
							<div class="date-in">
								<img class="img-responsive" src="img/aboutus.jpg" alt="">
							</div>
							<div class="col-bottom">
								<h4>عن المبادرة</h4>
								<p>المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص،
									وإذا قمت بإدخال
									"lorem ipsum" في أي
									محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت
									نسخ جديدة ومختلفة
									من نص لوريم إيبسوم،
									أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
							</div>
						</div>

					</div>
					<div class="col-md-6 col-news wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">
						<div class="col-bottom two">
							<h4>الرؤية </h4>
							<p>المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا
								قمت بإدخال
								"lorem ipsum" في أي
								محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ
								جديدة ومختلفة
								من نص لوريم إيبسوم،
								أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>

						</div>
						<div class="col-news-top">
							<div class="date-in">
								<img class="img-responsive" src="img/vision.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-news-right wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="1s">
						<div class="col-bottom">
							<h4>مهمة</h4>
							<p> المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا
								قمت بإدخال
								"lorem ipsum" في أي
								محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ
								جديدة ومختلفة
								من نص لوريم إيبسوم،
								أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>
						</div>
						<div class="col-news-top">
							<div class="date-in">

								<img class="img-responsive" src="img/mission.jpg" alt="">
							</div>

						</div>

					</div>
					<div class="col-md-6 col-news wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="1.5s">
						<div class="col-bottom two">
							<h4>اي كلمة </h4>
							<p> المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا
								قمت بإدخال
								"lorem ipsum" في أي
								محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ
								جديدة ومختلفة
								من نص لوريم إيبسوم،
								أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها..</p>


						</div>
						<div class="col-news-top">
							<div class="date-in">
								<img class="img-responsive" src="img/man.jpg" alt="">
							</div>
						</div>
					</div>

				</div>
				<div class="clearfix"> </div>
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
	<script src='http://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js'></script>
	<script src="js/aboutus.js"></script>

</body>

</html>