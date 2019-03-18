<!DOCTYPE HTML>
<?php
include("../inc/conn.php");
session_start();
$email=$_SESSION['email'];
$my_comment=isset($_GET['my_comment'])?$_GET['my_comment']:"0";
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../inc/css/posts_index/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../inc/css/posts_index/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../inc/css/posts_index/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../inc/css/posts_index/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../inc/css/posts_index/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../inc/css/posts_index/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../inc/css/posts_index/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../inc/css/posts_index/css/style.css">

	<!-- Modernizr JS -->
	<script src="../inc/css/posts_index/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Splash <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="btn-cta"><a href="../users/login/loginsuccess.php"><span>查看主页</span></a></li>
						<li class="btn-cta"><a href="../posts/index.php"><span>查看文章</span></a></li>
						<li class="btn-cta"><a href="index.php?my_comment=0"><span>我的文章评论</span></a></li>
						<li class="btn-cta"><a href="index.php?my_comment=1"><span>我发表的评论</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
</div>


<div id="gtco-features" class="border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Splash Features</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
			<?php
				try{

					$sql_select_writer ="SELECT posts_id, comment_content,comment_id FROM comment WHERE author_email='$email' ORDER BY comment_id ASC";
					$sql_select_author ="SELECT posts_id, comment_content,comment_id FROM comment WHERE writer_email='$email' ORDER BY comment_id ASC";
					$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC );
					$pdo=$dbh->query($sql_select_writer);
					$res=$dbh->query($sql_select_author);
					$result=$pdo->fetchall();
					$final=$res->fetchall();
				}catch (Exception $e) {
					echo $sql . "<br>" . $e->getMessage();
				}
				if($my_comment=="0")
				{
    			foreach ($result as $row) { 
        	?> 
				<!--循环开始-->
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						
						<h3><a href="#">回复&nbsp;&nbsp;|</a>
						<a href="delete.php?comment_id=<?php echo $row['comment_id'];?>">|&nbsp;&nbsp;删除</a>
					</h3>
						<p>
							<a href="../posts/show/before_the_show.php?posts_id=<?php echo $row['posts_id'];?>">
								<?php echo $row['comment_content'];?>
							</a>
						</p>
					</div>
				</div>
				<!---->
				<?php
					}
				}else if($my_comment=="1")
				{
					foreach ($final as $row) { 
					?>
				
				<!--循环开始-->
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						
						<h3>
							<a href="#">更改&nbsp;&nbsp;|</a>
							<a href="delete.php?comment_id=<?php echo $row['comment_id'];?>">|&nbsp;&nbsp;删除</a>
						</h3>
						<p>
							<a href="../posts/show/before_the_show.php?posts_id=<?php echo $row['posts_id'];?>">
								<?php echo $row['comment_content'];?>
							</a>
						</p>
					</div>
				</div>
				<!---->
				<?php
					}
				}
				?>

				
				
				
				

			</div>
		</div>
	</div>




	<!-- jQuery -->
	<script src="../inc/css/posts_index/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../inc/css/posts_index/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../inc/css/posts_index/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../inc/css/posts_index/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../inc/css/posts_index/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../inc/css/posts_index/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="../inc/css/posts_index/js/jquery.magnific-popup.min.js"></script>
	<script src="../inc/css/posts_index/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="../inc/css/posts_index/js/main.js"></script>

	</body>
</html>