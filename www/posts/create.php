<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("../inc/conn.php");
$keyword=@ $_POST['keyword'];

session_start();
$title = isset($_POST['title'])?$_POST['title']:"";
$content = isset($_POST['content'])?$_POST['content']:"";
$author_email = isset($_SESSION['email'])?$_SESSION['email']:"";
$posts_date = isset($_POST['date'])?$_POST['date']:"";

try {
			$sql_insert="INSERT INTO posts(author_email,posts_content,posts_date,posts_title)VALUES('$author_email','$content','$posts_date','$title')";
			$dbh->exec($sql_insert);
		} catch (Exception $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
echo "<script>alert('添加成功!');history.back();</script>";

?>