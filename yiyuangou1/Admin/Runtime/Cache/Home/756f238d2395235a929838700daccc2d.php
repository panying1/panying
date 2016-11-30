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
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('index/index')?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户列表</span></div>
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
                                        <td>用户ID</td>
			<td>用户名</td>
                                     <td>密码</td>
			<td>头像</td>
			<td>操作</td>
		</tr>
		<?php foreach($list as $v){?>
		<tr>
                                      <td width="25%"><?php echo $v['uid']?></td>
			<td><?php echo $v['username']?></td>
			<td><?php echo $v['password']?></td>
                                     <td width="20%"><img src="/<?php echo $v['img']?>" width='100%' height="100px" alt=""></td>
                                      <td>
                                            <!-- <a href="{:U('user/delete',array('uid'=>$v['uid']))}">删除</a> -->
                                            <a href="<?php echo U('user/delete',array('uid'=>$v['uid']));?>">删除</a>
                                            <a href="<?php echo U('user/update',array('uid'=>$v['uid']));?>">修改</a>
                                      </td>
		</tr>
		<?php }?>
                <tr>
                    <td colspan=4 style="text-align:center"><?php echo $page?></td>
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