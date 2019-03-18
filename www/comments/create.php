<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
 include("../inc/conn.php");
 $posts_id=$_POST['posts_id'];
 $comment_content=$_POST['comment_content'];
 $author_email=$_POST['author_email'];
 $writer_email=$_POST['writer_email'];
 $comment_date=$_POST['comment_date'];
 try {
			$sql_insert="INSERT INTO comment(posts_id,author_email,writer_email,comment_content,comment_date)VALUES('$posts_id','$author_email','$writer_email','$comment_content','$comment_date')";
			$pdo=$dbh->query($sql_insert);
		} catch (Exception $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
echo "<script>alert('评论成功!');self.location='../users/login/loginsuccess.php';</script>";

?>