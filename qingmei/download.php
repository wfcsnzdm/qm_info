<meta charset=utf-8>
<?php 
	$dsn = "mysql:host=localhost;dbname=kanbaolai;charset=utf8";
	$db = new PDO($dsn, 'root', '');
	$rows = $db->query("SELECT * FROM info WHERE 1");
	 while ($rs = $rows->fetch()) {
	echo '<span>'.$rs['user_name']."\t".'</span>';  
	echo '<span>'.$rs['user_phone']."\t".'</span>';
	echo '<span>'.$rs['user_college'].'</span><br />';
}
?>