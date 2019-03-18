<!DOCTYPE html>
<?php
header('content-type:text/html;charset=utf-8');
session_start();
include('../../inc/conn.php'); 
if(@ $_SESSION['name']=="")
 {
   echo "<script>alert('您还没有登录,请先登录!')</script>";
   header("location:/users/login/login_.php");
   exit;
 }
?>
<html lang="en">
<head>
<link rel="icon" href="../../inc/images/tit.ico" type="img/x-ico" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Home</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- CSS
================================================== -->
<!-- Bootstrap -->
<link href="../../inc/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- FontAwesome -->
<link rel="stylesheet" href="../../inc/css/font-awesome.min.css">
<!-- Animation -->
<link rel="stylesheet" href="../../inc/css/animate.css">
<!-- Prettyphoto -->
<link rel="stylesheet" href="../../inc/css/prettyPhoto.css">
<!-- Template styles-->
<link rel="stylesheet" href="../../inc/css/style.css">
<!-- Responsive styles-->
<link rel="stylesheet" href="../../inc/css/responsive.css">






<link rel="shortcut icon" href="../../inc/css/loginsuccess/images/favicon.ico">

<!-- =============================
			stylesheets
================================== -->

<!-- Normalize And Bootstrap -->
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/normalize.css">
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/bootstrap.min.css">

<!-- Google Font  -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:600,700,400,300' rel='stylesheet' type='text/css'>

<!-- Font Icons -->
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/font-awesome/css/font-awesome.min.css" />

<!-- Plugin Default Stylesheets -->
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/magnific-popup.css">
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/slider-pro.css">
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/owl.carousel.css">
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/owl.theme.css">
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/owl.transitions.css">
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/animate.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/style.css">
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/responsive.css" />
<link rel="stylesheet" href="../../inc/css/loginsuccess/css/color.css" id="colors" />








</head>
<body data-spy="scroll" data-target=".main-nav">
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
			
				<a href="#" class="navbar-brand"> <img src="../../inc/images/logo.jpg" alt="">Fo<span>cal</span></a>
			</div>  <!-- navbar-header end -->
			<!-- main nav  -->

			<div id="bs-example-navbar-collapse-1" role="navigation">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../../posts/index.php" style="text-decoration: none">我的文章 </a></li>
					<li><a href="../../posts/new.php" style="text-decoration: none">写文章 </a></li>
					<li><a href="#" style="text-decoration: none">已收藏 </a></li>
					<li><a href="#" style="text-decoration: none">更多功能 </a></li>
					<li><a href="#" style="text-decoration: none">通知</a></li>
					<li><a href="../logout/logout.php" style="text-decoration: none">
					<?php
					$name=$_SESSION['name'];
					echo "$name";
					?>
					退出登陆</a></li>
				</ul>
			</div>
			
		</div><!-- /.container-fluid -->
	</div>
</section>




<section id="team" class="blete-section-wrapper blete-team-section">
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 blete-section-header wow fadeInDown">
                    <h2>OUR <span class="blete-highlight-text">POSTER</span></h2>
                    <div class="blete-section-divider"></div>
                    <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore culpa hic illo consequuntur at iusto, suscipit, maiores nihil vero obcaecati sunt delectus deleniti atque, labore laborum magni tempore id alias!</p>
                </div>
                <!-- Section Header End -->



                <!-- Team Slider -->
                <div id="team-slider" class="owl-carousel blete-team-carousal col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="2s">
 					<!--这里开始循环遍历-->
					 <?php
						try{

							$sql_select ="SELECT * FROM posts ORDER BY posts_id ASC";
							$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC );
							$stmt = $dbh->query($sql_select); 
							$result=$stmt->fetchall();
						}catch (Exception $e) {
							echo $sql . "<br>" . $e->getMessage();
				
						}
						foreach ($result as $row) { 
					?>
                    <!-- Slides -->
                    <div class="blete-team-slides col-md-12 col-sm-12 col-xs-12">                   
                        <div class="blete-member-details">
							<h3>
								<a href="../../posts/show/before_the_show.php?posts_id=<?php echo $row['posts_id'];?>">
									<?php echo $row['posts_title'];?>
								</a>
							</h3>
                            <span class="blete-member-desg">Web Development</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, impedit ducimus illo, minus nemo iste ut sint dolorum magnam nam in, dolorem veritatis. Ipsum voluptatibus, rem fuga nesciunt. In, totam..</p>                          
                        </div>
                    </div>
                    <!-- Slides End -->
					<!---->
					<?php
						}
					?>
					

                </div>
                <!-- Team Slider End -->
            </div>
        </div>
	</section>
	


	<!-- =============================
                SCRIPTS
    ================================== -->
    <script src="../../inc/css/loginsuccess/js/jquery-1.11.3.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/bootstrap.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/modernizr.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.easing.1.3.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.scrollUp.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.easypiechart.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.countTo.js"></script>
    <script src="../../inc/css/loginsuccess/js/isotope.pkgd.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/jflickrfeed.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.fitvids.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.stellar.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.waypoints.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/wow.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.nav.js"></script>
    <script src="../../inc/css/loginsuccess/js/imagesloaded.pkgd.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/smooth-scroll.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.magnific-popup.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/jquery.sliderPro.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/owl.carousel.min.js"></script>
    <script src="../../inc/css/loginsuccess/js/custom.js"></script>

</body>
</html>