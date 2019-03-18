<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
 include("../../inc/conn.php");
 $posts_id=$_POST['posts_id'];
 $posts_title=$_POST['title'];
 $posts_content=$_POST['content'];
 $posts_date=$_POST['date'];
 $sql_update="UPDATE posts SET posts_content='$posts_content',posts_title='$posts_title',posts_date='$posts_date' WHERE posts_id='$posts_id'";
 try {
 	$pdo=$dbh->query($sql_update);
 } catch (Exception $e) {
 	exit($e->getMessage());
 }
 echo "<script>alert('修改成功!');history.back();</script>";
?>