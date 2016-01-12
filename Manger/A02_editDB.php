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
$MUID = $_POST["MUID"];
$MName = $_POST["MName"];
$職務類別 = $_POST["職務類別"];
$IP=$_SERVER['REMOTE_ADDR'];
if(isset($_POST["MPer"])){
$MPer = $_POST["MPer"];
$MPerTxt = join(",",$MPer);
}else{
 $MPer="";
 $MPerTxt = "";
}

if (trim($MName) == "" || trim($MUID) == ""|| trim($ID) == ""|| trim($職務類別) == "")
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


$now_time = date("Y-m-d H:i:s",mktime());
$sql_update = "update Manger set MPer = '" . $MPerTxt . "',ProcUser = '" . $_SESSION["reg_MUID"] . "',ProcDate = '" . $now_time . "',ProcIP = '" . $_SERVER['REMOTE_ADDR'] . "' where MUID='". $MUID ."' and DelTag = 'N';";
$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");

mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("修改成功！"); 
		location.href='A02.php';
	//-->
	</SCRIPT>
</body>
</html>
