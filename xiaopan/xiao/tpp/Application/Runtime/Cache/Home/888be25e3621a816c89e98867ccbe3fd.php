<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<form action="/tpp/index.php/Home/Index/updateok" method="post">
		<input type="hidden" name="id" value="<?php echo $update['id']?>">
			<table>
				<tr>
					<td>姓名</td>
					<td><input type="text" name='username' value='<?php echo $update['username']?>'></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value='修改'></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>