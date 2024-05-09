<?php

$Sconn = new mysqli("localhost", "root", "", "customers");

// التحقق من الاتصال بقاعدة البيانات
if ($Sconn->connect_error) {
    die("Connection failed: " . $Sconn->connect_error);
}

// استعلام لاسترداد البيانات من الجدول users
$sql = "SELECT * FROM users";
$result = $Sconn->query($sql);

if (!$result) {
    die('Error: ' . $Sconn->error);
}

// عرض البيانات
echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>" . $row['c_name'] . "</li>";
}
echo "</ul>";

// التحقق من استلام بيانات من النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام وتنظيف البيانات المدخلة
    $name = $Sconn->real_escape_string($_POST['c_name']);
    $phonenumber = $Sconn->real_escape_string($_POST['phonenumber']);
    $code = $Sconn->real_escape_string($_POST['Code']);
    $password = $Sconn->real_escape_string($_POST['c_password']);

    // إدراج البيانات في قاعدة البيانات
    $sql_insert = "INSERT INTO users (c_name, phonenumber, Code, c_password) VALUES ('$name', '$phonenumber', '$code', '$password')";

    if ($Sconn->query($sql_insert) === TRUE) {
        echo "تم إضافة المستخدم بنجاح!";
    } else {
        echo "حدث خطأ أثناء إضافة المستخدم: " . $Sconn->error;
    }
}

// إغلاق الاتصال بقاعدة البيانات
$Sconn->close();

exit(); // إنهاء البرنامج بعد الإدراج بنجاح
?>
!DOCTYPE HTML>
<html>
<head>
    <title>تفصيل اون لاين</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=devic-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="login.php" class="logo"> <span>تفصيل اون لاين</span></a>
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
						
						<ul class="actions stacked">
						
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
									</header>

									

									<hr class="major" />

												<!-- Lists -->
												
															<h4>Icons</h4>
															<ul class="icons">
																<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
																<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
																<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
																<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
																<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
																<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
															</ul>
															<ul class="icons">
																<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
																<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
																<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
															</ul>

														</div>
									
													
												
										
													<!-- Form -->
													<h3>تسجيل الدخول</h3>

													<form method="post" action="login.php">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="name" id="demo-name" value="" placeholder="name" />
																
														</div>
														
						

														
																<input type="password" name="password" id="demo-number" value="" placeholder="password " />
															
															<!-- Break -->
															<div class="col-12">
															<input type="number" name="phonenumber" id="demo-number" value="" placeholder=" phonenumber"/>
                                                                     </select>
														
																</div>
													<!-- Break -->
															<div class="col-6 col-12-xsmall">
															 <input type="VARCHAR" VARCHAR="demo-VARCHAR" name = "Code" id="demo-VARCHAR" value="" placeholder=" Code " />
															</select>
														</div>
															
														</select>
													
													</div>
															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" value="تسجيل الدخول" class="primary" /></li>	
                                                                    <li><input type="reset" value="اغلاق" /></li>
																</ul>
															</div>
														</div>
													</form>



				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
										
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