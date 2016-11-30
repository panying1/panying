<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title>用户登录 - 一元云购</title>
    <meta name="description" content="一元云购，就是指只需1元就有机会获得一件商品，好玩有趣，不容错过。" />
    <meta name="keywords" content="1元云购,1元,一元,1元购,1元购物,一元购,一元购物" />
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
    
  	<div class="top">
  		<div class="cent">
        <div class="logo"><a href="<?php echo U('index/index')?>" title="一元云购"><img src="/yiyuangou/Public/index/imgs/logo.png" /></a></div>
  			<div class="back-page">
  				<a href="<?php echo U('index/index')?>">返回首页</a>
  			</div>
  		</div>
  	</div>
  	<div class="login-back" style="background:#F5AD00;">
    <form method="post" action="<?php echo U('login/loginok')?>" class="form-user" onsubmit="return checkAll()">
		  <div class="login-background" style="background: url(/yiyuangou/Public/index/imgs/login1.jpg) no-repeat left center;">
        <div class="login-block">
          <h5>登录<small><a href="<?php echo U('reg/reg')?>" class="a1">免费注册</a></small></h5>
          <div class="input-ls">
            <input type="text" name="username" id="email" onblur="checkSmail()" placeholder="请使用注册邮箱" />
            <span id="showsmail"></span>
          </div>
          <div class="input-ls">
            <input type="password" name="password" id="pwd" onblur="checkPwd()" placeholder="登录密码"/>
            <span id="showpwd"></span>
          </div>
          <div class="login-text"><a href="<?php echo U('pwd/index')?>">忘记密码？</a></div>
          <!-- <div class="login-info">请输入帐号</div> -->
          <div class="input-btn"><input type="submit" value="登陆" class="btn btn-big btn-yellow ajax-post"></div>
<!--           <div class="other-login">
            其他登录方式：
          <a class="shareicon shareicon1"><i class="icon icon-weibo"></i></a>
          </div> -->
        </div>

        <div class="login-block qecode-login">
          <div class="qecode" id="login_container">
           
          </div>
          <div class="back-home">
            <img src="/yiyuangou/Public/images/return_03.gif">
          </div>
        </div>

		  </div>
    </form>
  	</div>
    <div class="footer">Copyright &copy; 2015 一元云购  版权所有 </div>
	

	<!--[if lt IE 9]>
	<script src="/weiyigou/Template/Web/js/jquery.pseudo.js"></script>
	<![endif]-->

  <script src="/yiyuangou/Public/index/js/jquery.min.js"></script>
  <script type="text/javascript">var tplpath='/yiyuangou/Public/index'</script>
  <script src="/yiyuangou/Public/index/js/layer.js"></script>
  <script src="/yiyuangou/Public/index/js/ajax.js"></script>
  <!--<script src="/yiyuangou/Public/index/js/public.js"></script>-->
  <script type="text/javascript">
    function $(id){
      return document.getElementById(id);
    }
  </script>
<script type="text/javascript">
  //密码
  function checkPwd(){
    var pwd = $('pwd').value;
    if(pwd == ''){
      $('showpwd').innerHTML = '密码不能为空';
      $('showpwd').style.color = "red";
      return false;
    }
    var reg=/^[0-9A-Za-z]{6,20}$/;
    if(!reg.test(pwd)){
      $('showpwd').innerHTML="<font color='red'>密码为6-20</font>";
      $('showpwd').style.color = "red";
      return false;
    }else{
      $('showpwd').innerHTML = '√';
      $('showpwd').style.color = "green";
      return true;
    }
  }
  //邮箱
  function checkSmail(){
    var email=$('email').value;
    if(email==''){
      $('showsmail').innerHTML = '邮箱不能为空';
      $('showsmail').style.color = "red";
      return false;
    }
    var reg=/^\w+@\w+(\.)(com|cn)$/;
    if(!reg.test(email)){
      $('showsmail').innerHTML="<font color='red'>邮箱格式不对，应为***@qq.com</font>";
      $('showsmail').style.color = "red";
      return false;
    }else{
      $('showsmail').innerHTML="√";
      $('showsmail').style.color = "green";
      return true;
    }
  }

  function checkAll(){
    if(checkSmail()&checkPwd()){
      return true;
    }else{
      return false;
    }
  }
</script>
    </body>
</html>