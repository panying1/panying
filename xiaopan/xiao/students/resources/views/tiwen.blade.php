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
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="ask" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<?php foreach ($date as $v) {?>
			<div class="banner">
				<img src="<?php echo $v['filename']?>" height='400px'>
			</div>
			<?php }?>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea  id="content" placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
			</div>
			<div class="step-btn">
				<a href="javascript:;" id="submit" class="ta-center db">提交</a>
			</div>
			</div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
			<script type="text/javascript">
			        $("#submit").click(function(){
			        	//个人信息
			            var content=$("#content").val();
			            // console.log(111);
			            $.ajax({
			            	type: 'GET',
			            	url: "http://localhost/xiao/tpp/index.php/Home/ask/index?callback=?",
			            	dataType: 'jsonp',
			            	callback:'callback',
			            	 data:{content:content},
			            	success: function(msg){
			            		// console.log(callback);
			            		alert(msg);			            	
			            	}
			            })
			            alert('成功');
			    })
			</script>	
		</body>

</html>