<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>报到单</title>
	<body>
		<div class="header">
			<span>报到单</span>
			<a href="index1" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<?php foreach ($date3 as $v) {?>
			<div class="banner">
				<img src="<?php echo $v['filename']?>" height='400px'>
			</div>
		<?php }?>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon  passbg">4</span>
    			<p class="step-txt">报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line2.png"></span>
		</div>
		<?php foreach($date as $v){?>
		<ul class="dorm-book mt3">
			<li class="info-top clearfix">
				<span class="heade-img">
					<img src="<?php echo $v['filename']?>" style="width:60px; height:60px; border-radius:50%">
				</span>
			    <span class="stu-name"><?php echo $v['name']?></span>
			    <span class="code"><img src="<?php echo $v['filename']?>" style="width:120px; height:60px;"></span>
			</li>
			<li class="basic-tit">
			    宿舍基本信息
			</li>		
			<li>
				<span class="book-tit">姓名</span>
		        <span class="info-middle"><?php echo $v['name']?></span>  
			</li>
			<li>
				<span class="book-tit">性别</span>
		        <span class="info-middle"><?php echo $v['sex']?></span>  
			</li>
			<li>
				<span class="book-tit">宿舍号</span>
		        <span class="info-middle"><?php echo $v['home']?></span>  
			</li>
			<li>
				<span class="book-tit">铺位</span>
		        <span class="info-middle"><?php echo $v['bunk']?></span>  
			</li>

		</ul>
		<ul class="dorm-book mt3">
			<li class="basic-tit">
			    抵校登记
			</li>
			<li class="cost clearfix first">
				<span>交通方式</span>
				<span>接站站点</span>
				<span>陪同人数</span>
			</li>
			<li class="cost clearfix">
				<span><?php echo $v['j_type']?></span>
				<span><?php echo $v['zhandian']?></span>
				<span><?php echo $v['ponser']?></span>
			</li>	
		</ul>
		<?php }?>
		<div class="reportcard">
			    <a href="#" class="db ta-center print">打印预览</a>
				<a href="#" class="db ta-center">保存到手机</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/basic.js"></script>	
      <script type="text/javascript" src="js/rem.js"></script>	
	</body>
</html>
