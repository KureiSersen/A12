<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../../inc/css/register/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../../inc/css/register/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../../inc/css/register/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../../inc/css/register/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../../inc/css/register/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../../inc/css/register/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../inc/css/register/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../../inc/css/register/css/style.css">

	<!-- Modernizr JS -->
	<script src="../../inc/css/register/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<?php
		$err_register=isset($_GET["err_register"])?$_GET["err_register"]:0;
		$err_login=isset($_GET["err_login"])?$_GET["err_login"]:0;
		$name = isset($_GET['name'])?$_GET['name']:"";
	?>
	<div class="gtco-loader"></div>	
	<nav class="gtco-nav" role="navigation">
	</nav>
	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(../../inc/css/register/images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Welcome to Splash</span>
							<h1>Build website using this template.</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<ul class="tab-menu">
										<li class="active gtco-first"><a href="#" data-tab="signup">Sign up</a></li>
										<li class="gtco-second"><a href="#" data-tab="login">Login</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<form action="register_.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Email</label>
														<input type="text" id="id_email" name="email" class="form-control" required="required">
														<?php
														 if($err_register==6)
														{
															echo <<<warn
															<font size="2" color="red">*请输入正确的邮箱</font>
warn;
														}else if($err_register==7)
                                               			{
                                               				echo <<<warn
                                                			<font size="2" color="red">*该邮箱已注册</font>
warn;
                                               			}?>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">姓氏</label>
														<input type="text" id="id_secondname" name="secondname" class="form-control" required="required">
														<?php 
										  				 if($err_register==1)
										  				 {
															echo <<<warn
															<font size="2" color="red">*确认姓氏无误么？</font>
warn;
										  				 }
										   ?>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">名字</label>
														<input type="text" id="id_firstname" name="firstname" class="form-control" required="required">
														<?php
										   				if($err_register==2)
										   				{
											 			  echo <<<warn
											  			  <font size="1" color="red">*确认名字无误么？</font>
warn;
										   				}?>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" id="id_password" name="password" class="form-control" required="required">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password2">Repeat Password</label>
														<input type="password" id="id_repassword" name="repassword" class="form-control" required="required">
														<?php
															if($err_register==4)
															{
																echo <<<warn
																<font size="2" color="red">*密码有误</font>
warn;
															}else if($err_register==5)
                                                           {
                                                            echo <<<warn
                                                            <font size="2" color="red">*密码不符合要求</font>
warn;
                                                           }?>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
													<input type="submit" id="id_register" name="register" class="btn btn-primary" value="Sign up">
													</div>
												</div>
											</form>	
											<?php
  											if($err_register==8)
  											{
  	  											header("location:registerSuccess.php");
  											}
											?>
										</div>





										<div class="tab-content-inner" data-content="login">
											<form action="../login/login_.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Email</label>
														<input type="text" id="id_email" name="email"  class="form-control" required="required" value="<?php echo isset($_COOKIE["cookieEmail"])?$_COOKIE["cookieEmail"]:"";?>">
														<?php
														if($err_login==1)
														{
					  									echo <<<warn
					   									<font size="2" color="gray">没有查询到您的姓名，或者您的邮箱填写错误</font>
warn;
														}
														if($err_login==0)
														{
					   									echo "$name";
					   									header("location:/users/login/loginsuccess.php");
					   									}
														?>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" id="id_password" name="password" class="form-control" required="required" value="<?php echo isset($_COOKIE["cookiePassword"])?$_COOKIE["cookiePassword"]:"";?>">
														<?php
							   							if($err_login==2)
							   							{
								  						echo <<<warn
								   						<font size="2" color="red">*密码错误</font>
warn;
							   							}
							   							if($err_login==3)
							   							{
								   						echo <<<warn
								   						<font size="2" color="red">*密码不能为空</font>
warn;
							   							}?> 
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
													<input type="submit" id="id_login" name="login" value="Login">
													</div>
												</div>
											</form>	
										</div>





									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../../inc/css/register/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../../inc/css/register/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../../inc/css/register/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../../inc/css/register/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../../inc/css/register/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../../inc/css/register/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="../../inc/css/register/js/jquery.magnific-popup.min.js"></script>
	<script src="../../inc/css/register/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../../inc/css/register/js/main.js"></script>

	</body>
</html>

