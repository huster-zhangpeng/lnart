<?php /* Smarty version 2.6.25, created on 2011-03-13 17:57:45
         compiled from upload/teacher.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>老师信息注册</title>
</head>
<body>
<h1>教师信息注册</h1>
<form name="teacher" action="<?php echo $this->_tpl_vars['base']; ?>
/upload/teacher/register" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>教师姓名:</td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td>教师分类:</td>
			<td>
				<input type="radio" value="0" name="class"/>专业老师
				<input type="radio" value="1" name="class"/>文化老师
				<input type="radio" value="2" name="class"/>辅导老师
			<td>
		</tr>
		<tr>
			<td>教师描述:</td>
			<td><textarea name="desc">请在此输入教师描述</textarea></td>
		</tr>
		<tr>
			<td>上传头像:</td>
			<td><input type="file" name="photo"/></td>
		</tr>
		<tr>
			<td><input type="reset" value="重置"/></td>
			<td><input type="submit" value="提交"/></td>
		</tr>
	</table>
</form>
</body>
</html>