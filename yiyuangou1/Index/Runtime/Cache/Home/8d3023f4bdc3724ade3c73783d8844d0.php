<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title>用户注册 - 弘讯云购</title>

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
        <div class="logo"><a href="/yiyuangou/index.php/Home/Reg/index" title="一元云购"><img src="/yiyuangou/Public/index/imgs/logo.png" /></a></div>
        <div class="back-page">
          <a href="/yiyuangou/index.php/Home/index/index">返回首页</a>
        </div>
      </div>
    </div>
    <div class="login-back" style="background:#F5AD00;">
    <form method="post" action="/yiyuangou/index.php/Home/Reg/regok" class="form-user" onsubmit="return checkAll()">
      <div class="login-background" style="background: url(/yiyuangou/Public/index/imgs/login1.jpg) no-repeat left center;">
        <div class="login-block">
          <h5 class="regtitle">新用户注册<small><a href="/yiyuangou/index.php/Home/login/login" class="a1">已有账号？立即登录</a></small></h5>
          <div class="input-ls regls user">
            <input type="text" name="username" id="email" onblur="checkSmail()" placeholder="邮箱地址" />
            <span  id="showsmail"></span>
          </div>
          <div class="input-ls regls pwd">
            <input type="password" name="password" id="pwd" placeholder="设置登录密码" onblur="checkPwd()"/>
            <span id="showpwd"></span>
          </div>
          <div class="input-ls regls pwdok">
            <input type="password" name="repassword" id="qrpwd" placeholder="确认密码" onblur="checkRpwd()"/>
            <span id='showrpwd'></span>
          </div>
          <div class="input-ls regls" id="captcha-container">
            <input type="text" name="passcode" class="yanzhen" placeholder="验证码" />
            <div class="yanzimg"><img src="/yiyuangou/index.php/Home/Reg/verify" class="passcode" onclick="this.src='/yiyuangou/index.php/Home/Reg/verify/'+Math.random()"/></div>
            <span class="input-user icon icon-dunpai"></span>
          </div>

          <div class="login-text text-left"><input type="checkbox" name="protocol" checked="checked"><a href="/news/more/id/2" target="_blank">《弘讯云购服务协议》</a></div>
          <div class="input-btn"><input type="submit" class="btn btn-big btn-yellow ajax-post" value="同意协议并注册"></div>
        </div>
      </div>
    </form>
    </div>
    <div class="footer">Copyright &copy; 2015 一元云购  版权所有 </div>
  
  <!--[if lt IE 9]>
  <script src="/yiyuangou/Public/index/js/jquery.pseudo.js"></script>
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
  //确认密码
  function checkRpwd(){
    var pwd = $('pwd').value;
    var qrpwd = $('qrpwd').value;
    if(qrpwd == ''){
      $('showrpwd').innerHTML = "确认密码不能为空";
      $('showrpwd').style.color = "red";
      return false;
    }else{
      if(pwd != qrpwd){
        $('showrpwd').innerHTML = "两次密码不一致";
        $('showrpwd').style.color = "red";
        return false;
      }else{
        $('showrpwd').innerHTML = "√";
        $('showrpwd').style.color = "green";
        return true;
      }
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
    if(checkSmail()&checkPwd()&checkRpwd()){
      return true;
    }else{
      return false;
    }
  }
</script>
  </body>
</html>