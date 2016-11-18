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
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="user" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
			<li class="upload-head ta-center">
				<span>
					<img id="pic" src="img/take-photo.png">
					<input type="file" />
				</span>
				<p>上传头像</p>
			</li>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" id="name" placeholder="请输入姓名" /> 
			    <div class="sex" id="sex">
			    	<label class="sex-check">男</label>
			    	<label>女</label>
			    </div>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" id="email" placeholder="请填写您的个人邮箱地址" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" id="phone" placeholder="请填写您的个人手机号码" />  
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" id="mobile" placeholder="请填写您的家庭主机号码" />  
			</li>
			<li>
				<span class="book-tit">移动电话</span>
		        <input type="text" id="move" placeholder="请填写您的家庭移动电话号码" />  
			</li>
			<li>
				<div class="show-btn">
					<span class="book-tit">户口迁移</span>
			        <input type="text" name="q_type" id="q_type" placeholder="请选择户口是否迁移" disabled="disabled" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow" id="q">
		        	<p class="checked">是</p>
		        	<p>否</p>
		        </div>
			</li>
			<li>
				<div class="show-btn">
				<span class="book-tit">党员关系</span>
		        <input type="text" name="d_type" id="d_type" placeholder="请选择您的政治面貌" disabled="disabled" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow" id="d">
		        	<p class="checked">群众</p>
		        	<p>团员</p>
		        	<p>党员</p>
		        </div>
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" id="phone1" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" id="relation1" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" id="phone2" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" id="relation2" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">所在地地址</span>
			    <input type="text" id="address" placeholder="所在地地址"/> 
			    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" id="address1" placeholder="请填写您的详细地址" />  
			</li>
		</ul>
		<div class="step-btn">
				<a href="dorm" id="submit" class="ta-center db">下一步</a>
		</div>
  <script src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/basic.js"></script>
  <script type="text/javascript" src="js/rem.js"></script>	
  <script type="text/javascript">
  			$(function(){
			        $("#submit").click(function(){
			        	//个人信息
			            var name=$("#name").val();
			            var sex=$(".sex-check").text();
			            var email=$("#email").val();
			            var phone=$("#phone").val();
			            var mobile=$("#mobile").val();
			            var move=$("#move").val();
			            var q_type=$("#q_type").val();
			            var d_type=$("#d_type").val();
			            var phone1=$("#phone1").val();
			            var relation1=$("#relation1").val();
			            var phone2=$("#phone2").val();
			            var relation2=$("#relation2").val();
			            var address=$("#address").val();
			            var address1=$("#address1").val();
			            // console.log(111);
			            $.ajax({
			            	type: 'GET',
			            	url: "http://localhost/xiao/tpp/index.php/Home/user/index?callback=?",
			            	dataType: 'jsonp',
			            	callback:'callback',
			            	 data:{name:name,sex:sex,email:email,phone:phone,mobile:mobile,move:move,q_type:q_type,d_type:d_type,phone1:phone1,relation1:relation1,phone2:phone2,relation2:relation2,address:address,address1:address1},
			            	success: function(msg){
			            		// console.log(callback);
			            		alert(msg);			            	
			            	}
			            })
			            alert('成功');
			    })
			})
			</script>
	</body>
</html>
