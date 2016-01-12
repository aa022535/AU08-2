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

if (trim($MName) == "" || trim($MUID) == "" || trim($MPassword) == "" || trim($MPasswordCheck) == "" || trim($ID) == "" || trim($職務類別) == "" || trim($性別) == "" )
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

$now_time = date("Y-m-d H:i:s",mktime());
$sql_update = "update Manger set MName = '" . $MName . "',MPassword = '" . $MPassword . "',ID = '" . $ID . "',性別 = '" . $性別 . "',生日 = '" . $生日 . "',聯絡電話 = '" . $聯絡電話 . "',行動電話 = '" . $行動電話 . "',職務類別 = '" . $職務類別 . "',MEMail = '" . $MEMail . "',Enable='" .$ChkEnable."',ProcUser = '" . $_SESSION["reg_MUID"] . "',ProcDate = '" . $now_time . "',ProcIP = '" . $_SERVER['REMOTE_ADDR'] . "' where MUID='". $MUID ."' and DelTag = 'N';";
$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");

mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("修改成功！"); 
		location.href='A01.php';
	//-->
	</SCRIPT>
</body>
</html>
