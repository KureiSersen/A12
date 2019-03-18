<?php
header('content-type:text/html;charset=utf-8');
include("../../inc/conn.php");
$keyword=@ $_POST['keyword'];

$secondname = isset($_POST['secondname'])?$_POST['secondname']:"";
$firstname = isset($_POST['firstname'])?$_POST['firstname']:"";
$username = isset($_POST['username'])?$_POST['username']:"";
$password = isset($_POST['password'])?$_POST['password']:"";
$repassword = isset($_POST['repassword'])?$_POST['repassword']:"";
$email = isset($_POST['email'])?$_POST['email']:"";

$all_is_right=0;



if((!preg_match("/^[a-zA-Z]{3,14}$/", $secondname))and(!preg_match("/^([\x{4e00}-\x{9fa5}]{1,3})/u", $secondname)))
{

	header("location:register.php?err_register=1");//姓氏不符合要求
}else{$all_is_right=$all_is_right+1;}



if((!preg_match("/^[a-zA-Z]{3,14}$/", $firstname))and(!preg_match("/^([\x{4e00}-\x{9fa5}]{1,3})/u", $firstname)))
{

	header("location:register.php?err_register=2");//名字不符合要求
}else{$all_is_right=$all_is_right+1;}



if(!preg_match("/^[a-zA-Z0-9]{0,}$/", $username))
	{

		header("location:register.php?err_register=3");//用户名不符合要求
	}else{$all_is_right=$all_is_right+1;}



if($password==$repassword)
{
	if(!preg_match("/^[a-zA-Z0-9]{8,}$/", $password))
	{

		header("location:register.php?err_register=5");//密码不符合要求
	}else{$all_is_right=$all_is_right+1;}

}else
{

	header("location:register.php?err_register=4");//两次输入密码有误
}



if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{

	header("location:register.php?err_register=6");//邮箱格式不正确
}else
{

	$sql_select="SELECT count(*) FROM user WHERE email = '$email'";
	$res=$dbh->query($sql_select);
	$row=$res->fetch(PDO::FETCH_BOTH);
	if(empty($row[0]))//查询邮箱是否重复注册
	{

		$all_is_right=$all_is_right+1;
	}else
	{

		header("location:register.php?err_register=7");
	}
}

//插入数据
if($all_is_right==5)
{

	try {
			$password_hash=password_hash($password, PASSWORD_DEFAULT);
			$sql_insert="INSERT INTO user(username,password,email,firstname,secondname)VALUES('$username','$password_hash','$email','$firstname','$secondname')";
			$dbh->exec($sql_insert);
			header("location:register.php?err_register=8");
		} catch (Exception $e) {
			echo $sql . "<br>" . $e->getMessage();
		}
	$all_is_right=0;
}
?>