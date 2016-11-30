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
    <!--/sidebar-->
<div class="container clearfix">
   <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.php?r=index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">订单管理</span></div>
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
		<form action="/admin.php/Home/Order/sel" method="post">
			<table>
				<tr>
					<td>订单号：<input type="text" name="or_number">&nbsp;&nbsp;收货人：<input type="text" name="accept_name">&nbsp;&nbsp;<input type="submit" value="查询"></td>
				</tr>
			</table>

		</form>
		    <table border=1 width="1100px" height="100px">
		  		<tr>
		  			<td>订单ID</td>
		  			<td>订单号</td>
		  			<td>用户ID</td>
		  			<td>订单状态</td>
		  			<td>收货人姓名</td>
		  			<td>收货人手机号</td>
		  			<td>国家</td>
		  			<td>省份</td>
		  			<td>城市</td>
		  			<td>详情地址</td>
		  			<td>商品发货时间</td>
		  			<td>系统管理</td>
		  			<br>
		  		</tr>
		  		<?php foreach ($name as $key => $value): ?>
		  			<tr>
		  				<td><?php echo $value['or_id']?></td>
		  				<td><?php echo $value['or_number']?></td>
		  				<td><?php echo $value['user_id']?></td>
                        <td>
                        <?php if($value['or_start']==1){?>
                            <button><font color="green"><?php echo "运输中";?></font></button>
                        <?php }else if($value['or_start']==2){?>
                            <button><font color="red"><?php echo "未付款";?></font></button>
                        <?php }else if($value['or_start']==3){?>
                            <button><font color="blue"><?php echo "已完成";?></font></button>
                        <?php }?>
		  				</td>
		  				<td><?php echo $value['accept_name']?></td>
		  				<td><?php echo $value['telphone']?></td>
		  				<td><?php echo $value['country']?></td>
		  				<td><?php echo $value['province']?></td>
		  				<td><?php echo $value['city']?></td>
		  				<td><?php echo $value['address']?></td>
		  				<td><?php echo $value['send_goods_time']?></td>
		  				<td>
		  					<a href="<?php echo U('order/delete',array('or_id'=>$value['or_id']));?>">删除</a>
		  					
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