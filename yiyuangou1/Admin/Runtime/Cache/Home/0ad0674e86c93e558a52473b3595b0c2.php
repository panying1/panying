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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.php?r=index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">分类列表</span></div>
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
		    <table border=1 width="1100px" height="100px">
		  		<tr>
		  			<td>分类ID</td>
		  			<td>分类名称</td>
		  			<td>操作</td>
		  			<br>
		  		</tr>
		  		<?php foreach ($name as $key => $value): ?>
		  			<tr>
		  				<td><?php echo $value['goods_id']?></td>
		  				<td><?php echo $value['goods_title']?></td>
		  				<td>
		  					<a href="<?php echo U('cate/delete',array('goods_id'=>$value['goods_id']));?>">删除</a>
		  					<a href="<?php echo U('cate/update',array('goods_id'=>$value['goods_id']));?>">修改</a>
		  				</td>
		  			</tr>
		  		<?php endforeach ?>
		    </table>
		    <?php echo $page;?>
		</body>
</html> 
                </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>