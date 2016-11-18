<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="http://localhost/xiao/tpp/Public/css/iconfont/iconfont.css"/>
  <link rel="stylesheet" type="text/css" href="http://localhost/xiao/tpp/Public/css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="http://localhost/xiao/tpp/Public/css/base.css"/>
  <link rel="stylesheet" type="text/css" href="http://localhost/xiao/tpp/Public/css/style.css"/>
  <title>个人中心</title>
	<body class="bge">
		<div class="write-info">
			<span>
				<img src="http://localhost/xiao/tpp/Public/img/no-person.png">
			</span>
			<p>您还没有填写信息哦</p>
			<span class="goin"><i class="iconfont icon-right"></i></span>
		</div>
		<ul class="ask-box">
			<li class="ask-item">
				<a href="user-info.html">
				    <i class="iconfont icon-data"></i>
				    <span class="ask-word">个人信息</span>
				    <span class="goin"><i class="iconfont icon-right"></i></span>
				</a>
			</li>
			<li class="ask-item nobor">
				<a href="changepsw.html">
				    <i class="iconfont icon-changpsw"></i>
				    <span class="ask-word">修改密码</span>
				    <span class="goin"><i class="iconfont icon-right"></i></span>
				</a>
			</li>
			
		</ul>
		<div class="sign-out">
				<a href="#">
					<i class="iconfont icon-logout"></i>
				   <span>退出</span>
				</a>
		</div>
		<div class="footer">
    	<ul class="footer-page clearfix">
    		<li class="page-item">
    			<a href="index.html" class="active">
    				<i class="iconfont icon-index"></i>
    				<p>首页</p>
    			</a>
    		</li>
    		<li class="page-item">
    			<a href="entrance.html">
    				<i class="iconfont icon-computer"></i>
    				<p>自助入学</p>
    			</a>
    		</li>
    		<li class="page-item">
    			<a href="ask.html">
    				<i class="iconfont icon-ask"></i>
    				<p>咨询帮助</p>
    			</a>
    		</li>
    		<li class="page-item active">
    			<a href="user-center.html">
    				<i class="iconfont icon-person1"></i>
    				<p>个人中心</p>
    			</a>
    		</li>
    	</ul>
    </div>
    <div class="outlayer">
    	<div class="tip-box">
    		<h3>退出</h3>
    		<p class="ta-right">
    			  <a href="#" class="ok">确认</a>
    				<a href="#" class="cancel">取消</a>
    		</p>
    	</div>
    	<div class="cover"></div>
    </div>
	 <script src="http://localhost/xiao/tpp/Public/js/jquery.min.js"></script>
		<script src="http://localhost/xiao/tpp/Public/js/slick.min.js"></script>
		<script src="http://localhost/xiao/tpp/Public/js/basic.js"></script>
		<script src="http://localhost/xiao/tpp/Public/js/rem.js"></script>
	</body>
</html>