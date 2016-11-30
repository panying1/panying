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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">广告列表</span></div>
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
	<table border=1 width="100%">
		<tr>
                                        <td>广告ID</td>
			<td>广告标题</td>
			<td>广告图片</td>
                                       <td>广告状态</td>
                                       <td>广告添加时间</td>
			<td>广告结束时间</td>
		</tr>
		<?php foreach($list as $v){?>
		<tr>
                                        <td><?php echo $v['id']?></td>
			<td><?php echo $v['title']?></td>
			<td width="20%"><a href="<?php echo $v['ad_url']?>"><img src="/<?php echo $v['ad_img']?>" width='100%' height="100px" alt=""></a></td>
                                       <td><?php if($v['ad_status']==0){?>
                                        不显示
                                        <?php }else{?>
                                        显示
                                        <?php }?></td>
			<td><?php echo $v['ad_start_time']?></td>
                                      <td><?php echo $v['ad_end_time']?></td> 
		</tr>
		<?php }?>
        <tr>
            <td colspan=6 style="text-align:center"><?php echo $page?></td>
        </tr>
        
                     	</table>
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