<?php
session_start();
require_once("global.php");
require_once("connect.php");
require_once("Manger/time.php");  
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
$MUID=strtolower($_POST["MUID"]);
$MPassword=strtolower($_POST["APassword"]);
if (trim($MUID) == "" || trim($MPassword) == "")
{
?>
	<SCRIPT language=javascript>
	<!--
		alert ("您輸入的帳號或密碼錯誤，請重新輸入！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}

$sql = "SELECT * FROM Manger WHERE MUID='".$_POST["MUID"]."'";
$record=mysql_query($sql);
    $row = mysql_fetch_assoc($record);
    $password = $row["MPassword"];
    $MName = $row["MName"];
    $MLoginTime = $row["MLoginTime"];
    $MPer = $row["MPer"];
    $DelTag=$row["DelTag"];
    $Enable=$row["Enable"];
if($DelTag=="Y" || $Enable=="N") {
?>
<SCRIPT language=javascript>
	<!--
		alert ("請洽管理部"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php
} else{

if($MPassword==$password) {
//   echo "帳號密碼正確";
$_SESSION["reg_MUID"] = $MUID;
$_SESSION["reg_MName"] = $MName;
$_SESSION["reg_MPassword"] = $password;
$_SESSION["reg_MLoginTime"] = $MLoginTime;
$_SESSION["reg_MPer"] = $MPer;
$now_time = date("Y-m-d H:i:s",mktime());
$sql_update = "update Manger set MLoginTime = '" . $now_time . "' where MUID='$MUID'";
$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");
//   echo "<br>親愛的".$_SESSION["reg_MName"]."您好";
//   echo "<br>您的帳號是".$_SESSION["reg_MUID"]."";
//   echo "<br>您的密碼是".$_SESSION["reg_MPassword"]."";
?>
<script language="JavaScript">
<!--
var gt = unescape('%3e');
var popup = null;
var over = "Launch Pop-up Navigator";
popup = window.open('', '', 'menubar=0,status=yes,scrollbars=yes,top=0,left=0,toolbar=0,location=0,fullscreen');
if (popup != null) {
if (popup.opener == null) {
popup.opener = self; 
}
popup.location.href = 'Manger/Mindex.php';
history.go(-1);
}
-->
</script>
<?php
} else{
//   echo "帳號密碼錯誤";
?>
<SCRIPT language=javascript>
	<!--
		alert ("您輸入的帳號或密碼錯誤，請重新輸入！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php
}
}
?>

