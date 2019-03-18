<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	include("../inc/conn.php");
	$comment_id=isset($_GET['comment_id'])?$_GET['comment_id']:"";
	try{
		$sql_delete ="DELETE FROM comment where comment_id='$comment_id'";
		$pdo=$dbh->query($sql_delete);
		}catch (Exception $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
	echo "<script>alert('删除成功!');history.back();</script>";
?>