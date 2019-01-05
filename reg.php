<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>三味书屋</title>
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body style="background: #fff url(images/bg.jpg) repeat top left;">

<div id="container_demo" >
	<a class="hiddenanchor" id="toregister"></a>
	<a class="hiddenanchor" id="tologin"></a>
	<div id="wrapper">
		<div id="login" class="animate form">

            <?php 


include_once 'connect.php';

if ($_GET['action']=='reged'){

$_conn = mysqli_connect("localhost","root","123456","phpqy") or die('数据连接失败');
//$_clean = array();
//$_clean['username'] = _check_username($_POST['username'],2,20);
//$_clean['password'] = _check_password($_POST['password'],$_POST['repassword'],6);
$query = mysqli_query($_conn,"select yhm from users where yhm = '{$_POST['username']}'");
if(mysqli_fetch_array($query,MYSQLI_ASSOC)){
echo "<script type='text/javascript'>alert('不好意思！您输入的用户名已经被注册');history.back();</script>";
return;
};
mysqli_query($_conn,"insert into users (yhm,mm,tel,uname,address) values ('{$_POST['username']}','{$_POST['password']}'
,'{$_POST['tel']}','{$_POST['uname']}','{$_POST['address']}')") or die(mysqli_error());	
echo "<script type='text/javascript'>alert('注册成功');window.location.href='login.php';</script>";

};



?>
        <form  action="?action=reged" method="post">
				<h1>注册</h1> 
				<p> 
					<label for="usernamesignup" class="uname" data-icon="u">用户名</label>
					<input id="usernamesignup" name="username" required="required" type="text" placeholder="用户名" />
				</p>
				<p> 
					<label for="tel" class="youmail">联系电话</label>
					<input id="tel" name="tel" required="required" type="tel" placeholder="联系电话"/>
                </p>
                <p> 
					<label for="passwordsignup" class="youpasswd" data-icon="p">密码</label>
					<input id="passwordsignup" name="password" required="required" type="password" placeholder="密码"/>
				</p>
				<p> 
					<label for="passwordsignup_confirm" class="youpasswd" data-icon="p">确认密码</label>
					<input id="passwordsignup_confirm" name="repassword" required="required" type="password" placeholder="确认密码"/>
				</p>
                <p> 
					<label for="address" class="youmail">地址</label>
					<input id="address" name="address" required="required" type="tel" placeholder="地址"/>
                </p>
                <p> 
					<label for="address" class="youmail">昵称</label>
					<input id="address" name="uname" required="required" type="tel" placeholder="昵称"/>
                </p>
                
               
			
				<p class="signin button"> 
					<input type="submit" value="注册"/> 
				</p>
				<p class="change_link">  
					已经是成员?<a href="login.php" class="to_register"> 去登录 </a>
				</p>
			</form>
		</div>

	
	</div>
	
</div>
	
</body>
</html>