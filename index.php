<html lang="zh-cn">
<head> 
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>营销号文案生成器</title> 
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<link rel="shortcut icon" href="https://q1.qlogo.cn/g?b=qq&nk=1017959770&s=640" type="image/x-icon"> 
	<!-- zui --> 
	<link href="https://lib.baomitu.com/zui/1.9.1/css/zui.min.css" rel="stylesheet">
	<script src="https://lib.baomitu.com/jquery/3.5.0/jquery.min.js"></script>
	<script src="https://lib.baomitu.com/zui/1.9.1/js/zui.min.js"></script>
</head> 
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- 导航头部 -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-example">
				<span class="sr-only">切换导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">营销号文案生成器</a>
		</div>
		<div class="collapse navbar-collapse navbar-collapse-example">
			<ul class="nav navbar-nav">
				<li><a href="https://github.com/hanximeng/Sb-article/"> Github 开源地址</a></li>
				<li><a href="https://hanximeng.com/"> 寒曦朦博客</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<form action="" method="post">
		<div class="form-group">
			<label>主体：</label>
			<input class="form-control" type="text" name="主体">
			<label>事件：</label>
			<input class="form-control" type="text" name="事件">
			<label>另一种说法:</label>
			<input class="form-control" type="text" name="另一种说法">
		</div>
		<input class="btn btn-primary" type="submit" value="提交生成">
	</form> 
<?php
if(!empty($_POST)){
$主体=$_POST['主体'];
$事件=$_POST['事件'];
$另一种说法=$_POST['另一种说法'];
$文案='
	<div class="panel">
		<div class="panel-body">
			<p>&#12288;&#12288;'.$主体.$事件.'是怎么回事呢？'.$主体.'相信大家都很熟悉，但是'.$主体.$事件.'是怎么回事呢，下面就让小编带大家一起了解吧。<br>
			&#12288;&#12288;'.$主体.$事件.'，其实就是'.$另一种说法.'，大家可能会很惊讶'.$主体.'怎么会'.$事件.'呢？但事实就是这样，小编也感到非常惊讶！<br>
			&#12288;&#12288;这就是关于'.$主体.$事件.'的事情了，大家有什么想法呢，欢迎在评论区告诉小编起讨论哦！</p>
		</div>
	</div>';
echo $文案;
}
?>
</div>
</body>
</html>