<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title>弘讯云购</title>
    <meta name="description" content="弘讯云购，就是指只需1元就有机会获得一件商品，好玩有趣，不容错过。" />
    <meta name="keywords" content="弘讯云购,1元云购,1元,一元,1元购,1元购物,一元购,一元购物" />
    <link href="/Public/shouye/oenpay.css" rel="stylesheet">
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
	  				<a href="<?php echo U('index/lists')?>"><span class="icon icon-star-empty"></span>全部商品</a>

	  				<a href="<?php echo U('index/lists')?>"><span class="icon icon-tablet"></span>手机平板</a><a href="/index.php/home/index/lists?id=<?php echo ($vo["g_id"]); ?>"><span class="icon icon-desktop"></span>电脑办公</a><a href="/weiyigou/index.php?s=/list/index/id/9"><span class="icon icon-camera-1"></span>数码影音</a><a href="/weiyigou/index.php?s=/list/index/id/10"><span class="icon icon-women"></span>女性时尚</a><a href="/weiyigou/index.php?s=/list/index/id/11"><span class="icon icon-food"></span>美食天地</a><a href="/weiyigou/index.php?s=/list/index/id/12"><span class="icon icon-fashion"></span>潮流新品</a><a href="/weiyigou/index.php?s=/list/index/id/13"><span class="icon icon-th"></span>其他商品</a>				</div>
  			</div>
            <?php if(is_array($guide)): $i = 0; $__LIST__ = $guide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="navbar-class"><a href="/index.php/Home/<?php echo ($vo["link"]); ?>"><?php echo ($vo["name"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
	</div>
</div>
	  	<!-- 导航结束 -->
	<div class="top-backs">
	  	<div class="container">
			<!-- 所在位置 - 开始 -->
			<div class="w-dir"><a href="<?php echo U('index/index')?>">首页</a> &gt; 所有商品</div>
			<!-- 所在位置 - 结束 -->


			<!-- 所有分类 - 开始 -->
			<div class="all-class">
				<div class="all-class-title">所有分类 </div>
				<div class="all-class-nav active">
					<a href="<?php echo U('index/lists')?>">
						<span>
							<i class="icon icon-star-empty first"></i>
							<i class="icon icon-star-empty second"></i>
						</span>
						<b>所有商品</b>
					</a>
				</div>
				<!-- <?php if(is_array($re)): $i = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
				<div class="all-class-nav ">
					<?php if(is_array($re)): $i = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/index.php/home/index/lists?id=<?php echo ($vo["cate_id"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?> 
						<span>
							<i class="icon icon-tablet first"></i>
							<i class="icon icon-tablet second"></i>
						</span>
						<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><b><?php echo ($vo["goods_title"]); ?></b><?php endforeach; endif; else: echo "" ;endif; ?> 
					</a>
				</div>
				<!--<?php endforeach; endif; else: echo "" ;endif; ?>  -->
			<!-- 所有分类 - 结束 -->
	  	</div>

  	</div>

  	<div class="container">
  		<div class="desc">
  			排序：
  			<a href="#" class="inline active" order="shop.hits|desc">人气商品</a>
  			<a href="#" class="inline" order="period.number/shop.price*100|desc">剩余人次</a>
  			<a href="#" class="inline" order="id|desc">最新商品</a>
  			<a href="#" class="inline" order="shop.price|asc">总需人次 <span class="icon icon-angle-down"></span></a>
  			<a href="#" class="inline" order="shop.price|desc">总需人次 <span class="icon icon-angle-up"></span></a>
  		</div>
  	</div>

  	<div class="container" id="shoplist">
  		<!-- 产品列表开始 -->
  		<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="ls-product-list">
			<div class="topimg"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><img src="/<?php echo ($vo["filename"]); ?>"></a></div>
            <div class="reco-ls"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><?php echo ($vo["g_name"]); ?></a></div>
			<div class="reco-ls huise">总需：6480 人次</div>
				<div class="progress">
				    <span class="orange" style="width: 0%;"></span>
				</div>
			<div class="reco-nb huise">
				<div class="reco-lnb">0<br>已参与人次</div>
				<div class="reco-rnb">6480<br>剩余人次</div>
			</div>
			            <div class="reco-btn"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>" class="btn btn-pink">立即夺宝</a>
		            </div>  		 
  		</div><?php endforeach; endif; else: echo "" ;endif; ?>  
		<!-- 产品列表结束 -->
  	</div>
  	<div class="message-fixed">
		<div id="moquu_top">
			<div class="icons">
				<span class="top"></span>
				<b>返回顶部</b>
			</div>
		</div>
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
        };
        var htmltype='shoplist',pos=2;
    </script>;
	<script src="/Public/index/js/jquery.min.js"></script>
	<script src="/Public/index/js/jquery.cxscroll.min.js"></script>
	<script src="/Public/Static/think.js"></script>
	<script src="/Public/index/js/script.js"></script>
	<!--[if lt IE 9]>
	<script src="/weiyigou/Template/Web/js/jquery.pseudo.js"></script>
	<![endif]-->
  </body>
</html>