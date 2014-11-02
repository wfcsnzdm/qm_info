<meta charset="UTF-8" />
<?php
error_reporting(0);
require_once('conn.php');
if ($_POST['submit']) {
	$name = hg_input_bb($_POST['user_name']);
	$sex = hg_input_bb($_POST['user_sex']);
	if($sex =='male')
		$sex = "男";else $sex = "女";
	$brithday = $_POST['user_brithday'];
	$phone = hg_input_bb($_POST['user_phone']);
	$qq = hg_input_bb($_POST['user_qq']);
	$grade = hg_input_bb($_POST['user_grade']);
	$college = hg_input_bb($_POST['user_college']);
	$major = hg_input_bb($_POST['user_major']);
	echo $name.$sex.$brithday.$phone.$qq.$grade.$major;
	if (!empty($name) && !empty($sex) && !empty($brithday) && !empty($phone) && !empty($qq) && !empty($grade) && !empty($college)){
		$sql = "SELECT * FROM info WHERE user_name='$name' and user_phone=$phone";
		$data = mysql_query($sql);
		if(mysql_num_rows($data) == 0){
			$query = "INSERT INTO `info`(`user_id`, `user_name`, `user_sex`, `user_brithday`, `user_phone`, `user_qq`, `user_grade`, `user_college`,`user_major`) VALUES ('','$name','$sex',$brithday,'$phone','$qq','$grade','$college','$major')";
			mysql_query($query);
			echo "<script>alert(\"成功提交信息\");</script>";
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='index.html'";
    		echo "</script>";
		}
	else{	
			echo "<script>alert(\"您已经提交过信息了\")</script>";
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='index.html'";
    		echo "</script>";
		}
	}
	else{
		echo "<script>alert(\"您还有信息没填完啊！\")</script>";
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='index.html'";
    	echo "</script>";
	}

}
function gjj($str)
{
    $farr = array(
        " /\\s+/ ",
        "/<(\\/?)(script|i?frame|style|html|body|title|link|meta|object|\\?|\\%)([^>]*?)>/isU",
        "/(<[^>]*)on[a-zA-Z]+\s*=([^>]*>)/isU ",
    );
    $str = preg_replace($farr,"",$str);
    return addslashes($str);
}

function hg_input_bb($array)
{
    if (is_array($array))
    {
        foreach($array AS $k => $v)
        {
            $array[$k] = hg_input_bb($v);
        }
    }
    else
    {
        $array = gjj($array);
    }
    return $array;
}
?>