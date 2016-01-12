<?php
session_start();
require_once("CheckPermission.php");
require_once("../global.php");
require_once("../connect.php");
require_once("Time.php");
?>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $site_title;?></title>
<link rel="stylesheet" href="menu_style.css" type="text/css" />
<link rel="stylesheet" href="body.css" type="text/css" />
<link href="form.css" rel="stylesheet" type="text/css" />
<link href="page.css" rel="stylesheet" type="text/css" />
<link href="title.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
//防滑鼠右鍵  
document.oncontextmenu=function(){  
    return false;  
}  
</script>
</HEAD>
<body>
<?php
check_permision("A");

$Fa_no = strtolower($_POST["Fa_no"]);
$Fa_name = $_POST["Fa_name"];
$Fa_per= $_POST["Fa_per"];
$Fa_tel = $_POST["Fa_tel"];
$Fa_addr = $_POST["Fa_addr"];
$Fa_email = $_POST["Fa_email"];


if (trim($Fa_no) == "" || trim($Fa_name) == "" || trim($Fa_per) == "" || trim($Fa_tel) == "" || trim($Fa_addr) == "" || trim($Fa_email) == "" )
{
	?>
	<SCRIPT language=javascript>
	<!--
		alert ("您輸入的資料不全！"); 
		history.go(-1);
	//-->
	</SCRIPT>
	</SCRIPT>
<?php	
	exit;
}



$now_time = date("Y-m-d H:i:s",mktime());
$sql_update = "update fact set Fa_name = '" . $Fa_name . "',Fa_per = '" . $Fa_per . "',Fa_tel = '" . $Fa_tel . "',Fa_addr = '" . $Fa_addr . "',Fa_email = '" . $Fa_email . "' where Fa_no='". $Fa_no ."' and DelTag = 'N';";
$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");

mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("修改成功！"); 
		location.href='D01.php';
	//-->
	</SCRIPT>
</body>
</html>
