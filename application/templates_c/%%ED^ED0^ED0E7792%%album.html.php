<?php /* Smarty version 2.6.25, created on 2011-03-13 10:41:08
         compiled from upload/album.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>新建相册</title>
</head>
<body>
<h1>新建相册</h1>
<form name="photo_album" action="album/create" method="POST">		
	<table>		
		<tr>
			<td>相册名称:</td>
			<td><input type="text" name="name"/></td> 
		</tr>
		<tr>
			<td><input type="reset" value="重置"/></td>
			<td><input type="submit" value="提交"/></td>
		</tr>
	</table>
</form>
</body>
</html>