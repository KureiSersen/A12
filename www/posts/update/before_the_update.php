<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
 include("../../inc/conn.php");
 $posts_id=$_GET['posts_id'];
 $sql_select="SELECT * FROM posts WHERE posts_id ='$posts_id'";
 try {
 	$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC );
 	$pdo=$dbh->query($sql_select);
 	$res=$pdo->fetchALL();
 } catch (Exception $e) {
 	exit($e->getMessage());
 }
 //print_r($res);
 //echo $res[0]['posts_title'];

?>
<form action="index.php" method="post" name="to_update">
	<input type="hidden" id="id_title" name="title" required="required" value="<?php echo $res[0]['posts_title']?>">
	<input type="hidden" id="id_content" name="content" required="required" value="<?php echo $res[0]['posts_content']?>">
	<input type="hidden" id="id_posts_id" name="posts_id" required="required" value="<?php echo $posts_id?>">
</form>
<script type="text/javascript">
	document.forms['to_update'].submit();
</script>