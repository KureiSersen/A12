<!DOCTYPE html>
<?php
include("auth.php");
?>
<html lang="en">
<head>
<link rel="icon" href="/inc/images/tit.ico" type="img/x-ico" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Home</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- CSS
================================================== -->
<!-- Bootstrap -->
<link href="/inc/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- FontAwesome -->
<link rel="stylesheet" href="/inc/css/font-awesome.min.css">
<!-- Animation -->
<link rel="stylesheet" href="/inc/css/animate.css">
<!-- Prettyphoto -->
<link rel="stylesheet" href="/inc/css/prettyPhoto.css">
<!-- Template styles-->
<link rel="stylesheet" href="/inc/css/style.css">
<!-- Responsive styles-->
<link rel="stylesheet" href="/inc/css/responsive.css">
</head>
<body data-spy="scroll" data-target=".main-nav">

<section id="section-banner">
	<div class="container">
		<div class="row">
			<div class="banner-content text-center">
				<h2 class="title">
					<div class="line-top"></div>
						THE FUTURE WILL BE CREATED <br>BY YOU & ME
					<div class="line-btm"></div>	
				</h2>

				<a href="#" class="btn btn-default">Learn More</a>
			</div>
		</div>
	</div>
</section>

<!-- section menu start -->

<section class="section-menu">
	<div class="navbar navbar-default main-nav" role="navigation" >
		<div class="container" >
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			
				<a href="#" class="navbar-brand"> <img src="/inc/images/logo.jpg" alt="">Fo<span>cal</span></a>
			</div>  <!-- navbar-header end -->
			<!-- main nav  -->

			<div id="bs-example-navbar-collapse-1" role="navigation">
				<ul class="nav navbar-nav navbar-right">
					<li class="collapse navbar-collapse navigation"><a href="#section-overview">Home </a></li>
					<li class="collapse navbar-collapse navigation"><a href="#section-profile">About US </a></li>
					<li class="collapse navbar-collapse navigation"><a href="#section-skill">Join us </a></li>
					<li class="collapse navbar-collapse navigation"><a href="#section-resume">Our laboratory </a></li>
					<li><a href="users/register/register.php" style="text-decoration: none">Register</a></li>
					<li><a href="users/login/login.php" style="text-decoration: none">Login</a></li>
				</ul>
			</div>
			<div class="nav navbar-nav navbar-right">
				<ul>
					
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</div>
</section>
<!-- section menu end -->

<section id="section-overview" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".2s">
				<div class="overview-box">
					<h3>Values</h3>
					<p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
				</div>
			</div> <!-- col-md-4 end -->

			<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".4s">
				<div class="overview-box">
					<h3>Goals</h3>
					<p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
				</div>
			</div> <!-- col-md-4 end -->

			<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".6s">
				<div class="overview-box">
					<h3>Hobbies</h3>
					<p>Lorem ipsum dolor sit amet, ea doming until epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>
				</div>
			</div> <!-- col-md-4 end -->
		</div>
	</div>
</section>
<!-- section overview end -->

<!-- section profile start -->

<section id="section-profile" class="section-padding">
	<div class="profile-bg visible-md visible-lg"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-sm-12 pull-right">
				<div class="profile-desc wow fadeInRight">
					<h2 class="heading-title">about us</h2>
					<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri.<br> <br>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei.</p>
				</div>
				<div class="row">
					<div class="service-wrapper">
						<div class="service-inner wow fadeInRight" data-wow-delay=".2s">
							<i class="fa fa-globe"></i>
							<div class="service-box">
								<h3>web design</h3>
								<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam</p>
							</div>
						</div> <!-- service -inner  -->
						<div class="service-inner wow fadeInRight" data-wow-delay=".5s">
							<i class="fa fa-users"></i>
							<div class="service-box">
								<h3>Online marketing</h3>
								<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam</p>
							</div>
						</div>  <!-- service -inner  -->
						<div class="service-inner wow fadeInRight" data-wow-delay=".8s">
							<i class="fa fa-pencil"></i>
							<div class="service-box">
								<h3>Graphics design</h3>
								<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam</p>
							</div>
						</div> <!-- service -inner  -->
						<div class="service-inner wow fadeInRight" data-wow-delay="1.1s">
							<i class="fa fa-globe"></i>
							<div class="service-box">
								<h3>Seo</h3>
								<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam</p>
							</div>
						</div>  <!-- service -inner  -->
					</div>
				</div><!-- row end -->
			</div>
		</div> <!-- row end -->
	</div><!-- container end -->
</section>
<!-- section profile end -->

<!-- section skill start -->

<section id="section-skill" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="heading-title">Join us</h2>
			</div>
			<div class="col-md-6 col-sm-6 wow fadeInLeft">
				<div class="skill-desc">
					<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. 
					<br>
					<br>
					Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est.</p>

					<a href="#" class="btn btn-default featured">Contact me</a>
				</div>
			</div>

			<div class="col-md-6 col-sm-6 wow fadeInRight" >
				<div class="skill-box wow fadeInDown" data-wow-delay=".2s">
					<label> photoshop</label>
					<div class="progress">
						<div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="60" aria-valuemax="100" style="width: 60%;" >
							60%
						</div>
					</div>
				</div>
				<div class="skill-box wow fadeInDown" data-wow-delay=".4s">
					<label> illustrator</label>
					<div class="progress">
						<div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="80" aria-valuemax="100" style="width: 80%;" >
							80%
						</div>
					</div>
				</div>
				<div class="skill-box wow fadeInDown" data-wow-delay=".6s">
					<label> html /css</label>
					<div class="progress">
						<div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="90" aria-valuemax="100" style="width: 90%;" >
							90%
						</div>
					</div>
				</div>
				<div class="skill-box wow fadeInDown" data-wow-delay=".8s">
					<label> php / mysql</label>
					<div class="progress">
						<div class="progress-bar" role="progress-bar" aria-valuemin="0" aria-valuenow="70" aria-valuemax="100" style="width: 70%;" >
							70%
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section skill End -->

<!-- Resume start -->

<section id="section-resume" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center wow fadeInUp">
				<h2 class="heading-title">Our laboratory</h2>
				<p>Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae pri. </p>

				<a href="#" class="btn btn-default featured">Download Resume</a>
			</div>
		</div>
	</div>
</section>
<footer id="section-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				

				<ul class="socail-link list-inline">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- initialize jQuery Library -->
<script type="text/javascript" src="/inc/js/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="/inc/assets/js/bootstrap.min.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="/inc/js/jquery.prettyPhoto.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="/inc/js/wow.min.js"></script>
<!-- singlepagenav -->
<script src="/inc/js/jquery.singlePageNav.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="/inc/js/jquery.easing.1.3.js"></script>
<!-- Sticky Menu -->
<script src="/inc/js/jquery.sticky.js"></script>
<script type="text/javascript" src="/inc/js/custom.js"></script>
<!-- Google Map API Key Source -->
<script>
	 $(".main-nav").sticky();
</script>

<script> 
	new WOW().init();

</script>
</body>
</html>