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
if (trim($_GET["Cu_no"]) == "")
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
$Cu_name = $_POST["Cu_name"];
$Cu_tel = $_POST["Cu_tel"];
$Cu_addr = $_POST["Cu_addr"];
$Cu_email = $_POST["Cu_email"];

$Cu_no = $_GET["Cu_no"];
$now_time = date("Y-m-d H:i:s",mktime());
$sql_update = "update cust set DelTag = 'Y',Cu_name = '" . $Cu_name . "',Cu_tel = '" . $Cu_tel . "',Cu_addr = '" . $Cu_addr . "',Cu_email = '" . $Cu_email . "' where Cu_no = '" . $Cu_no . "' and DelTag = 'N';";
//$sql_update = "update items set  Cu_name = '" . $Cu_name . "',Cu_per = '" . $Cu_per . "',Cu_tel = '" . $Cu_tel . "';";

$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");
mysql_close($link);
?>
<SCRIPT language=javascript>
<!--
	alert ("刪除成功!"); 
	location.href='E01.php';
//-->
</SCRIPT>
</body>
</html>
