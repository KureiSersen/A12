<!DOCTYPE html>
<?php $date=date("Y-m-d");
?>
<html>
<head>
	<meta name="content-type"; charset="UTF-8">
	<title></title>
</head>
<body>
	<script language="javascript">
		function chkinput(form)
		{
			if(form.id_title.value=="")
			{
				alert("请输入标题！");
				form.title.select();
				return(false);
			}
			if(form.content.value=="")
			{
				alert("请输入内容！");
				form.content.select();
				return(false);
			}
			return(true);
		}
	</script>
	<table width="828" height="693" border="1" style="margin-left: auto;margin-right: auto">
	<tbody>
		<tr>
			<th width="150" scope="col" style="vertical-align: top"><table width="164" height="445" border="0" >
				<tbody>
					<tr>
						<td height="104"><a href="../../users/login/loginsuccess.php">查看主页</a><hr></td>
					</tr>
					<tr>
						<td height="93"><a href="../index.php">文章管理</a><hr></td>
					</tr>
					<tr>
						<td height="93"><a href="../../comments/index.php">评论管理</a><hr></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
				</tbody>
			</table></th>
			<th width="662" scope="col"><form action="update.php" method="POST" onsubmit="return chkinput(this)"><table width="662" height="696" border="1">
				<tbody>
					<tr>
						<td height="51"><label>文章标题:<input name="title" type="text" id="id_title" size="50" value="<?php echo $_POST['title']?>"/></label></td>
					</tr>
					<tr>
						<td height="637"><table width="652" height="768" border="1">
							<tbody>
								<tr>
									<td height="49">工具栏</td>
								</tr>
								<tr>
									<td height="572"><label>
										<textarea name="content" cols="104" rows="45" id="id_content" style="resize:none">
										<?php echo $_POST['content']?></textarea>
										</label><div align="center">
										<input name="date" type="hidden" id="id_date" value="<?php echo "$date";?>">
										<input name="posts_id" type="hidden" id="id_posts_id" value="<?php echo $_POST['posts_id'];?>">
										</div></td>
								</tr>
								<tr>
									<td height="67">标签</td>
								</tr>
								<tr>
									<td height="67"><table width="647" height="64" border="1">
										<tbody>
											<tr>
												<td><input name="Submit" type="submit" value="发布更改" /></td>
												<td><input type="button" value="返回" onclick="location.href='../../users/login/loginsuccess.php'"></td>
											</tr>
										</tbody>
									</table></td>
								</tr>
							</tbody>
						</table></td>
					</tr>
				</tbody>
			</table></form></th>
		</tr>
	</tbody>
</table>

</body>
</html>>
