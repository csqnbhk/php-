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
			<form  action="gldl.php?action=login" autocomplete="on" method="post">
				<h1>会员登录</h1> 
				<p> 
					<label for="username" class="uname" data-icon="u" >您的用户名</label>
					<input id="username" name="username" required="required" type="text" placeholder="请输入用户名"/>
				</p>
				<p> 
					<label for="password" class="youpasswd" data-icon="p">你的密码</label>
					<input id="password" name="password" required="required" type="password" placeholder="请输入密码" />
                </p>
             

				<p class="keeplogin"> 
					<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
					<label for="loginkeeping">保持登录状态</label>
				</p>
				<p class="login button"> 
					<input type="submit" value="登录" /> 
				</p>
				<p class="change_link">
					不是成员?<a href="reg.php" class="to_register">加入我们</a>
				</p>
			</form>
		</div>

	
		</div>
		
	</div>
	
</div>
	
</body>
</html>