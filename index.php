<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/index.css"/>
	<link rel="stylesheet" href="css/swiper3.07.min.css"/>
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/koala.min.1.5.js"></script>
	<style>
		.swiper-container {
			width: 1100px;
			height: 300px;
			margin: 0 auto;
		}
	</style>
	<title>三味书屋</title>
</head>
<body>
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
			
            <li><a href="member.php" style="border: none">个人中心</a></li>
            <li><a href="glydl.php" style="border: none">管理登录</a></li>
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
</div>

<div class="banner container">
	<img src="images/notice.png" alt="" style="width: 1200px;height: auto;"/>
	<div class="clearfix">
		<div class="about fl">
			<h1>三味书屋</h1>
			<img src="images/logo9.png" alt=""/>
			<p><span>三味书屋</span>是一个网上购物书城。力求打造网上最为纯净的图书商城系统。为广大书友们创建一个美好干净的购书页面是我们的遵旨。网站初期建设，若有问题请联系客服。</p>
		</div>
		<div id="fsD1" class="focus fl">
			<div id="D1pic1" class="fPic">
				<div class="fcon">
					<a href="STqsj.html"><img src="images/focus1.jpg" /></a>
					<span class="shadow"><a href="STqsj.html">从你的全世界路过</a></span>
				</div>
				<div class="fcon">
					<a href="STzfz.html"><img src="images/focus2.jpg" /></a>
					<span class="shadow"><a href="STzfz.html">追风筝的人</a></span>
				</div>
				<div class="fcon">
					<a href="STdssd.html"><img src="images/focus3.jpg" /></a>
					<span class="shadow"><a href="STdssg.html">岛上书店</a></span>
				</div>
				<div class="fcon">
					<a href="STrjsg.html"><img src="images/focus4.jpg" /></a>
					<span class="shadow"><a href="STrjsg.html">人间失格</a></span>
				</div>
				<div class="fcon">
					<a href="STfslj.html"><img src="images/focus5.jpg" /></a>
					<span class="shadow"><a href="STfslj.html">浮生六记</a></span>
				</div>
			</div>

			<div class="fbg">
				<div class="D1fBt" id="D1fBt">
					<a href="javascript:void(0)" class="current"><i>1</i></a>
					<a href="javascript:void(0)"><i>2</i></a>
					<a href="javascript:void(0)"><i>3</i></a>
					<a href="javascript:void(0)"><i>4</i></a>
					<a href="javascript:void(0)"><i>5</i></a>
				</div>
			</div>
		</div>
		<div class="help fr">
			<h2>今日精选</h2>
			<ul>
				<li><a href="STqsj.html">从你的全世界路过</a></li>
				<li><a href="STzfz.html">追风筝的人</a></li>
				<li><a href="STdssd.html">岛上书店</a></li>
				<li><a href="STrjsg.html">人间失格</a></li>
				<li><a href="STfslj.html">浮生六记</a></li>
			</ul>
			<h2>本周热门</h2>
			<ul>
				<li><a href="ST2qshc.html">群山回唱</a></li>
				<li><a href="ST2yxj.html">夜行记</a></li>
				<li><a href="ST2xzsj.html">寻找时间的人</a></li>
				<li><a href="ST2kb.html">曼巴精神：科比自传</a></li>
			</ul>
		</div>
	</div>
	<div class="item clearfix" id="item1">
		<h1>主编推荐<span></span></h1>
		<div class="tabs book clearfix">
			<dl>
				<dt><a href="STqsj.html"><img src="images/ST/ST1.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="STqsj.html">从你的全世界路过</a></p>
					<p>价格：￥18</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="STzfz.html"><img src="images/ST/ST2.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="STzfz.html">追风筝的人</a></p>
					<p>价格：￥20.80</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="STdssd.html"><img src="images/ST/ST3.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="STdssd.html">岛上书店</a></p>
					<p>价格：￥17.5</p>
				</dd>
			</dl>
			<dl>
				<dt><a href="STrjsg.html"><img src="images/ST/ST4.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="STrjsg.html">人间失格</a></p>
					<p>价格：￥30</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="ST2qshc.html"><img src="images/ST/ST6.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="ST2qshc.html">群山回唱</a></p>
					<p>价格：￥25</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="ST2yxj.html"><img src="images/ST/ST7.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="ST2yxj.html">夜行记</a></p>
					<p>价格：￥34</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="ST2xzsj.html"><img src="images/ST/ST8.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="ST2xzsj.html">寻找时间的人</a></p>
					<p>价格：21￥</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="ST2kb.html"><img src="images/ST/ST9.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="ST2kb.html">曼巴精神：科比自传</a></p>
					<p>价格：￥78</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="STMR1.html"><img src="images/ST/STMR1.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="STMR1.html">写给恋爱的你</a></p>
					<p>价格：￥29</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="STfslj.html"><img src="images/ST/ST5.gif" alt=""/></a></dt>
				<dd>
					<p><a href="STfslj.html">浮生六记</a></p>
					<p>价格：￥22</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="STMR21.html"><img src="images/ST/STMR21.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="STMR21.html">我循着火光而来</a></p>
					<p>价格：￥31</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="STMR31.html"><img src="images/ST/STMR31.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="STMR31.html">任你行</a></p>
					<p>价格：￥31</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="STMR41.html"><img src="images/ST/STMR41.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="STMR41.html">镜湖</a></p>
					<p>价格：￥37.9</p>
				</dd>

			</dl>
			<dl>
				<dt><a href="STMR51.html"><img src="images/ST/STMR51.jpg" alt=""/></a></dt>
				<dd>
					<p><a href="STMR51.html">步步惊心</a></p>
					<p>价格：￥28</p>
				</dd>

			</dl>
		</div>
	</div>
	<div class="item clearfix" id="item2">
		<h1>名人堂<span></span></h1>
		<ul class="tab clearfix">
			<li><a class="on" href="javascript:void(0)">乐嘉</a></li>
			<li><a href="javascript:void(0)">张悦然</a></li>
			<li><a href="javascript:void(0)">林夕</a></li>
			<li><a href="javascript:void(0)">庆山</a></li>
			<li><a href="javascript:void(0)">桐华</a></li>
		</ul>
		<div class="tab0 tabs clearfix">
			<div class="book clearfix">
				<dl>
					<dt><a href="STMR1.html"><img src="images/ST/STMR1.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR1.html">写给恋爱的你</a></p>
                        <p>价格：￥29</p>
					</dd>
				</dl>
				<dl>
					<dt><a href="STMR2.html"><img src="images/ST/STMR2.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR2.html">色眼识人</a></p>
						<p>价格：￥25</p>
					</dd>
				</dl>
				<dl>
					<dt><a href="STMR3.html"><img src="images/ST/STMR3.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR3.html">写给单身的你</a></p>
						<p>价格：￥23</p>
					</dd>
				</dl>
				<dl>
					<dt><a href="STMR4.html"><img src="images/ST/STMR4.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR4.html">跟乐嘉学性格色彩</a></p>
						<p>价格：￥18</p>
					</dd>
				</dl>
				<dl>
					<dt><a href="STMR5.html"><img src="images/ST/STMR5.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR5.html">跟乐嘉学性格色彩2</a></p>
						<p>价格：￥20</p>
					</dd>
				</dl>
				<dl>
					<dt><a href="STMR6.html"><img src="images/ST/STMR6.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR6.html">淡淡</a></p>
						<p>价格：￥40</p>
					</dd>
				</dl>
			</div>
		</div>
		<div class="tab1 tabs hide clearfix">
			<div class="book clearfix">
				<dl>
					<dt><a href="STMR21.html"><img src="images/ST/STMR21.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR21.html">我循着火光而来</a></p>
                        <p>价格：￥31</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR22.jpg" alt=""/></dt>
					<dd>
						<p>茧</p>
						<p>价格：￥25</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR23.jpg" alt=""/></dt>
					<dd>
						<p>葵花走失在1890</p>
						<p>价格：￥24</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR24.jpg" alt=""/></dt>
					<dd>
						<p>匿名作家</p>
						<p>价格：￥27</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR25.jpg" alt=""/></dt>
					<dd>
						<p>水仙已乘鲤鱼去</p>
						<p>价格：￥21.5</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR26.jpg" alt=""/></dt>
					<dd>
						<p>不上班的理想生活</p>
						<p>价格：￥17</p>
					</dd>
				</dl>
			</div>
		</div>
		<div class="tab2 tabs hide clearfix">
			<div class="book clearfix">
				<dl>
					<dt><a href="STMR31.html"><img src="images/ST/STMR31.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR31.html">任你行</a></p>
                        <p>价格：￥31</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR32.jpg" alt=""/></dt>
					<dd>
						<p>原来你非不快乐</p>
						<p>价格：￥23</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR33.jpg" alt=""/></dt>
					<dd>
						<p>毫无代价唱最幸福的歌</p>
						<p>价格：￥35</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR34.jpg" alt=""/></dt>
					<dd>
						<p>世界将我包围</p>
						<p>价格：￥13</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR35.jpg" alt=""/></dt>
					<dd>
						<p>你必有一样是出色的</p>
						<p>价格：￥21</p>
					</dd>
				</dl>
			</div>
		</div>
		<div class="tab3 tabs hide clearfix">
			<div class="book clearfix">
				<dl>
					<dt><a href="STMR41.html"><img src="images/ST/STMR41.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR41.html">镜湖</a></p>
                        <p>价格：￥37.9</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR42.jpg" alt=""/></dt>
					<dd>
						<p>得未曾有</p>
						<p>价格：￥26</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR43.jpg" alt=""/></dt>
					<dd>
						<p>春宴</p>
						<p>价格：￥30.8</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR44.jpg" alt=""/></dt>
					<dd>
						<p>莲花</p>
						<p>价格：￥27</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR45.jpg" alt=""/></dt>
					<dd>
						<p>告别薇安</p>
						<p>价格：￥31.5</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR46.jpg" alt=""/></dt>
					<dd>
						<p>月童度河</p>
						<p>价格：￥37</p>
					</dd>
				</dl>
			</div>
		</div>
		<div class="tab4 tabs hide clearfix">
			<div class="book clearfix">
				<dl>
					<dt><a href="STMR51.html"><img src="images/ST/STMR51.jpg" alt=""/></a></dt>
					<dd>
						<p><a href="STMR51.html">步步惊心</a></p>
						<p><价格：￥28</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR52.jpg" alt=""/></dt>
					<dd>
						<p>长相思</p>
						<p>价格：￥24.10</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR53.jpg" alt=""/></dt>
					<dd>
						<p>散落星河的记忆</p>
						<p><价格：￥24</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR54.jpg" alt=""/></dt>
					<dd>
						<p>那片星空，那片海</p>
						<p><价格：￥19</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/STMR55.jpg" alt=""/></dt>
					<dd>
						<p>那些回不去的年少时光</p>
						<p><价格：￥29.7</p>
					</dd>
				</dl>
			</div>

		</div>
	</div>
	<div class="item clearfix" id="item3">
		<h1>图书分类<span></span>
			<!--<a href="list.html">+更多</a>-->
		</h1>
		<div class="list fl">
			<ul class="one">
				<li><a href="list.html">文艺</a>
					<ul class="two">
						<li><a href="list.html">文学</a></li>
						<li><a href="list.html">传记</a></li>
						<li><a href="list.html">艺术</a></li>
						<li><a href="list.html">摄影</a></li>
					</ul>
				</li>
				<li><a href="#">人文百科</a>
					<ul class="two">
						<li><a href="#">历史</a></li>
						<li><a href="#">古籍</a></li>
						<li><a href="#">哲学</a></li>
						<li><a href="#">文化</a></li>
						<li><a href="#">法律</a></li>
					</ul>
				</li>
				<li><a href="#">生活</a>
					<ul class="two">
						<li><a href="#">运动</a></li>
						<li><a href="#">美食</a></li>
						<li><a href="#">旅游</a></li>
						<li><a href="#">休闲</a></li>
						<li><a href="#">风水</a></li>
					</ul>
				</li>
				<li><a href="#">科技</a>
					<ul class="two">
						<li><a href="#">科普</a></li>
						<li><a href="#">建筑</a></li>
						<li><a href="#">医学</a></li>
						<li><a href="#">工业</a></li>
						<li><a href="#">计算机</a></li>
					</ul>
				</li>
				<li><a href="#">小说</a>
					<ul class="two">
						<li><a href="#">中国当代小说</a></li>
						<li><a href="#">中国古典小说</a></li>
						<li><a href="#">外国小说</a></li>
						<li><a href="#">科幻小说</a></li>
						<li><a href="#">历史</a></li>
					</ul>
				</li>
				<li><a href="#">励志</a>
					<ul class="two">
						<li><a href="#">心灵与修养</a></li>
						<li><a href="#">人生哲学</a></li>
						<li><a href="#">演讲</a></li>
						<li><a href="#">名人励志</a></li>
					</ul>
				</li>
				<li><a href="#">电子书</a>
					<ul class="two">
						<li><a href="#">文学</a></li>
						<li><a href="#">生活</a></li>
						<li><a href="#">艺术</a></li>
						<li><a href="#">科技</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="book-wrap fr">
			<div class="book clearfix">
				<dl>
					<dt><img src="images/ST/WY1.jpg" alt=""/></dt>
					<dd>
						<p>我喜欢生命本来的样</p>
						<p>价格：￥42</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY2.jpg" alt=""/></dt>
					<dd>
						<p>自在独行</p>
						<p>价格：￥32</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY3.jpg" alt=""/></dt>
					<dd>
						<p>笑场</p>
						<p>价格：￥21</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY4.jpg" alt=""/></dt>
					<dd>
						<p>皮囊</p>
						<p>价格：￥39</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY5.jpg" alt=""/></dt>
					<dd>
						<p>一只特立独行的猪</p>
						<p>价格：￥42</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY6.jpg" alt=""/></dt>
					<dd>
						<p>天长地久</p>
						<p>价格：￥36</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY7.jpg" alt=""/></dt>
					<dd>
						<p>你也走了很远的路吧</p>
						<p>价格：￥35</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY8.jpg" alt=""/></dt>
					<dd>
						<p>冬牧场</p>
						<p>价格：￥19</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY9.jpg" alt=""/></dt>
					<dd>
						<p>心有猛虎 细嗅蔷薇</p>
						<p>价格：￥28</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY10.jpg" alt=""/></dt>
					<dd>
						<p>你是人间四月天</p>
						<p>价格：￥24</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY11.jpg" alt=""/></dt>
					<dd>
						<p>找点乐子</p>
						<p>价格：￥9.9</p>
					</dd>
				</dl>
				<dl>
					<dt><img src="images/ST/WY12.jpg" alt=""/></dt>
					<dd>
						<p>沉默的大多数</p>
						<p>价格：￥23</p>
					</dd>
				</dl>
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
<div class="fixnav">
	<ul>
		<li><a href="#" title="1">主编推荐</a></li>
		<li><a href="#" title="2">名人堂</a></li>
		<li><a href="#" title="3">图书分类</a></li>
		<li><a href="#" title="4">返回顶部</a></li>
		<li><a  href="http://wpa.qq.com/msgrd?v=3&uin=851817819&site=qq&menu=yes">联系客服</a></li>
	</ul>
</div>
<script type="text/javascript">
	Qfast.add('widgets', { path: "js/terminator2.2.min.js", type: "js", requires: ['fx'] });
	Qfast(false, 'widgets', function () {
		K.tabs({
			id: 'fsD1',   //焦点图包裹id
			conId: "D1pic1",  //** 大图域包裹id
			tabId:"D1fBt",
			tabTn:"a",
			conCn: '.fcon', //** 大图域配置class
			auto: 1,   //自动播放 1或0
			effect: 'fade',   //效果配置
			eType: 'click', //** 鼠标事件
			pageBt:true,//是否有按钮切换页码
			bns: ['.prev', '.next'],//** 前后按钮配置class
			interval: 3000  //** 停顿时间
		})
	})
</script>
</body>
</html>