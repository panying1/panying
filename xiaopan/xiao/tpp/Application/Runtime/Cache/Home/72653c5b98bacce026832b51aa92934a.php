<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<table>
			<tr>
				<th>姓名</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
				 <td><?php echo ($v["username"]); ?></td>
				 <td>
				 <a href="/tpp/index.php/Home/Index/delete?id='<?php echo ($v["id"]); ?>'">删除</a>
				 <a href="/tpp/index.php/Home/Index/update?id='<?php echo ($v["id"]); ?>'">修改</a>
				 </td>
			 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<?php echo ($page); ?>
 	</center>
</body>
</html>