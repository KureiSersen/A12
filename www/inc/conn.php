<?php
$dbms='mysql';//服务其类型
$host='localhost';//数据库主机名
$dbname='db_user';
$user='root';
$password='cnm280nmzjkji';
$dsn="$dbms:host=$host;dbname=$dbname";

try{
	$dbh = new PDO($dsn,$user,$password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "连接成功<br/>";
}catch(PDOException $e){
	die("ERROR!:". $e->getMessage()."<br/>");
}



class Conn
{
	
}
?>