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
$ID = $_POST["ID"];
$MUID = strtolower($_POST["MUID"]);
$MName = $_POST["MName"];
$MPassword = strtolower($_POST["MPassword"]);
$MPasswordCheck = strtolower($_POST["MPasswordCheck"]);
$性別 = $_POST["性別"];
$生日 = $_POST["生日"];
$手機號碼 = $_POST["手機號碼"];
$信箱 = $_POST["信箱"];
$會員階級 = $_POST["會員階級"];
$ChkEnable = $_POST["ChkEnable"];
$IP=$_SERVER['REMOTE_ADDR'];

if (trim($MName) == "" || trim($MUID) == "" || trim($MPassword) == "" || trim($MPasswordCheck) == "" || trim($ID) == "" || trim($性別) == "")
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

if(preg_match("/[\x7f-\xff]/", $ID)){
 ?>
	<SCRIPT language=javascript>
	<!--
		alert ("員工編號不能使用中文！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}

if(preg_match("/[\x7f-\xff]/", $MUID)){
 ?>
	<SCRIPT language=javascript>
	<!--
		alert ("帳號不能使用中文！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}

if (trim($MPassword) != trim($MPasswordCheck) )
{
	?>
	<SCRIPT language=javascript>
	<!--
		alert ("兩次密碼輸入不相同,請重新確認！"); 
		history.go(-1);
	//-->
	</SCRIPT>
	</SCRIPT>
<?php	
	exit;
}

$SQL_select="select ID from account where 刪除 = 'N' and ID = '" . $ID . "';";
$result_select=mysql_query($SQL_select,$link) or die ("無法執行查詢");
if (mysql_num_rows($result_select) != 0)
{
	mysql_free_result($result_select);
	mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("您輸入的會員代號已經使用中，請重新輸入！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}        


$SQL_select="select ID,帳號 from account where 帳號 = '" . $MUID . "';";
$result_select=mysql_query($SQL_select,$link) or die ("無法執行查詢");
if (mysql_num_rows($result_select) != 0)
{
	mysql_free_result($result_select);
	mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("您輸入的帳號已經使用中，請重新輸入！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}           
mysql_free_result($result_select);


$now_time = date("Y-m-d H:i:s",mktime());

$sql_insert = "insert into account (ID,會員姓名,帳號,密碼,信箱,手機號碼,性別,生日,顯示,會員階級,上次登入,登入IP,刪除) values ('" . $ID . "','" . $MName . "','" . $MUID . "','" . $MPassword . "','" . $信箱 . "','" . $手機號碼 . "','" . $性別 . "','" . $生日 . "','" . $ChkEnable . "','" . $會員階級 . "','" . $now_time . "','" . $IP . "','N');";
$result_insert=mysql_query($sql_insert,$link) or die ("無法執行新增");

mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
	alert ("新增成功！"); 
	location.href='B01.php';
	//-->
	</SCRIPT>

</body>
</html>
