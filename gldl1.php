<?php 
ob_start();
include 'connect.php';
$_conn = mysqli_connect("localhost","root","123456","phpqy") or die('数据连接失败');
if ($_GET['action']=='login'){
 	$query = mysqli_query($_conn,"select * from admin where username='{$_POST['username']}' && password='{$_POST['password']}'");
	if ($rows=!mysqli_fetch_array($query,MYSQLI_ASSOC)){
 		echo "<script type='text/javascript'>alert('登录失败!');history.back();</script>";
 	}
  	else{
  		setcookie('yhm',$_POST['username']);
  		echo "<script type='text/javascript'>alert('登录成功');window.location.href='admin.php';</script>"; 
  	}
}
?>