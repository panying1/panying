<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/all.css"/>
		<link rel="stylesheet" type="text/css" href="css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>首页</title>
	</head>

	<body>
		<div class="header">
			@if(empty($_SESSION['name']))
			<h5>欢迎<font color='red'><?php echo Session::get('name');  ?></font>登陆</h5>
			@else
			<h5欢迎***登陆></h5>
			@endif
			<span>优智源</span>
			<a href="user"><span class="user"><i class="iconfont icon-person"></i></span></a>
		</div>
		<!--<div class="banner autoplay">
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
		</div>-->
		<div class="banner swiper-container">
            <div class="swiper-wrapper">
            	<?php foreach($date as $v){?>
                <div class="swiper-slide"><a href="<?php echo $v['path']?>"><img class="swiper-lazy" data-src="<?php echo $v['filename']?>" height='400' alt=""></a></div>
                <?php }?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
		<div class="menu">			
			<ul class="clearfix">
				<?php foreach ($date3 as $v) {?>
				<li>
					<a href="<?php echo $v['url']?>">
						<img src="<?php echo $v['filename']?>">
						<p class="menu-txt"><?php echo $v['name']?></p>
					</a>
				</li>
				<?php }?>
			</ul>			
		</div>
		<?php foreach($date1 as $v){?>
		<div class="brief">
			<h3 class="brief-tit"><?php echo $v['title']?></h3>
			<div class="brirf-content clearfix">
				<div class="bc-left fl">
					<img src="<?php echo $v['filename']?>">
				</div>
				<div class="bc-right fr">
					<?php echo $v['content']?>
				</div>
			</div>
		</div>
		<?php }?>
		<?php foreach($date2 as $v){?>
		<dl class="news">
			<dt class="news-tit"><?php echo $v['title']?></dt>
			<dd class="news-content clearfix">
				<div class="nc-left fl">
					<img src="<?php echo $v['filename']?>">
				</div>
				<div class="nc-right fr">
					<a class="ncr-top"><?php echo $v['content']?>
					</a>
					<span class="nc-time"><?php echo $v['time']?></span>
				</div>
			</dd>
			<dd class="news-content clearfix">
				<div class="nc-left fl">
					<img src="<?php echo $v['filename']?>">
				</div>
				<div class="nc-right fr">
					<a class="ncr-top"><?php echo $v['content']?>
					</a>
					<span class="nc-time"><?php echo $v['time']?></span>
				</div>
			</dd>
		</dl>
		<?php }?>
		<div class="footer">
			<ul class="footer-page clearfix">
				<li class="page-item active">
					<a href="index1">
						<i class="iconfont icon-index"></i>
						<p>首页</p>
					</a>
				</li>
				<li class="page-item">
					<a href="entrance">
						<i class="iconfont icon-computer"></i>
						<p>自助入学</p>
					</a>
				</li>
				<li class="page-item">
					<a href="ask">
						<i class="iconfont icon-ask"></i>
						<p>咨询帮助</p>
					</a>
				</li>
				<li class="page-item">
					<a href="user">
						<i class="iconfont icon-person1"></i>
						<p>个人中心</p>
					</a>
				</li>
			</ul>
		</div>
		<script src="js/jquery.min.js"></script>
	    <script src="js/fastclick.js"></script>
		<script src="js/slick.min.js"></script>
		
		<script src="js/rem.js"></script>
		<script src="js/basic.js"></script>
		<script src="js/swiper.jquery.min.js"></script>
		<script>
			$(function() {
				$('.autoplay').slick({
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 2000,
				   dots:true,
				});
			});
		</script>
		<script >
		    $(function () {
		        var banner = new Swiper('.banner',{
		            autoplay: 5000,
		            pagination : '.swiper-pagination',
		            paginationClickable: true,
		            lazyLoading : true,
		            loop:true
		        });		
		    });
		</script>
		<script>
		$(function(){
			var baseurl="http://localhost/xiao/tpp/index.php/Home/index/";
			var imgurl=baseurl + "index?callback=?";
			$.getJSON(imgurl,function(data){
				console.log(data);
			});
		});
		</script>
	</body>
</html>