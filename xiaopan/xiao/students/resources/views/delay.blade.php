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
		<title>推迟报到</title>

		<body>
			<div class="header">
				<span>推迟报到</span>
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
							<span class="book-tit delay">推迟报到类型</span>
							<input type="text" name="t_type" id="t_type" placeholder="请选择" disabled="disabled" class="delayinput"/>
						</div>
						<div class="checkshow" id="t">
							<h4 class="ta-center">推迟报到类型</h4>
							<p class="checked">事假</p>
							<p>病假</p>
							<p>服兵役</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="delayReport">
					<ul class="hd clearfix">
						<li class="active">个人申请信息</li>
						<li>申请原因</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit delay">姓名</span>
									<input type="text" id="name" placeholder="请填写您的姓名" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">考生号</span>
									<input type="text" id="hao" placeholder="请填写您的考生号" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">学院</span>
									<input type="text" id="xueyuan" placeholder="请填写您所在的学院" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">专业</span>
									<input type="text" id="zhuanye" placeholder="请填写您的专业" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">身份证号</span>
									<input type="text" id="card" placeholder="请填写您的身份证号码" class="delayinput"/>
								</li>
								<li>
									<div class="show-btn">						
									<span class="book-tit delay">推迟报到时间</span>
									<input type="text" name="t_time" id="t_time" placeholder="请填选择" class="delayinput" disabled="disabled"/>
									</div>
									<div class="checkshow" id="time">
										<h4 class="ta-center">推迟报到时间</h4>
										<p class="checked" value='是'>是</p>
										<p>否</p>
										<span class="close" value='关闭'>关闭</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea  id="reason" placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
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
			            var t_type=$("#t_type").val();
			            var name=$("#name").val();
			            var hao=$("#hao").val();
			            var xueyuan=$("#xueyuan").val();
			            var zhuanye=$("#zhuanye").val();
			            var card=$("#card").val();
			            var t_time=$("#t_time").val();
			            var reason=$("#reason").val();			            
			            $.ajax({
			                type:'GET',
			                url:"http://localhost/xiao/tpp/index.php/Home/delay/index?callback=?",
			                dataType:'jsonp',
			                data:{t_type:t_type,name:name,hao:hao,xueyuan:xueyuan,zhuanye:zhuanye,card:card,t_time:t_time,reason:reason},
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