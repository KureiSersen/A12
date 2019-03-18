<?php
	header('content-type:text/html;charset=utf-8');
	include("../inc/conn.php");
	session_start();
	$email=isset($_SESSION['email'])?$_SESSION['email']:"";
	//print_r($_FILES);
	/*
	Array ( [avatar] => Array ( 
	[name] => tim.jpg 
	[type] => image/jpeg 
	[tmp_name] => C:\Windows\Temp\phpCCA1.tmp 
	[error] => 0 
	[size] => 34834 ) )
	*/
	if(1)//这里预留图片限制条件，暂时没有想好，所以暂时空着
	{
		if($FILES['avatar']['error']>0)
		{
			echo "ERROR: ".$_FILES['avatar']['error'] . "<br>";
		}else
		{
			//文件名后缀处理
			$suffix=$_FILES['avatar']['type'];
			$suffix=explode('/', $suffix);//explode函数用于将字符串分割为数组
			$showtime=time();//按照格林时间进行命名，防止重名
			$fileName="".$showtime.".".$suffix[1];//后缀取jpeg
			$_FILES['avatar']['name']=$fileName;
			//判断路径以及创建路径
			
			if(!is_dir($email))
			{
				mkdir($email);
			}
			$url="../../avatar/".$email."/".$fileName;
			$truth_url=$email."/".$fileName;
			move_uploaded_file($_FILES['avatar']['tmp_name'],$truth_url);
			
			
			
			//查找是否为空
			$sql_select="SELECT avatar_dir FROM avatar WHERE author_email='$email' AND picture_style = 'avatar' ";
			try{
				$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC );
				$pdo=$dbh->query($sql_select);
				$res=$pdo->fetchALL();
			}catch (Exception $e) {
				echo $sql . "<br>" . $e->getMessage();
			}
			if(empty($res[0]['avatar_dir']))
			{		
				//若为空
				try 
				{
					$picture_style="avatar";
					$sql_insert="INSERT INTO avatar(avatar_dir,author_email,picture_style)VALUES('$url','$email','$picture_style')";
					$pdo=$dbh->query($sql_insert);
				} catch (Exception $e) 
				{
					echo $sql . "<br>" . $e->getMessage();
				}
				unset($_SESSION['avatar_dir']);
 				$_SESSION['avatar_dir']=$url;
				header("location:../users/login/login.php");
			}else
			{		
				//若不为空
				//删除图片
				$truth_url=$res[0]['avatar_dir'];
				unlink($truth_url);
				//update数据库
				$sql_update="UPDATE avatar SET avatar_dir='$url' WHERE author_email='$email' AND picture_style = 'avatar'";
				try 
				{
 					$pdo=$dbh->query($sql_update);
 				} catch (Exception $e) 
 				{
 					exit($e->getMessage());
 				}
 				unset($_SESSION['avatar_dir']);
 				$_SESSION['avatar_dir']=$url;
 				header("location:../users/login/login.php");
			}
		}	
			
			
	}
	
?>
