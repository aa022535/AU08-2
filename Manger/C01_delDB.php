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
if (trim($_GET["It_no"]) == "")
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


$It_no = $_GET["It_no"];
$now_time = date("Y-m-d H:i:s",mktime());
$sql_update = "update items set DelTag = 'Y' where It_no = '" . $It_no . "' and DelTag = 'N';";


//$sql_update = "update items set DelTag = 'Y',It_name = '" . $It_name . "',It_pri = '" . $It_pri . "',It_nowqty = '" . $It_nowqty . "' where It_no = '" . $It_no . "' and DelTag = 'N';";
//$sql_update = "update items set  It_name = '" . $It_name . "',It_pri = '" . $It_pri . "',It_nowqty = '" . $It_nowqty . "';";

$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");
mysql_close($link);
?>
<SCRIPT language=javascript>
<!--
	alert ("刪除成功!"); 
	location.href='C01.php';
//-->
</SCRIPT>
</body>
</html>
