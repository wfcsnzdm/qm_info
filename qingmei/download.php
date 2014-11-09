<?php 
	$dsn = "mysql:host=localhost;dbname=kanbaolai;charset=utf8";
	$db = new PDO($dsn, 'root', '');
	$rows = $db->query("SELECT * FROM info WHERE 1");
	header("Content-type:application/vnd.ms-excel;charset=UTF-8"); 
	header("Content-Disposition:attachment;filename=报名名单.xls"); 
	$tab="\t"; $br="\n";
	$head="姓名".$tab."电话号码".$tab."学院".$br;
	echo $head;
	 while ($rs = $rows->fetch()) {
	echo $rs['user_name'].$tab;  
	echo $rs['user_phone'].$tab;
	echo $rs['user_college'];
	echo $br;
}
?>