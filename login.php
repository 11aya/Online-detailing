
<?php
// جلب اسم المستخدم من النموذج أو أي مكان آخر حسب تطبيقك
$name = $_POST['name']; // افترضنا أنه تم تمرير اسم المستخدم عبر نموذج POST

// رسالة الترحيب
$welcomeMessage = "مرحبًا، $name! شكرًا لتسجيلك.";

// عرض رسالة الترحيب
echo $welcomeMessage;

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>تفصيل اون لاين</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="register.php" class="logo"><span>تفصيل اون لاين</span></a>
						<nav>
							<a href="#menu">الاعدادات</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
						<li><a href="login.php">الصفحه الرئيسيه</a></li>
							<li><a href="register.php">تسجيل الدخول</a></li>
							<li><a href="long aut.php">تسجيل خروج</a></li>
						</ul>
						<ul class="actions stacked">
							
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>مرحبا بكم/ تفصيل اون لاين</h1>
							</header>
							<div class="content">
								<p>هذه المواقع سيساعدكم في الوصول الي افضل المفصلين باقل الاسعار<br />
								</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">انواع الملابس</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing 2.php" class="link">ملابس اطفال</a></h3>
								
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">ملابس سيدات</a></h3>
										
									</header>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing 3.php" class="link">ملابس رجالي</a></h3>
									
					
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
								
									<ul class="actions">
										<li><a href="landing.php" class="button next">انواع الملابس</a></li>
									</ul>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">الاسم</label>
											<input type="text" name="الاسم" id="الاسم" />
										</div>
										<div class="field half">
											<label for="email">رقم التلفون</label>
											<input type="text" name="email" id="رقم التلفون" />
										</div>
										<div class="field">
											<label for="message">العنوان</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="تسجيل الدخول" اغلاق="primary" /></li>
										<li><input type="reset" value="اغلاق" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>