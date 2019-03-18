<?php
	session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
 include("../../inc/conn.php");
 $posts_id=$_GET['posts_id'];

 $sql_select_post ="SELECT * FROM posts WHERE posts_id='$posts_id'";
 $sql_select_comment = "SELECT * FROM comment WHERE posts_id = '$posts_id'";
 try {
 	$pdo=$dbh->query($sql_select_post);
 	$result=$pdo->fetchall();
 	
 	$pdo=$dbh->query($sql_select_comment);
 	$result_comment=$pdo->fetchall();
	$_SESSION['comment']=$result_comment;
 } catch (Exception $e) {
 	exit($e->getMessage());
 }
 ?>
 <form action="show.php" method="post" name="to_look">
 	<!--文章标题-->
 	<input type="hidden" name="title" id="id_title" required="required" value="<?php echo $result[0]['posts_title'];?>">
	<!--文章内容-->
 	<input type="hidden" id="id_content" name="content" required="required" value="<?php echo $result[0]['posts_content'];?>">
	<!--文章时间-->
 	<input type="hidden" id="id_posts_date" name="posts_date" required="required" value="<?php echo $result[0]['posts_date'];?>">
	<!--文章作者email-->
 	<input type="hidden" id="id_author_email" name="author_email" required="required" value="<?php echo $result[0]['author_email'];?>">
	<!--文章id-->
 	<input type="hidden" id="id_posts_id" name="posts_id" required="required" value="<?php echo $posts_id;?>">
	<!--文章评论-->
 	<input type="hidden" id="id_comment" name="comment" required="required" value="<?php echo $result_comment;?>">
 </form>

<script type="text/javascript">
	document.forms['to_look'].submit();
</script>
