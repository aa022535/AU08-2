<?php
session_start();
require_once("global.php");
require_once("../connect.php"); 
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

$sql = "SELECT * FROM account WHERE 帳號='".$_POST["MUID"]."'";
$record=mysql_query($sql);
    $row = mysql_fetch_assoc($record);
    $password = $row["密碼"];
    $MName = $row["會員姓名"];


if($MPassword==$password) {
//   echo "帳號密碼正確";
$_SESSION["reg_MUID"] = $MUID;
$_SESSION["reg_MName"] = $MName;
$_SESSION["reg_MPassword"] = $password;
header("location:shop.php"); 
?>

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

?>

