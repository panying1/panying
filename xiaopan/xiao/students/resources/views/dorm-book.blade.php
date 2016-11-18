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
  <title>宿舍预定</title>
	<body>
		<div class="header">
			<span>宿舍预定</span>
			<a href="index1" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<?php foreach ($date as $v) {?>
			<div class="banner">
				<img src="<?php echo $v['filename']?>" height='400px'>
			</div>
		<?php }?>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
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
    	<span class="pro-line"><img src="img/pro-line.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
		    <span class="book-tit">校区</span>
		    <input type="text" id="xiaoqu" placeholder="请选择你所在的校区" /> 
		    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">楼栋号</span>
		        <input type="text" id="luohao" placeholder="请填写您宿舍的楼栋号" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">宿舍类型</span>
		        <input type="text" id="type" placeholder="请填写您的宿舍类型" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">房间号</span>
		        <input type="text" id="home" placeholder="请选择您的房间号" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">铺位</span>
		        <input type="text" id="bunk" placeholder="请选择您的床铺位置" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			
		</ul>
		<div class="step-btn">
				<a href="info">上一步</a>
				<a href="arrive" id="submit">下一步</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="js/rem.js"></script>
      <script type="text/javascript">
			    $(function(){
			        $("#submit").click(function(){
			        	//个人信息
			            var xiaoqu=$("#xiaoqu").val();
			            var luohao=$("#luohao").val();
			            var type=$("#type").val();
			            var home=$("#home").val();
			            var bunk=$("#bunk").val();
			            $.ajax({
			                type:'GET',
			                url:"http://localhost/xiao/tpp/index.php/Home/user/yuding?callback=?",
			                dataType:'jsonp',
			                data:{xiaoqu:xiaoqu,luohao:luohao,type:type,home:home,bunk:bunk},
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
