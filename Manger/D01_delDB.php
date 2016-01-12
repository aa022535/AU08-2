<?php
session_start();
require_once("CheckPermission.php");
require_once("../global.php");
require_once("../connect.php");
require_once("Time.php");
?>
<HTML>
<HEAD>
<TITLE><?php echo $site_title;?></TITLE>
<META http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<body>
<?php
check_permision("A");
if (trim($_GET["Fa_no"]) == "")
{
?>
	<SCRIPT language=javascript>
	<!--
		alert ("您輸入的資料不全!"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}
$Fa_name = $_POST["Fa_name"];
$Fa_per= $_POST["Fa_per"];
$Fa_tel = $_POST["Fa_tel"];
$Fa_addr = $_POST["Fa_addr"];
$Fa_email = $_POST["Fa_email"];

$Fa_no = $_GET["Fa_no"];
$now_time = date("Y-m-d H:i:s",mktime());
$sql_update = "update fact set DelTag = 'Y',Fa_name = '" . $Fa_name . "',Fa_per = '" . $Fa_per . "',Fa_tel = '" . $Fa_tel . "',Fa_addr = '" . $Fa_addr . "',Fa_email = '" . $Fa_email . "' where Fa_no = '" . $Fa_no . "' and DelTag = 'N';";
//$sql_update = "update items set  Fa_name = '" . $Fa_name . "',Fa_per = '" . $Fa_per . "',Fa_tel = '" . $Fa_tel . "';";

$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");
mysql_close($link);
?>
<SCRIPT language=javascript>
<!--
	alert ("刪除成功!"); 
	location.href='D01.php';
//-->
</SCRIPT>
</body>
</html>
