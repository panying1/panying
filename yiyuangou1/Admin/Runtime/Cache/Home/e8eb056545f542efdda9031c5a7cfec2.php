<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>一元购</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/main.css"/>
    <script type="text/javascript" src="/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<?php include './public/index/index.html'; ?>
<div class="container clearfix">
  <!--/sidebar-->
   <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户信息</span></div>
        </div>
        
        <div class="result-wrap">
            
                <div class="result-title">
                    <div class="result-list">
                        
                    </div>
                </div>
                <div class="result-content">
                 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<center>
<form action="/admin.php/Home/User/addok" method="post" enctype="multipart/form-data" onsubmit="return checkAll()">
		<table height="300px">
			<tr>
				<td>姓名</td>
				<td><input type="text" name='username'  id="name" onblur="checkName()"required></td>
			</tr>
			<tr>
				<td>图片</td>
				<td><input type="file" name="filename" id="" required></td>
			</tr>
                                       <tr>
                                                   <td>密码</td>
                                                   <td><input type="password" name="password" id="pwd" onblur="checkPwd()" required></td>
                                       </tr>
                                       <tr>
                                                   <td>再次输入密码</td>
                                                   <td><input type="password" name="repassword" required></td>
                                       </tr>
			<tr>
				<td><input type="reset" value="取消"></td>
				<td><input type="submit" value="提交"></td>
			</tr>
		</table>
	</form>
	</center>
	    	<script type="text/javascript">
		function $(id){
			return document.getElementById(id);
		}
	</script>
	<script type="text/javascript">
	//自定义函数验证姓名
	function checkName(){
		var username = $('name').value;
		if(username == ''){
			$('showName').innerHTML = '项目不能为空';
			$('showName').style.color = "red";
			return false;
		}else{
			$('showName').innerHTML = '√';
			$('showName').style.color = "green";
			return true;
		}
	}
	//密码
	function checkPwd(){
		var pwd = $('pwd').value;
		if(pwd == ''){
			$('showpwd').innerHTML = '密码不能为空';
			$('showpwd').style.color = "red";
			return false;
		}else{
			$('showpwd').innerHTML = '√';
			$('showpwd').style.color = "green";
			return true;
		}
	}
	function checkAll(){
		if(checkName()&checkPwd()&checkRpwd()&checkPhone()&checkSmail()&checkCon()){
			return false;
		}else{
			return true;
		}
	}
</script>
</body>
</html>
                    
                </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>