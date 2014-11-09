<meta charset=utf-8>
<?php 
	include("conn.php");
	$sql =  "SELECT * FROM info WHERE 1";
	$query = mysql_query($sql);
	 while ($rs = mysql_fetch_array($query)) {
	echo '<span>'.$rs['user_name']."\t".'</span>';  
	echo '<span>'.$rs['user_phone']."\t".'</span>';
	echo '<span>'.$rs['user_college'].'</span><br />';
}
?>