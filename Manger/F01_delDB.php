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
if (trim($_GET["Sh_no"]) == "")
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
$Fa_no = $_POST["Fa_no"];
$It_no= $_POST["It_no"];
$Sh_qua = $_POST["Sh_qua"];
$Sh_date = $_POST["Sh_date"];


$Sh_no = $_GET["Sh_no"];
$now_time = date("Y-m-d H:i:s",mktime());
$sql_update = "update shop set DelTag = 'Y',Fa_no = '" . $Fa_no . "',It_no = '" . $It_no . "',Sh_qua = '" . $Sh_qua . "',Sh_date = '" . $Sh_date . "'  where Sh_no = '" . $Sh_no . "' and DelTag = 'N';";
//$sql_update = "update items set  Fa_no = '" . $Fa_no . "',It_no = '" . $It_no . "',Sh_qua = '" . $Sh_qua . "';";

$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");
mysql_close($link);
?>
<SCRIPT language=javascript>
<!--
	alert ("刪除成功!"); 
	location.href='F01.php';
//-->
</SCRIPT>
</body>
</html>
