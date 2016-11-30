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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">广告添加</span></div>
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
<form action="/admin.php/Home/Address/address_addok" method="post" enctype="multipart/form-data">
		<table height="300px">
			<tr>
				<td>广告标题</td>
				<td><input type="text" name='title' required></td>
			</tr>
			<tr>
				<td>图片</td>
				<td><input type="file" name="filename" id=""></td>
			</tr>
                                       <tr>
                                                   <td>地址</td>
                                                   <td><input type="text" name="ad_url" id=""></td>
                                       </tr>
			<tr>
				<td>状态</td>
				<td>
                                                    <input type="radio" name="ad_status" value="1">显示
                                                    <input type="radio" name="ad_status" value="0">不显示
                                                </td>
			</tr>
                                        <tr>
                                            <td>广告开始时间</td>
                                            <td><input type="text" name='ad_start_time'></td>
                                        </tr>
                                        <tr>
                                        <td>广告结束时间</td>
                                        <td><link rel="stylesheet" type="text/css" href="http://www.phpcms.com/statics/js/calendar/jscal2.css">
            <link rel="stylesheet" type="text/css" href="http://www.phpcms.com/statics/js/calendar/border-radius.css">
            <link rel="stylesheet" type="text/css" href="http://www.phpcms.com/statics/js/calendar/win2k.css">
            <script type="text/javascript" src="http://www.phpcms.com/statics/js/calendar/calendar.js"></script>
            <script type="text/javascript" src="http://www.phpcms.com/statics/js/calendar/lang/en.js"></script><input name="ad_end_time" id="overduedate" value="" size="21" class="date input-text" readonly="" type="text">&nbsp;<script type="text/javascript">
            Calendar.setup({
            weekNumbers: true,
            inputField : "overduedate",
            trigger    : "overduedate",
            dateFormat: "%Y-%m-%d %H:%M:%S",
            showTime: true,
            minuteStep: 1,
            onSelect   : function() {this.hide();}
            });
        </script></td>
                                    </tr>
			<tr>
				<td><input type="reset" value="取消"></td>
				<td><input type="submit" value="提交"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>
                    
                </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>