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
  <title>抵校登记</title>
	<body>
		<div class="header">
			<span>抵校登记</span>
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
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line1.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
			<div class="show-btn">
			    <span class="book-tit">交通方式</span>
			    <input type="text" name="j_type" id="j_type" placeholder="请选择您到达学校的交通工具" disabled="disabled"/> 
		   </div>
		    <span class="goin"><i class="iconfont icon-right"></i></span>
		    <div class="checkshow" id="j">
	        	<p class="checked">飞机</p>
	        	<p>火车</p>
	        	<p>汽车</p>
	       </div>
			</li>
			<li>
				<span class="book-tit">接站站点</span>
		        <input type="text" id="zhandian" placeholder="请选择您目的地的站点位置"/>  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">出发时间</span>
		        <input type="text" id="starttime" placeholder="请填写您的出发时间"/>  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">到达时间</span>
		        <input type="text" id="endtime" placeholder="请选择您的预计到达时间"/>  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<div class="show-btn">					
					<span class="book-tit">是否陪同</span>
			        <input type="text" name="is" id="is" placeholder="请选择是否有人陪同" disabled="disabled"/>  
		        </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow" id="i">
	        	<p class="checked">是</p>
	        	<p>否</p>
	       </div>
			</li>
			<li>
				<span class="book-tit">陪同人数</span>
		        <input type="text" id="ponser" placeholder="请填写您的陪同人数" />  
			</li>
		</ul>
		<div class="step-btn">
			    <a href="dorm">上一步</a>
				<a href="reportcard" id='submit'>下一步</a>
		</div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/basic.js"></script>	
      <script type="text/javascript" src="js/rem.js"></script>	
      <script type="text/javascript">
			    $(function(){
			        $("#submit").click(function(){
			        	//个人信息
			            var j_type=$("#j_type").val();
			            var zhandian=$("#zhandian").val();
			            var starttime=$("#starttime").val();
			            var endtime=$("#endtime").val();
			            var is=$("#is").val();
			            var ponser=$("#ponser").val();
			            $.ajax({
			                type:'GET',
			                url:"http://localhost/xiao/tpp/index.php/Home/user/arrive?callback=?",
			                dataType:'jsonp',
			                data:{j_type:j_type,zhandian:zhandian,starttime:starttime,endtime:endtime,is:is,ponser:ponser},
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
