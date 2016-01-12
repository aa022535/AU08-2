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

if (trim($MName) == "" || trim($MUID) == "" || trim($MPassword) == "" || trim($MPasswordCheck) == "" || trim($ID) == "" || trim($性別) == "" )
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
$sql_update = "update account set 會員姓名 = '" . $MName . "',密碼 = '" . $MPassword . "',ID = '" . $ID . "',性別 = '" . $性別 . "',生日 = '" . $生日 . "',手機號碼 = '" . $手機號碼 . "',會員階級 = '" . $會員階級 . "',信箱 = '" . $信箱 . "',顯示='" .$ChkEnable."' where 帳號='". $MUID ."' and 刪除 = 'N';";
$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");

mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("修改成功！"); 
		location.href='B01.php';
	//-->
	</SCRIPT>
</body>
</html>
