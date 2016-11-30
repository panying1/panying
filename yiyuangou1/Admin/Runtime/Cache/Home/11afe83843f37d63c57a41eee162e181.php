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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">品牌</span></div>
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
<form action="/admin.php/Home/Brand/brand_add" method="post">
		<table height="300px">
			<tr>
				<td>品牌名称</td>
				<td><input type="text" name='brand_title' required></td>
			</tr>
			<tr>
				<td>分类</td>
				<td><select name="cate_id" id="cate_id">
					<option value="">请选择...</option>
						<?php foreach($list as $v){?>
							<option value="<?php echo $v['cate_id']?>"><?php echo $v['cate_title']?></option>
						<?php }?>
				</select></td>
			</tr>
			<tr>
				<td>排序</td>
				<td><input type="text" name='order' required></td>
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