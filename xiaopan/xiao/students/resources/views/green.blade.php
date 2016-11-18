<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
				<a href="index1" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<?php foreach ($date as $v) {?>
			<div class="banner">
				<img src="<?php echo $v['filename']?>" height='400px'>
			</div>
			<?php }?>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
				<ul class="dorm-book mt3">
					<li>
						<div class="show-btn">
							<span class="book-tit">申请类型</span>
							<input type="text" name="s_type" id="s_type" placeholder="请选择您的申请类型" disabled="disabled" />
						</div>
						<div class="checkshow" id="s">
							<h4 class="ta-center">申请类型</h4>
							<p class="checked">缓交学费</p>
							<p>助学贷款</p>
							<p>免交学费</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" id="name" name="name" placeholder="请输入姓名" />
									<div class="sex" id="sex">
										<label class="sex-check">男</label>
										<label>女</label>
									</div>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" id="nation" placeholder="请填写您的民族类别" />
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" id="phone" placeholder="请填写您的个人手机号码" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" id="birthday" placeholder="请填写您的出生日期" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" id="card" placeholder="请填写您的身份证号码" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" id="mobile" placeholder="请填写您的手机联系号码" />
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">户籍类型</span>
										<input type="text" id="h_type" name="h_type" placeholder="请选择您的户籍类型" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow" id="h">
										<h4 class="ta-center">户籍类型</h4>
										<p class="checked" value='是'>是</p>
										<p>否</p>
										<span class="close" value='关闭'>关闭</span>
									</div>
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">政治面貌</span>
										<input type="text" name="u_type" id="u_type" placeholder="请选择您的政治面貌" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow" id="type">
										<p class="checked">群众</p>
										<p>团员</p>
										<p>党员</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" id="adress" placeholder="请填写您的详细地址" />
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员1</span>
									<input type="text" id="username" placeholder="请填写家庭成员1的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" id="relation" placeholder="请填写您与家庭成员1的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" id="work" placeholder="请填写家庭成员1的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" id="annual" placeholder="请填写家庭成员1的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员2</span>
									<input type="text" id="username" placeholder="请填写家庭成员2的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" id="relation" placeholder="请填写您与家庭成员2的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" id="work" placeholder="请填写家庭成员2的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" id="annual" placeholder="请填写家庭成员2的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员3</span>
									<input type="text" id="username" placeholder="请填写家庭成员3的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" id="relation" placeholder="请填写您与家庭成员3的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" id="work" placeholder="请填写家庭成员3的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" id="annual" placeholder="请填写家庭成员3的年收入情况" class="house-input" />
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea id="reason"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
						</div>
					</div>
				</div>
				</div>
				<div class="step-btn">
					<a href="javascript:void(0)" id='submit' class="ta-center db">提交</a>
				</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
			<script type="text/javascript">
			    $(function(){
			        $("#submit").click(function(){
			        	//个人信息
			            var s_type=$("#s_type").val();
			            var name=$("#name").val();
			            var sex=$(".sex-check").text();
			            var nation=$("#nation").val();
			            var phone=$("#phone").val();
			            var card=$("#card").val();
			            var birthday=$("#birthday").val();
			            var mobile=$("#mobile").val();
			            var adress=$("#adress").val();
			            var h_type=$("#h_type").val();
			            var u_type=$("#u_type").val();
			            //家庭信息
			            var username=$("#username").val();
			            var relation=$("#relation").val();
			            var work=$("#work").val();
			            var annual=$("#annual").val();
			            //申请原因
			            var reason=$("#reason").val();
			            $.ajax({
			                type:'GET',
			                url:"http://localhost/xiao/tpp/index.php/Home/green/index?callback=?",
			                dataType:'jsonp',
			                data:{s_type:s_type,name:name,sex:sex,nation:nation,phone:phone,card:card,birthday:birthday,mobile:mobile,adress:adress,h_type:h_type,u_type:u_type,username:username,relation:relation,work:work,annual:annual,reason:reason},			                
			                jsonp:'callback',
			                success:function(result){
			                alert(result);
			                }
			        })
			            alert('成功');
			    })
			})
			</script>
		</body>

</html>

