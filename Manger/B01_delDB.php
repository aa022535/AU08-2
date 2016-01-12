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
check_permision("B");
if (trim($_GET["MUID"]) == "")
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
$MUID = $_GET["MUID"];
$now_time = date("Y-m-d H:i:s",mktime());
$sql_update = "update account set 刪除 = 'Y' where 帳號 = '" . $MUID . "' and 刪除 = 'N';";
$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");
mysql_close($link);
?>
<SCRIPT language=javascript>
<!--
	alert ("刪除成功!"); 
	location.href='B01.php';
//-->
</SCRIPT>
</body>
</html>
