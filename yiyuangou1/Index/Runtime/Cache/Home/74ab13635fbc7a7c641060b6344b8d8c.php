<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title>充值 - 弘讯云购</title>
    <meta name="description" content="弘讯云购，就是指只需1元就有机会获得一件商品，好玩有趣，不容错过。" />
    <meta name="keywords" content="弘讯云购,1元云购,1元,一元,1元购,1元购物,一元购,一元购物" />
    <link href="/Public/pay/oenpay.css" rel="stylesheet">
    <link href="/Public/pay/cart.css" rel="stylesheet">

    <!--[if lt IE 8]>
	<style type="text/css">
		.searchs {float:left;width:620px}
		.searchs>form {float:left;width:608px;height:35px;display:block}
		.searchs>.hot-search {float:left;display:block;width:608px}
	</style>
	<![endif]-->
  </head>
  <body>
    
    <!--[if lt IE 9]>
  	<div class="chrome">您的浏览器版本太低啦~请升级您的浏览器。本站推荐<a href="http://liulanqi.baidu.com/" class="a1" target="_blank">百度浏览器</a> <a href="http://liulanqi.baidu.com/" class="a1" target="_blank">点击下载</a></div>
<![endif]-->
<div class="top-line">
	<div class="g-wrap">
		<div class="tl-left">欢迎来到弘讯云购！</div>
		        <div class="tl-right">
            <a href=""><?php if(session("?username")){?>
                    <a href="<?php echo U('user/index')?>"><font color='red'><?php echo $_SESSION['username']; ?></font></a><a href="<?php echo U('login/loginout')?>">[退出]</a>
                    <?php }else{?>
                    <a href="<?php echo U('login/login')?>">请登录</a><a href="<?php echo U('reg/reg')?>">免费注册</a>
                    <?php }?></a>
                    
        </div>
	</div>
</div>
<div class="top-back">
	<!-- LOGO 开始 -->
  	<div class="container">
		<div class="logos">
			<div class="logo"><img src="/Public/images/logo.png" /></div>
			<div class="top-people"></div>
		</div>
  	</div>
	<!-- LOGO 结束 -->
	<!-- 导航开始 -->
	<div class="navbar category">
		<div class="container sNav">
			<div class="navbar-all-class class-hidden">
  				<a href="#">全部商品分类</a>
  				<div class="left-class left-cl-hidden">
	  				<a href="/weiyigou/index.php?s=/list/index"><span class="icon icon-star-empty"></span>全部商品</a>
	  				<a href="/weiyigou/index.php?s=/list/index/id/4"><span class="icon icon-tablet"></span>手机平板</a><a href="/weiyigou/index.php?s=/list/index/id/8"><span class="icon icon-desktop"></span>电脑办公</a><a href="/weiyigou/index.php?s=/list/index/id/9"><span class="icon icon-camera-1"></span>数码影音</a><a href="/weiyigou/index.php?s=/list/index/id/10"><span class="icon icon-women"></span>女性时尚</a><a href="/weiyigou/index.php?s=/list/index/id/11"><span class="icon icon-food"></span>美食天地</a><a href="/weiyigou/index.php?s=/list/index/id/12"><span class="icon icon-fashion"></span>潮流新品</a><a href="/weiyigou/index.php?s=/list/index/id/13"><span class="icon icon-th"></span>其他商品</a>				</div>
  			</div>
            <?php if(is_array($guide)): $i = 0; $__LIST__ = $guide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="navbar-class"><a href="/index.php/Home/<?php echo ($vo["link"]); ?>"><?php echo ($vo["name"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
	</div>
</div>
  	<div class="container">

		<div class="list-title more-prod cz-title">
			<h3>充值欢乐币 （1元=1弘讯币），可用于夺宝，充值的款项无法退回。</h3>
		</div>
		<form action="/index.php/Home/Pay/zhiok" method="post">
  		<table class="w-table cz-table">
	        <tbody>
	            <tr>
	            	<td><b>充值数量：</b></td>
	            	<td>
	            		<span class="cz-money dollar active">10</span>
	            		<span class="cz-money dollar">20</span>
	            		<span class="cz-money dollar">50</span>
	            		<span class="cz-money dollar">100</span>
	            		<span class="cz-money dollar">200</span>
	            		<span class="cz-money dollar">
	            			<div class="other">其他金额 <input type="text" style="padding: 5px;" name="price_ye" value=""></div>
	            		</span>
	            	</td>
	            </tr>
	            <tr>
	            	<td width="100"><b>支付方式：</b></td>
	            	<td>
				        <div class="pay-table">
				        	<div class="pay-title">
				        		<b class="active">平台支付</b>
				        		<b>借记卡</b>
				        		<b>信用卡</b>
				        	</div>
				        	<div class="pay-nav">
				        		<h5>平台支付</h5>
					</div>
	            	</td>
	            </tr>
	            <tr>
	            	<td></td>
	            	<td>
	            		<input type="submit" class="btn btn-big btn-red paybut" value="立即充值">
	            	</td>
	            </tr>
	        </tbody>
	    </table>
	    <input value="弘讯云购_充值" name="name" >
	    <input value="10" name="price" >
	    </form>
  	</div>

  	<div class="clear"></div>
  	<div class="bottom">
	<div class="container">
		<div class="bot-left">
			<h3>
				<span class="icon icon-leanpub"></span>
				新手指南
			</h3>
			<ul>
				<li><a href="/weiyigou/index.php?s=/news/more/id/1">了解弘讯云购平台</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/2">服务协议</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/3">常见问题</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/4">推广赚钱</a></li>
			</ul>
		</div>
		<div class="bot-left">
			<h3>
				<span class="icon icon-dunpai"></span>
				欢乐保障
			</h3>
			<ul>
				<li><a href="/weiyigou/index.php?s=/news/more/id/5">公平保障</a>
				</li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/6">公正保障</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/7">公开保障</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/8">安全支付</a></li>
			</ul>
		</div>
		<div class="bot-left">
			<h3>
				<span class="icon icon-truck"></span>
				商品配送
			</h3>
			<ul>
				<li><a href="/weiyigou/index.php?s=/news/more/id/9">配送费用</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/10">商品验收与签收</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/11">发货未收到商品</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/12">商品配送</a></li>
			</ul>
		</div>
		<div class="bot-left">
			<h3>
				<span class="icon icon-github"></span>
				关于我们
			</h3>
			<ul>
				<li><a href="/weiyigou/index.php?s=/news/more/id/13">关于我们</a></li>
				<li><a href="/weiyigou/index.php?s=/news/more/id/14">公司证件</a></li>			</ul>
		</div>
		<div class="bot-right">
			<div class="bot-gongping">
				<span class="icon icon-zhngpin"></span> <i>100%正品保证</i>
			</div>
			<div class="bot-gongping">
				<span class="icon icon-gongpin"></span> <i>100%公平公正公开</i>
			</div>
			<div class="bot-gongping">
				<span class="icon icon-gongzheng"></span>
				<i>100%权益保障</i>
			</div>
		</div>

		<div class="copyright">
			Copyright &copy; 2015 弘讯云购  版权所有 		</div>
	</div>
</div>
  	<script type="text/javascript">
        var ThinkPHP = window.Think = {
			"APP"    : "/index.php?s=",
			"PATTEM" : "",
			"DEEP"   : "/",
			"MODEL"  : ["3", "1", ""],
			"VAR"    : ["m", "c", "a"]
        }
    </script>;
	<script src="/Public/index/js/jquery.min.js"></script>
	<script src="/Public/Static/think.js"></script>
	<script src="/Public/Static/layer/layer.js"></script>
	<script src="/Public/pay/pay.js"></script>
	<!--[if lt IE 9]>
	<script src="j/weiyigou/Template/Web/s/jquery.pseudo.js"></script>
	<![endif]-->
  </body>
</html>