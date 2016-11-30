<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>瑞锋科技</title>
    <meta name="description" content="弘讯云购，就是指只需1元就有机会获得一件商品，好玩有趣，不容错过。">
    <meta name="keywords" content="弘讯云购,1元云购,1元,一元,1元购,1元购物,一元购,一元购物">
    <link href="/Public/shouye/oenpay.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/Public/shouye/header.css">
    <!--[if IE 6]>
    <script type="text/javascript" src="/Public/shouye/js/iepng.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/Public/shouye/index.css">
    <script type="text/javascript" src="/Public/shouye/JQuery1.js"></script>
    <script type="text/javascript" src="/Public/shouye/Index.js"></script>
    <script language="javascript" type="text/javascript" src="/Public/shouye/Bottom.js"></script>
    <script language="javascript" type="text/javascript" src="/Public/shouye/BottomFun.js">

    </script><script language="javascript" type="text/javascript" src="/Public/shouye/Comm.js"></script>
    <script language="javascript" type="text/javascript" src="/Public/shouye/CartComm.js"></script>
    <script language="javascript" type="text/javascript" src="/Public/shouye/IndexFun.js"></script>
    <script language="javascript" type="text/javascript" src="/Public/shouye/AjaxFun.js"></script>
    <script language="javascript" type="text/javascript" src="/Public/shouye/Parabola.js"></script>
    <script language="javascript" type="text/javascript" src="/Public/shouye/indexLotteryFun.js"></script>
    <!--[if lt IE 8]>
    <style type="text/css">
        .searchs {float:left;width:620px}
        .searchs>form {float:left;width:608px;height:35px;display:block}
        .searchs>.hot-search {float:left;display:block;width:608px}
    </style>
    <![endif]-->
    <style type="text/css">#kf-content-div a,
    #kf-content-div p {
        border: 0px !important;
        padding: 0px !important;
        margin: 0px !important;
    }

    #kf-wiki-div a:hover,
    #kf-content-div a:focus {
        text-decoration: none !important;
    }

    #kf-wiki-div a {
        text-decoration: none !important;
        color: #0645AD !important;
        background: none repeat scroll 0% 0% transparent !important;
    }

    #kf-wiki-div dt {
        margin-bottom: 0.1em !important;
        font-weight: bold !important;
    }

    #kf-wiki-div dd {
        margin-left: 1.6em !important;
        margin-bottom: 0.1em !important;
    }

    /**************/
    #kf-my-add-btn {
        display: none;
        height: 18px;
        width: 18px;
        position: fixed;
        z-index: 2147483647;
        line-height: 18px;
        text-decoration: none;
        font: bold 12px/25px Arial;
        color: rgba(62, 87, 6, 0.53);
        background: -moz-linear-gradient(center top, rgba(165, 205, 78, 1) 0%, rgba(107, 143, 26, 1) 100%);
        opacity: 0.55;
        text-shadow: 1px 1px 1px rgba(255, 255, 255, .22);
        border-radius: 18px;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, .29), inset 1px 1px 1px rgba(255, 255, 255, .44);
        transition: all 0.15s ease;
    }

    #kf-my-add-btn {
        color: rgba(62, 87, 6, 0.53);
        opacity: 0.55;
    }

    #kf-my-add-btn:hover {
        color: rgba(62, 87, 6, 1);
        opacity: 1;
    }

    #kf-add-loading-img {
        display: none;
        height: 24px;
        width: 24px;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 2147483647;
        border-radius: 24px;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.29), 1px 1px 1px rgba(255, 255, 255, 0.24) inset;
    }

    #kf-content-div {
        opacity: 0;
        display: none;
        width: 320px;
        position: fixed;
        right: 20px;
        bottom: -190px;
        z-index: 2147483647;
        font: normal 12px/25px Arial, sans-serif;
        color: #222;
        background: transparent;
    }

    #kf-top-div {
        height: 40px;
        width: 320px;
        background: rgba(0, 0, 0, .05);
        border-radius: 20px 20px 0px 0px;
        line-height: 40px;
        text-align: center;
    }

    #kf-wiki-tab {
        width: 160px;
        color: rgba(255, 255, 255, .88);
        text-decoration: none;
        background: rgba(0, 152, 249, .6);
        float: left;
        font-size: 1em;
        border-radius: 20px 20px 0px 0px;
    }

    #kf-translator-tab {
        width: 160px;
        color: rgba(0, 0, 0, 0.25);
        text-decoration: none;
        background: transparent;
        font-size: 1em;
        float: left;
        border-radius: 20px 20px 0px 0px;
    }

    #kf-frame-div {
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.33);
        text-align: left;
    }

    #kf-trans-div{
        font-weight: bold;width:300px;height:auto;background:rgba(233, 233, 233, 1);opacity:.8;padding:10px;max-height:190px;overflow:auto;
    }

    #kf-wiki-div {
        width: 300px;
        max-height: 190px;
        padding: 10px;
        background: #E9E9E9;
        opacity: 0.8;
        border: 0px;
        overflow: auto;
    }

    /*******/
    </style></head>
<body>
<!--[if lt IE 9]>
<div class="chrome">您的浏览器版本太低啦~请升级您的浏览器。本站推荐<a href="http://liulanqi.baidu.com/" class="a1" target="_blank">百度浏览器</a> <a href="http://liulanqi.baidu.com/" class="a1" target="_blank">点击下载</a></div>
<![endif]-->
<div class="top-line">
    <div class="g-wrap">
        <div class="tl-left">欢迎来瑞锋云购！</div>
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
            <div class="logo"><img src="/Public/images/logo.png"></div>
            <div class="top-people"></div>
        </div>
    </div>
    <!-- LOGO 结束 -->
    <!-- 导航开始 -->
    <div class="navbar category nav-fixed">
        <div class="container sNav">
            <div class="navbar-all-class class-hidden">
                <a href="#">全部商品分类</a>
                <div class="left-class left-cl-hidden">
                    <a href="<?php echo U('index/lists')?>"><span class="icon icon-star-empty"></span>全部商品</a>
                    <a href="<?php echo U('index/lists')?>"><span class="icon icon-tablet"></span>手机平板</a>
                    <a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/8"><span class="icon icon-desktop"></span>电脑办公</a>
                    <a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/9"><span class="icon icon-camera-1"></span>数码影音</a>
                    <a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/10"><span class="icon icon-women"></span>女性时尚</a>
                    <a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/11"><span class="icon icon-food"></span>美食天地</a>
                    <a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/12"><span class="icon icon-fashion"></span>潮流新品</a>
                    <a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/13"><span class="icon icon-th"></span>其他商品</a>				</div>
            </div>
            <?php if(is_array($guide)): $i = 0; $__LIST__ = $guide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="navbar-class"><a href="/index.php/Home/<?php echo ($vo["link"]); ?>"><?php echo ($vo["name"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<div class="top-backs">

    <div class="container">
        <!-- 左侧分类开始 -->
        <div class="left-class">
            <a href="http://localhost/shiyi/yyy/index.php?s=/list/index"><span class="icon icon-star-empty"></span>全部商品</a>
            <a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/4"><span class="icon icon-tablet"></span>手机平板</a><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/8"><span class="icon icon-desktop"></span>电脑办公</a><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/9"><span class="icon icon-camera-1"></span>数码影音</a><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/10"><span class="icon icon-women"></span>女性时尚</a><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/11"><span class="icon icon-food"></span>美食天地</a><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/12"><span class="icon icon-fashion"></span>潮流新品</a><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/13"><span class="icon icon-th"></span>其他商品</a>			</div>
        <!-- 左侧分类结束 -->
        <!-- silde 开始 -->
        <div class="silde">
            <div id="focus">
                <ul style="left: -730px; width: 2920px;">
                    <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["ad_url"]); ?>" target="_blank"><img src="/<?php echo ($vo["ad_img"]); ?>" alt=""></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <!-- silde 结束 -->
        <!-- 推荐开始 -->
        <div class="notice">
            <h4>关于春节发货通知</h4>
            <div><p>由于春节快递业放假导致期间无法发货，</p><p>现在发货已经全面回复中奖用户还未填写联系方式的请尽快填写联系方式</p><p>以便第一时间收到奖品</p></div>
            <i><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/17" class="a3">查看详细&gt;&gt;</a></i>
            <span><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/16">关于中奖发货时间的说明</a></span>
            <span><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/15">关于供货渠道的说明</a></span>
        </div>
        <!-- 推荐结束 -->
    </div>
</div>

    <div class="container">

        <!-- 最新揭晓开始 -->
        <div class="g-wrap w1190">
            <!--最新揭晓-->
            <div class="g-title">
                <h3 class="fl"><i></i>最新揭晓</h3>
                <div class="m-other fl">
                    <a href="http://www.1yyg.com/map.html" target="_blank" title="看看附近都有谁获得了商品？"><em></em>看看附近都有谁获得了商品？</a>
                </div>
                <div class="fr z-total">
                    <a href="http://www.1yyg.com/lottery/m1.html" target="_blank">共揭晓商品&nbsp;<em id="em_lotcount" class="orange">8013990</em>&nbsp;个&nbsp;<i class="f-tran">&gt;&gt;</i></a>
                </div>
            </div>
            <div class="g-list clrfix" style="border-left: medium none; border-right: medium none; width: 1190px;">

                <ul id="ul_Lottery" style="width: 1289px; margin-left: 0px;">
                    <li id="9371774" class="current"><dl class="m-in-progress"><dt>
                     <a href="http://www.1yyg.com/product/9371774.html" target="_blank" title="小米（MIUI）红米4A 16GB 全网通 4G手机"><img alt="小米（MIUI）红米4A 16GB 全网通 4G手机" src="1%E5%85%83%E4%BA%91%E8%B4%AD%20-%20%E6%83%8A%E5%96%9C%E6%97%A0%E9%99%90%21_files/20161108092017740.jpg"></a></dt><dd class="u-name">
                     <a href="http://www.1yyg.com/product/9371774.html" title="(第11278云)小米（MIUI）红米4A 16GB 全网通 4G手机">(第11278云)小米（MIUI）红米4A 16GB 全网通 4G手机</a></dd><dd class="gray">价值：￥598.00</dd><dd class="u-time" id="dd_time"><em>揭晓倒计时</em><span><b>02</b> : <b>39</b> : <b><i>1</i><i>5</i></b></span></dd></dl><s class="transparent-png"></s></li>
                    <li id="9449461" class="current"><dl class="m-in-progress"><dt>
                    <a href="http://www.1yyg.com/product/9449461.html" target="_blank" title="平安银行 招财进宝金章 Au9999 5g"><img alt="平安银行 招财进宝金章 Au9999 5g" src="1%E5%85%83%E4%BA%91%E8%B4%AD%20-%20%E6%83%8A%E5%96%9C%E6%97%A0%E9%99%90%21_files/20151026181548493.jpg"></a></dt><dd class="u-name">
                    <a href="http://www.1yyg.com/product/9449461.html" title="(第415881云)平安银行 招财进宝金章 Au9999 5g">(第415881云)平安银行 招财进宝金章 Au9999 5g</a></dd><dd class="gray">价值：￥1579.00</dd><dd class="u-time" id="dd_time"><em>揭晓倒计时</em><span><b>02</b> : <b>35</b> : <b><i>1</i><i>5</i></b></span></dd></dl><s class="transparent-png"></s></li>
                    <li id="9337401" class="current"><dl class="m-in-progress"><dt>
                    <a href="http://www.1yyg.com/product/9337401.html" target="_blank" title="艾美特（Airmate）HC22132-W 欧式快热炉取暖器/电暖器/电暖气"><img alt="艾美特（Airmate）HC22132-W 欧式快热炉取暖器/电暖器/电暖气" src="1%E5%85%83%E4%BA%91%E8%B4%AD%20-%20%E6%83%8A%E5%96%9C%E6%97%A0%E9%99%90%21_files/20161118110440733.jpg"></a></dt><dd class="u-name">
                    <a href="http://www.1yyg.com/product/9337401.html" title="(第949云)艾美特（Airmate）HC22132-W 欧式快热炉取暖器/电暖器/电暖气">(第949云)艾美特（Airmate）HC22132-W 欧式快热炉取暖器/电暖器/电暖气</a></dd><dd class="gray">价值：￥329.00</dd><dd class="u-time" id="dd_time"><em>揭晓倒计时</em><span><b>02</b> : <b>35</b> : <b><i>1</i><i>4</i></b></span></dd></dl><s class="transparent-png"></s></li>
                    <li id="9469926" class="current"><dl class="m-in-progress"><dt>
                    <a href="http://www.1yyg.com/product/9469926.html" target="_blank" title="悦胜 鲜活波士顿大龙虾 900-1100g/只 加拿大进口"><img alt="悦胜 鲜活波士顿大龙虾 900-1100g/只 加拿大进口" src="1%E5%85%83%E4%BA%91%E8%B4%AD%20-%20%E6%83%8A%E5%96%9C%E6%97%A0%E9%99%90%21_files/20161124174841783.jpg"></a></dt><dd class="u-name">
                    <a href="http://www.1yyg.com/product/9469926.html" title="(第13云)悦胜 鲜活波士顿大龙虾 900-1100g/只 加拿大进口">(第13云)悦胜 鲜活波士顿大龙虾 900-1100g/只 加拿大进口</a></dd><dd class="gray">价值：￥368.00</dd><dd class="u-time" id="dd_time"><em>揭晓倒计时</em><span><b>02</b> : <b>33</b> : <b><i>1</i><i>4</i></b></span></dd></dl><s class="transparent-png"></s></li>
                    <li id="9404265" class="current current2"><dl class="m-in-progress"><dt>
                    <a href="http://www.1yyg.com/product/9404265.html" target="_blank" title="苹果（Apple）iPhone 6s 32G版 4G手机"><img alt="苹果（Apple）iPhone 6s 32G版 4G手机" src="1%E5%85%83%E4%BA%91%E8%B4%AD%20-%20%E6%83%8A%E5%96%9C%E6%97%A0%E9%99%90%21_files/20160926172337982.jpg"></a></dt><dd class="u-name">
                    <a href="http://www.1yyg.com/product/9404265.html" title="(第69346云)苹果（Apple）iPhone 6s 32G版 4G手机">(第69346云)苹果（Apple）iPhone 6s 32G版 4G手机</a></dd><dd class="gray">价值：￥4499.00</dd><dd class="u-time" id="dd_time"><em>揭晓倒计时</em><span><b>02</b> : <b>30</b> : <b><i>1</i><i>4</i></b></span></dd></dl><s class="transparent-png"></s></li>

 </ul>
            </div>
        <!-- 最新揭晓结束 -->
    </div>
</div>

<div class="container">
    <!-- 最新商品开始 -->
    <div class="product-news">
        <div class="list-title">
            <h3>最热商品</h3>
        </div>
        <div class="product-list">
            <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pro-list">
            <div class="float-title ten">限购专区</div>
                <div class="topimg"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>">
                    <img src="/<?php echo ($vo["filename"]); ?>"></a>
                </div>
            <div class="reco-ls"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><?php echo ($vo["g_name"]); ?></a></div>
            <div class="reco-ls huise">总需：<?php echo ($vo["partake_people"]); ?> 人次</div>
            <div class="progress">
                <span class="orange" style="width:0%;"></span>
            </div>
            <div class="reco-nb huise">
                <div class="reco-lnb"><br>已参与<?php echo ($vo["can"]); ?>人次</div>
                <div class="reco-rnb"><br>剩余<?php echo ($vo["people"]); ?>人次</div>
            </div>
            <div class="reco-btn">
                <a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>" class="btn btn-pink">立即夺宝</a>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
 </div>
    <!-- 最新商品结束 -->

    <!-- 狗屎运开始 -->
    <div class="shit scroll_vertical pic_list_3">
        <h3>好运榜</h3>
        <div class="box">
            <div class="list">
            </div>
        </div>
        <div class="shit-bottom">
            看看谁的狗屎运最好！
        </div>
    </div>
    <!-- 狗屎运结束 -->

    <!-- 产品列表开始 -->

    <div class="index-pro-list">

        <div class="list-title">
            <h3>手机平板</h3>
            <div class="mores"><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/4">更多商品，点击查看...</a></div>
        </div>

        <div class="product-list-all">
            <?php if(is_array($re)): $i = 0; $__LIST__ = $re;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pro-list-all">
            <div class="topimg"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><img src="/<?php echo ($vo["filename"]); ?>"></a></div>
            <div class="reco-ls"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><?php echo ($vo["g_name"]); ?></a></div>
            <div class="reco-ls huise">总需：8090 人次</div>
            <div class="progress">
                <span class="orange" style="width: 0%;"></span>
            </div>
            <div class="reco-nb huise">
                <div class="reco-lnb">0<br>已参与人次</div>
                <div class="reco-rnb">8090<br>剩余人次</div>
            </div>
            <div class="reco-btn"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>" class="btn btn-pink">立即夺宝</a></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>

    <div class="index-pro-list">
    <div class="list-title">
        <h3>电脑办公</h3>
        <div class="mores"><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/8">更多商品，点击查看...</a></div>
    </div>
    <div class="product-list-all">
        <?php if(is_array($dian)): $i = 0; $__LIST__ = $dian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pro-list-all">
            <div class="topimg"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><img src="/<?php echo ($vo["filename"]); ?>"></a></div>
            <div class="reco-ls"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><?php echo ($vo["g_name"]); ?></a></div>
            <div class="reco-ls huise">总需：99 人次</div>
            <div class="progress">
                <span class="orange" style="width: 0%;"></span>
            </div>
            <div class="reco-nb huise">
                <div class="reco-lnb">0<br>已参与人次</div>
                <div class="reco-rnb">99<br>剩余人次</div>
            </div>
            <div class="reco-btn"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>" class="btn btn-pink">立即夺宝</a></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
    <div class="index-pro-list">
    <div class="list-title">
        <h3>数码影音</h3>
        <div class="mores"><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/9">更多商品，点击查看...</a></div>
    </div>
    <div class="product-list-all">
        <?php if(is_array($shu)): $i = 0; $__LIST__ = $shu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pro-list-all">
            <div class="float-title ten">限购专区</div>
            <div class="topimg"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><img src="/<?php echo ($vo["filename"]); ?>"></a></div>
            <div class="reco-ls"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><?php echo ($vo["g_name"]); ?></a></div>
            <div class="reco-ls huise">总需：5100 人次</div>
            <div class="progress">
                <span class="orange" style="width: 0%;"></span>
            </div>
            <div class="reco-nb huise">
                <div class="reco-lnb">0<br>已参与人次</div>
                <div class="reco-rnb">5100<br>剩余人次</div>
            </div>
            <div class="reco-btn"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>" class="btn btn-pink">立即夺宝</a></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
    <div class="index-pro-list">
    <div class="list-title">
        <h3>女性时尚</h3>
        <div class="mores"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>">更多商品，点击查看...</a></div>
    </div>
    <div class="product-list-all">
        <?php if(is_array($nv)): $i = 0; $__LIST__ = $nv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pro-list-all">
            <div class="topimg"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><img src="/<?php echo ($vo["filename"]); ?>"></a></div>
            <div class="reco-ls"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><?php echo ($vo["g_name"]); ?></a></div>
            <div class="reco-ls huise">总需：96 人次</div>
            <div class="progress">
                <span class="orange" style="width: 0%;"></span>
            </div>
            <div class="reco-nb huise">
                <div class="reco-lnb">0<br>已参与人次</div>
                <div class="reco-rnb">96<br>剩余人次</div>
            </div>
            <div class="reco-btn"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>" class="btn btn-pink">立即夺宝</a></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
    <div class="index-pro-list">
    <div class="list-title">
        <h3>美食天地</h3>
        <div class="mores"><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/11">更多商品，点击查看...</a></div>
    </div>
    <div class="product-list-all">
        <?php if(is_array($mei)): $i = 0; $__LIST__ = $mei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pro-list-all">
            <div class="topimg"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><img src="/<?php echo ($vo["filename"]); ?>"></a></div>
            <div class="reco-ls"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><?php echo ($vo["g_name"]); ?></a></div>
            <div class="reco-ls huise">总需：128 人次</div>
            <div class="progress">
                <span class="orange" style="width: 0%;"></span>
            </div>
            <div class="reco-nb huise">
                <div class="reco-lnb">0<br>已参与人次</div>
                <div class="reco-rnb">128<br>剩余人次</div>
            </div>
            <div class="reco-btn"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>" class="btn btn-pink">立即夺宝</a></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div><div class="index-pro-list">
    <div class="list-title">
        <h3>潮流新品</h3>
        <div class="mores"><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/12">更多商品，点击查看...</a></div>
    </div>
    <div class="product-list-all">
        <?php if(is_array($chao)): $i = 0; $__LIST__ = $chao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pro-list-all">
            <div class="topimg"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><img src="/<?php echo ($vo["filename"]); ?>"></a></div>
            <div class="reco-ls"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><?php echo ($vo["g_name"]); ?></a></div>
            <div class="reco-ls huise">总需：399 人次</div>
            <div class="progress">
                <span class="orange" style="width: 0%;"></span>
            </div>
            <div class="reco-nb huise">
                <div class="reco-lnb">0<br>已参与人次</div>
                <div class="reco-rnb">399<br>剩余人次</div>
            </div>
            <div class="reco-btn"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>" class="btn btn-pink">立即夺宝</a></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div><div class="index-pro-list">
    <div class="list-title">
        <h3>其他商品</h3>
        <div class="mores"><a href="http://localhost/shiyi/yyy/index.php?s=/list/index/id/13">更多商品，点击查看...</a></div>
    </div>
    <div class="product-list-all">
        <?php if(is_array($qi)): $i = 0; $__LIST__ = $qi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pro-list-all">
            <div class="topimg"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><img src="/<?php echo ($vo["filename"]); ?>"></a></div>
            <div class="reco-ls"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>"><?php echo ($vo["g_name"]); ?></a></div>
            <div class="reco-ls huise">总需：110 人次</div>
            <div class="progress">
                <span class="orange" style="width: 0%;"></span>
            </div>
            <div class="reco-nb huise">
                <div class="reco-lnb">0<br>已参与人次</div>
                <div class="reco-rnb">110<br>剩余人次</div>
            </div>
            <div class="reco-btn"><a href="/index.php/home/cart/cart?id=<?php echo ($vo["g_id"]); ?>" class="btn btn-pink">立即夺宝</a></div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
     </div>
</div>		<!-- 产品列表结束 -->

    <!-- 晒单分享开始 -->
    <div class="share">
        <div class="list-title">
            <h3>晒单分享</h3>
            <div class="mores"><a href="http://localhost/shiyi/yyy/index.php?s=/user/displays">更多分享，点击查看...</a></div>
        </div>
        <div class="share-nav scroll_vertical pic_list_4">
            <div class="box">
                <div class="list">
                </div>
            </div>
        </div>
    </div>
    <!-- 晒单分享结束 -->
</div>
<div class="message-fixed">
    <div id="moquu_top" style="display: block;">
        <div class="icons">
            <span class="top"></span>
            <b>返回顶部</b>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="bottom">
    <div class="container">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="bot-left">
            <h3>

                <span class="icon icon-leanpub"></span>
                <?php echo ($vo["name"]); ?>
            </h3>
            <ul>
                <li><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a></li>
            </ul>

        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <!--<div class="bot-left">-->
            <!--<h3>-->
                <!--<span class="icon icon-dunpai"></span>-->
                <!--欢乐保障-->
            <!--</h3>-->
            <!--<ul>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/5">公平保障</a>-->
                <!--</li>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/6">公正保障</a></li>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/7">公开保障</a></li>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/8">安全支付</a></li>-->
            <!--</ul>-->
        <!--</div>-->
        <!--<div class="bot-left">-->
            <!--<h3>-->
                <!--<span class="icon icon-truck"></span>-->
                <!--商品配送-->
            <!--</h3>-->
            <!--<ul>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/9">配送费用</a></li>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/10">商品验收与签收</a></li>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/11">发货未收到商品</a></li>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/12">商品配送</a></li>-->
            <!--</ul>-->
        <!--</div>-->
        <!--<div class="bot-left">-->
            <!--<h3>-->
                <!--<span class="icon icon-github"></span>-->
                <!--关于我们-->
            <!--</h3>-->
            <!--<ul>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/13">关于我们</a></li>-->
                <!--<li><a href="http://localhost/shiyi/yyy/index.php?s=/news/more/id/14">公司证件</a></li>			</ul>-->
        <!--</div>-->
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
            Copyright © 2016 瑞锋云购  版权所有 		</div>
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
    var htmltype,servertime=1479859447;
</script>
<script src="/Public/shouye/jquery_002.js"></script>
<script src="/Public/shouye/simplefoucs.js"></script>
<script src="/Public/shouye/jquery.js"></script>
<script src="/Public/shouye/jquery_003.js"></script>
<script src="/Public/shouye/think.htm"></script>
<script src="/Public/shouye/script.js"></script>
<!--[if lt IE 9]>
<script src="j/shiyi/yyy/Template/Web/s/jquery.pseudo.js"></script>
<![endif]-->

<div id="kf-my-tips" style="position: fixed;" class="tipso_style"></div><a id="kf-my-add-btn" name="ke-my-add-btn" href="javascript:void(0);" style="background-image: url(&quot;data:image/gif;base64,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&quot;); background-size: 18px 18px;"></a><div id="kf-add-loading-img" style="background-image: url(&quot;data:image/gif;base64,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&quot;);"></div><div style="display: none; right: 20px; bottom: -90px;" id="kf-content-div"><div id="kf-top-div"><a id="kf-wiki-tab" href="javascript:void(0)" style="color: rgba(0, 0, 0, 0.25); background: transparent none repeat scroll 0% 0%;">WIKIPEDIA</a><a id="kf-translator-tab" href="javascript:void(0)" style="color: rgba(255, 255, 255, 0.88); background: rgba(56, 189, 15, 0.6) none repeat scroll 0% 0%;">	TRANSLATOR</a></div><div id="kf-frame-div"><div id="kf-trans-div" style="font-size: 1em;">So happy</div><div id="kf-wiki-div" name="kf-wiki-div" style="display: none; font-size: 1em;"></div></div></div></body></html>