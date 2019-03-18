<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
 include("../inc/conn.php");
 $posts_id=$_GET['posts_id'];
 $sql_delete="delete from posts where posts_id='$posts_id'";
 try {
 	$pdo=$dbh->query($sql_delete);
 } catch (Exception $e) {
 	exit($e->getMessage());
 }
 echo "<script>alert('删除成功!');history.back();</script>";
?>