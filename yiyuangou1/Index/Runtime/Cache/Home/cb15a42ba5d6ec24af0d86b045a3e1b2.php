<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title>一元云购</title>
    <meta name="description" content="一元云购，就是指只需1元就有机会获得一件商品，好玩有趣，不容错过。" />
    <meta name="keywords" content="1元云购,1元,一元,1元购,1元购物,一元购,一元购物" />
    <link href="/yiyuangou/Public/index/css/oenpay.css" rel="stylesheet">
    <link href="/yiyuangou/Public/index/css/login.css" rel="stylesheet">
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
						<a href="<?php echo U('login/login')?>">请登录</a> 
			<a href="<?php echo U('reg/reg')?>">免费注册</a>		</div>
	</div>
</div>
<div class="top-back">
	<!-- LOGO 开始 -->
  	<div class="container">
		<div class="logos">
			<div class="logo"><img src="/yiyuangou/Public/index/imgs/logo.png" /></div>
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
			<div class="navbar-class"><a href="/weiyigou/index.php?s=/index/index">首页</a></div>
			<div class="navbar-class"><a href="/weiyigou/index.php?s=/user/announced">最新揭晓</a></div>
			<div class="navbar-class"><a href="/weiyigou/index.php?s=/ten/index/ten/1">十元专区</a></div><div class="navbar-class"><a href="/weiyigou/index.php?s=/ten/index/ten/4">限购专区</a></div>			<div class="navbar-class"><a href="/weiyigou/index.php?s=/user/displays">晒单分享</a></div>
			<div class="navbar-class navbar-message"><a href="/weiyigou/index.php?s=/activity/index">发现</a></div>
			<div class="navbar-class"><a href="/weiyigou/index.php?s=/user/guide">新手引导</a></div>
					</div>
	</div>
</div>
	<div class="cent margin">
		<!-- 分步显示开始 -->			
		<div class="step">
			<ul class="active"> <i>1</i>
				<li></li> <b></b>
				<small>填写账户名</small>
			</ul>
			<ul>
				<i>2</i>
				<li></li>
				<b></b>
				<small>设置新密码</small>
			</ul>
			<ul>
				<i>3</i>
				<li></li>
				<b></b>
				<small>完成</small>
			</ul>
			<span></span>
		</div>
		<!-- 分步显示结束 -->
		<form method="post" action="<?php echo U('pwd/indexok')?>" class="form-user" class="form-user">		
		<div class="input-lse">
			<label>账户名：</label>
			<input type="text" name="username"/>
		</div>
		<div class="input-lse">
			<label>验证码：</label>
			<input type="text" name="passcode"/>
			<span class="yzmimg"><img src="<?php echo U('pwd/verify')?>" class="passcode" /></span>
		</div>
		<div class="input-lse">
			<label></label>
			<input style="border:1px solid #F5F5F5;color:#fff;cursor:pointer;white-space:nowrap;margin:0 auto;background:#F5F5F5;width:auto;height:36px;padding:0 20px;border-radius:5px;line-height:1;display:inline-block;vertical-align:middle;background:#F59C00" type="submit" value="提交">
		</div>
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
			Copyright &copy; 2015 一元云购  版权所有 		</div>
	</div>
</div>
	<script src="/yiyuangou/Public/index/js/jquery.min.js"></script>
	<script type="text/javascript">var tplpath='/yiyuangou/Public'</script>
	<script src="/yiyuangou/Public/Static/layer/layer.js"></script>
	<script src="/yiyuangou/Public/index/js/ajax.js"></script>
	<script src="/yiyuangou/Public/index/js/public.js"></script>
	<!--[if lt IE 9]>
	<script src="/yiyuangou/Public/index/js/jquery.pseudo.js"></script>
	<![endif]-->
  </body>
</html>