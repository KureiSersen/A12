<!DOCTYPE html>
<?php
	session_start();
	$writer_email=$_SESSION['email'];
	$posts_id=$_POST['posts_id'];
 	$posts_title=$_POST['title'];
 	$posts_content=$_POST['content'];
 	$posts_date=$_POST['posts_date'];
 	$author_email=$_POST['author_email'];
 	$comment=isset($_SESSION['comment'])?$_SESSION['comment']:"";


?>
<html>
<head>
<meta charset="utf-8">

<title></title>
<link rel="alternate" type="application/rss+xml" title="egrappler.com" href="feed/index.html">
<link href="http://fonts.googleapis.com/css?family=Raleway:700,300" rel="stylesheet"
        type="text/css">
<link rel="stylesheet" href="../../inc/css/show/css/style.css">
<link rel="stylesheet" href="../../inc/css/show/css/prettify.css">





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
<body>
<section>
  <div class="container">
    <ul class="docs-nav" id="menu-left">
      <li><strong><a href="#">作者信息</a></strong></li>
	  <li><strong><a href="../../users/login/loginsuccess.php">返回主页</a></strong></li>
	  <li><strong>更新时间：<?php echo $posts_date;?></strong></li>
	  <li><strong>阅读量</strong></li>
    </ul>

     <div class="docs-content">
      <h2> <?php echo $posts_title;?></h2>
      <h3> <?php echo $author_email;?></h3>
      <p><?php echo $posts_content;?></p>
      
      <hr>
	  <div class="container">
	  <form style="margin: 0px" action="../../comments/create.php" method="post">
				<!--comment_content-->
				<div class="blete-input-message blete-input-fields">
                    <textarea name="comment_content" id="id_comment_content" cols="30" rows="10" placeholder="想对作者说..."></textarea>
                </div>
				<!--posts_id-->
				<input type="hidden" name="posts_id" id="id_posts_id" required="required" value="<?php echo $posts_id?>">
				<!--author_email-->
				<input type="hidden" name="author_email" id="id_author_email" required="required" value="<?php echo $author_email?>">
				<!--writer_email-->
				<input type="hidden" name="writer_email" id="id_writer_email" required="required" value="<?php echo $writer_email?>">
				<!--comment_date-->
				<input type="hidden" name="comment_date" id="id_comment_date" required="required" value="<?php echo date("Y-m-d");?>">
			<div id="submit_bar"><input name="Submit" type="submit" value="发表" /></div>
			</form>
			</div>
      <h3 id="Comment">comment</h3>

	
      
	  <?php
				//print_r($comment);
				foreach ($comment as $row) { 
	  ?>
	  <ul>
        <li><?php echo $row['comment_content'];?></li>
      </ul>
      <pre class="prettyprint">
	  <?php  echo $row['writer_email'];?>
	  <?php  echo $row['comment_date'];?>
	  
	  </pre>
	  <hr>
	  <?php
    	}
	  ?>



      
    </div>
  </div>
</section>

<script src="../../inc/css/show/js/jquery.min.js"></script> 
 <script type="text/javascript" src="../../inc/css/show/js/prettify/prettify.js"></script> 
 <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=sunburst"></script>
 <script src="../../inc/css/show/js/layout.js"></script>
  <script src="../../inc/css/show/js/jquery.localscroll-1.2.7.js" type="text/javascript"></script>
  <script src="../../inc/css/show/js/jquery.scrollTo-1.4.3.1.js" type="text/javascript"></script>
</body>
</html>