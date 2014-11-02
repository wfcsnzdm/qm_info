<meta charset="UTF-8" />
<?php
	@mysql_connect("localhost","root","") or die("数据库链接错误");
	@mysql_select_db("kanbaolai") or die("db链接错误");
	mysql_query("SET NAMES 'utf8'");
?>
