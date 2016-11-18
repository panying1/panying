<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>我的提问</title>

		<body>
			<div class="header">
				<span>我的提问</span>
				<a href="ask" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<?php foreach ($date1 as $v) {?>
			<div class="banner">
				<img src="<?php echo $v['filename']?>" height='400px'>
			</div>
			<?php }?>
			<div class="contain">
				<div class="myanswer-box">
					<?php foreach($date as $v){?>
						<ul class="myanswer">
							<a href="#">
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word"><?php echo $v['content']?></span>
								<span class="goin"><?php echo $v['time']?></span>
							</li>
							</a>
						</ul>
					<?php }?>
					</div>
				</div>
			</div>

			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>

</html>