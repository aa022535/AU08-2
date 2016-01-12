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
$ID = $_POST["ID"];
$MUID = strtolower($_POST["MUID"]);
$MName = $_POST["MName"];
$MPassword = strtolower($_POST["MPassword"]);
$MPasswordCheck = strtolower($_POST["MPasswordCheck"]);
$職務類別 = $_POST["職務類別"];
$性別 = $_POST["性別"];
$生日 = $_POST["生日"];
$聯絡電話 = $_POST["聯絡電話"];
$行動電話 = $_POST["行動電話"];
$MEMail = $_POST["MEMail"];
$ChkEnable = $_POST["ChkEnable"];
$IP=$_SERVER['REMOTE_ADDR'];

if (trim($MName) == "" || trim($MUID) == "" || trim($MPassword) == "" || trim($MPasswordCheck) == "" || trim($ID) == "" || trim($職務類別) == "" || trim($性別) == "")
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

$SQL_select="select ID,MName,MUID,MPassword,MEMail from Manger where DelTag = 'N' and ID = '" . $ID . "';";
$result_select=mysql_query($SQL_select,$link) or die ("無法執行查詢");
if (mysql_num_rows($result_select) != 0)
{
	mysql_free_result($result_select);
	mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("您輸入的員工編號已經使用中，請重新輸入！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}        


$SQL_select="select ID,MName,MUID,MPassword,MEMail from Manger where MUID = '" . $MUID . "';";
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

$sql_insert = "insert into manger (ID,MName,職務類別,性別,生日,聯絡電話,行動電話,MUID,MPassword,MEMail,Enable,ProcUser,ProcDate,ProcIP,DelTag,MPer) values ('" . $ID . "','" . $MName . "','" . $職務類別 . "','" . $性別 . "','" . $生日 . "','" . $聯絡電話 . "','" . $行動電話 . "','" . $MUID . "','" . $MPassword . "','" . $MEMail . "','" .$ChkEnable . "','" . $_SESSION["reg_MUID"] . "','" . $now_time . "','". $IP ."','N','');";
$result_insert=mysql_query($sql_insert,$link) or die ("無法執行新增");

mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
	alert ("新增成功！"); 
	location.href='A01.php';
	//-->
	</SCRIPT>

</body>
</html>
