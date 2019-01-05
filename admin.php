<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/index.css"/>
	<script src="js/main.js"></script>
	<title>三味书屋</title>
</head>
<style>
	.help-main p {
		line-height: 50px;
	}
</style>
<body >
<?php 
include 'connect.php';
$_conn = mysqli_connect("localhost","root","123456","phpqy") or die('数据连接失败');
if (empty($_COOKIE['yhm'])){
			echo "<script type='text/javascript'>alert('您未登录，请先登录');window.location.href='login.php';</script>";
			exit;
        }
        ?>
 
<div class="top" id="item4">
	<div class="container clearfix">
		<ul class="clearfix fr">
        <?php
if(isset($_COOKIE['yhm']))
 {
  echo ' <li class=last><a>您好'.'&nbsp;'. $_COOKIE['yhm'].'&nbsp;'.'</a><li><a href="login_out.php">安全退出</a></li>';
 
	   }
else{

 echo "

 <li><a href=login.php>登录</a></li><li class=last><a href=reg.php>注册</a></li>" ;
}
?>
			<li><a href="member.php" style="border: none">管理中心</a></li>
		</ul>
	</div>
</div>

<div class="header">
	<div class="container clearfix">
		<div class="logo fl">
			<a href="index.html"><img src="images/logo4.png" alt=""/></a>
		</div>
		<div class="seacher fl">
			<form action="" method="post">
				<input type="text" placeholder="小伙伴，你想找什么?"/><input type="submit" value="搜 索"/>
			</form>
			<p>热门搜索：<a href="#">教育</a> <a href="#">外语</a> <a href="#">文学</a> <a href="#">考研资料</a> <a href="#">百科</a> <a href="#">科普</a> <a href="#">摄影</a> <a href="#">历史</a> <a href="#">理财</a> <a href="#">宗教</a> <a href="#">军事</a></p>
		
	</div>
</div>

<div class="help-wrap">
	<div class="container clearfix">
		<div class="bread">当前位置：
			<a href="index.php">首页</a> >
			<a href="member.php">会员管理</a> >
			<a href="member.php">个人信息</a>
		</div>
		<div class="help-l fl">
			<div class="help-item">
				<div class="help-item-title">个人中心
					<a href="javascript:void(0)" class="abs"></a>
				</div>
				<div class="help-item-list">
					<ul>
						<li><a href="admin.php">会员管理</a></li>
				
					</ul>
				</div>
			</div>
			
		</div>
		<div class="help-r fr">
            <div class="help-item-title">会员管理</div>
          
			<div class="help-main">
				
<style type="text/css">
td{padding:10px;}
td img { width:70px; height:70px;}
</style>
    <table border=1px cellpadding="0" cellspacing="0" style="margin:0 auto; width:680px;">
<?php


if ($_GET['action']=="del"){
$query = mysqli_query($_conn,"delete from users where 
id= ".$_GET['id']);
echo "<script type='text/javascript'>alert
('删除成功');window.location.href='admin.php';</script>";
}
$query = mysqli_query($_conn,"select * from users ");
echo '<tr><td>用户名</td><td>密码</td> <td>电话</td><td>地址</td><td>昵称</td><td>管理</td></tr>'; while($row = mysqli_fetch_array
($query,MYSQLI_ASSOC)){echo '
<tr><td>'.$row['yhm'].'</td><td>'.$row['mm'].'
 &nbsp;&nbsp;&nbsp;
 </td>     <td>'.$row['tel'].'   </td>
						  <td>'.$row['address'].'   </td>  <td>'.$row['uname'].'   </td>     &nbsp;&nbsp;&nbsp;&nbsp;  
						  
						 <td><a href="?action=del&id='.$row['id'].'">删除</a></td>
						  
						</tr>';
				}



				
			?>

</table>
			</div>
		</div>
	</div>
</div>




<div class="foot">
	<div class="container">
		<div class="zhinan">
			<ul class="clearfix">
				<li class="item-li">关于我们
					<ul>
						<li><a href="help.html">自我介绍</a></li>
						<li><a href="help.html">联系我们</a></li>
						<li><a href="help.html">网站公告</a></li>
					</ul>
				</li>
				<li class="item-li">新手指南
					<ul>
						<li><a href="help.html">如何买书</a></li>
						<li><a href="help.html">如何卖书</a></li>
						<li><a href="help.html">修改密码</a></li>
					</ul>
				</li>
				<li class="item-li">配送方式
					<ul>
						<li><a href="help.html">配送范围</a></li>
						<li><a href="help.html">配送时间</a></li>
					</ul>
				</li>
				<li class="item-li">售后服务
					<ul>
						<li><a href="help.html">退款申请</a></li>
						<li><a href="help.html">退换货处理</a></li>
						<li><a href="help.html">退换货政策</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="line"></div>

		<div class="bottom">
			<p>友情链接：<a href="http://www.dangdang.com/">当当书网</a>
&nbsp;&nbsp <a href="https://www.qidian.com/">起点阅文</a></p>
			
		</div>
	</div>
</div>

</body>
</html>