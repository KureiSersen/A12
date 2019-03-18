<!DOCTYPE html>
<?php $date=date("Y-m-d");?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!-- Normalize And Bootstrap -->
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/normalize.css">
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/bootstrap.min.css">

    <!-- Google Font  -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:600,700,400,300' rel='stylesheet' type='text/css'>

    <!-- Font Icons -->
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/font-awesome/css/font-awesome.min.css" />

    <!-- Plugin Default Stylesheets -->
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/magnific-popup.css">
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/slider-pro.css">
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/owl.carousel.css">
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/owl.theme.css">
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/owl.transitions.css">
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/animate.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/style.css">
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/responsive.css" />
    <link rel="stylesheet" href="../inc/css/loginsuccess/css/color.css" id="colors" />

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->
</head>

<body>
<script language="javascript">
		function chkinput(form)
		{
			if(form.id_title.value=="")
			{
				alert("请输入标题！");
				form.title.select();
				return(false);
			}
			if(form.content.value=="")
			{
				alert("请输入内容！");
				form.content.select();
				return(false);
			}
			return(true);
		}
	</script>
<section id="contact" class="blete-section-wrapper blete-contact-section" data-stellar-background-ratio="0.5">
    <div class="blete-parallax-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 blete-section-header wow fadeInDown blete-section-header-parallax">
                    <h2>CONTACT <span class="blete-highlight-text">US</span></h2>
                    <div class="blete-section-divider"></div>
                    <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque magni voluptates ipsam.</p>
                </div>
                <!-- Section Header End -->

                <div class="blete-contact-details">

                    <!-- Address Area -->
                    <div class="col-md-5 col-sm-4 col-xs-12 blete-contact-address wow bounceInLeft">
                        <p>工具栏</p>
                        <ul>
                            <li class="blete-office-address"><a href="../users/login/loginsuccess.php">查看主页</a></li>
                            <li class="blete-phone"><a href="index.php">文章管理</a></li>
                            <li class="blete-email"><a href="../comments/index.php">评论管理</a></li>
                        </ul>
                    </div>

                    <!-- Address Area End -->

                    <!-- Contact Form -->
                    <form action="create.php" method="POST" onsubmit="return chkinput(this)">
                    <div class="col-md-7 col-sm-8 col-xs-12 blete-contact-form wow bounceInRight">
                        <div id="contact-result"></div>
                        <div id="contact-form">
                            <div class="blete-input-name blete-input-fields">
                                <input name="title" type="text" id="id_title" placeholder="标题">
                            </div>

                            <div class="blete-input-email blete-input-fields">
                                <input type="type" name="text" id="id_type" placeholder="标签">
                            </div>

                            <div class="blete-input-message blete-input-fields">
                                <textarea name="content" id="id_content" cols="30" rows="10" placeholder="content"></textarea>
                            </div>
                            <input name="date" type="hidden" id="id_date" value="<?php echo "$date";?>">
                            
                            <input type="submit" value="SUBMITE" id="submit-btn">
                        </div>
                    </div>
                    <!-- Contact Form End -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================
                SCRIPTS
    ================================== -->
    <script src="../inc/css/loginsuccess/js/jquery-1.11.3.min.js"></script>
    <script src="../inc/css/loginsuccess/js/bootstrap.min.js"></script>
    <script src="../inc/css/loginsuccess/js/modernizr.min.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.easing.1.3.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.scrollUp.min.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.easypiechart.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.countTo.js"></script>
    <script src="../inc/css/loginsuccess/js/isotope.pkgd.min.js"></script>
    <script src="../inc/css/loginsuccess/js/jflickrfeed.min.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.fitvids.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.stellar.min.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.waypoints.min.js"></script>
    <script src="../inc/css/loginsuccess/js/wow.min.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.nav.js"></script>
    <script src="../inc/css/loginsuccess/js/imagesloaded.pkgd.min.js"></script>
    <script src="../inc/css/loginsuccess/js/smooth-scroll.min.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.magnific-popup.min.js"></script>
    <script src="../inc/css/loginsuccess/js/jquery.sliderPro.min.js"></script>
    <script src="../inc/css/loginsuccess/js/owl.carousel.min.js"></script>
    <script src="../inc/css/loginsuccess/js/custom.js"></script>

</body>
</html>