<?php
header('content-type:text/html;charset=utf-8');
include("../../inc/conn.php");
$keyword=@ $_POST['keyword'];

$email = isset($_POST['email'])?$_POST['email']:"";
$password = isset($_POST['password'])?$_POST['password']:"";
if(!empty($email)and!empty($password))
{ 
	try
	{
		$sql_select ="SELECT password,secondname,firstname FROM user WHERE email='$email'";
        $sql_select_avatar ="SELECT avatar_dir FROM avatar WHERE author_email='$email' AND picture_style='avatar'";
		$stmt = $dbh->prepare($sql_select); 
        $stmt->execute();
        $result=$stmt->fetch();
        $name=$result[secondname].$result[firstname];

        //查询avatar库
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC );
        $pdo=$dbh->query($sql_select_avatar);
        $avatar=$pdo->fetch();
    		if(password_verify($password, $result[password]))
    		{
    			setcookie("cookiePassword", $password, time()+7*24*3600);//自动创建cookie
    			setcookie("cookieEmail", $email, time()+7*24*3600);
    			session_start();
    			$_SESSION['name']=$name;//自动创建session
                $_SESSION['email']=$email;
                $_SESSION['avatar_dir']=$avatar['avatar_dir'];
    			header("location:login.php?err_login=0&&name=".$name);
    		}else if($v!=$password)
    		{
    			header("location:login.php?err_login=2");
    		}

	}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();}
}

if(empty($email))
{
	header("location:login.php?err_login=1");
}

if(empty($password))
{
	header("location:login.php?err_login=3");
}
?>
