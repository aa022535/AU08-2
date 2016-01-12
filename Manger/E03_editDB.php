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
    return Culse;  
}  
</script>
</HEAD>
<body>
<?php
check_permision("A");

$Cu_no = strtolower($_POST["Cu_no"]);
$Cu_name = $_POST["Cu_name"];
$Cu_tel=$_POST['Cu_tel'];
$Cu_addr=$_POST['Cu_addr'];
$Cu_email=$_POST['Cu_email'];




if (trim($Cu_no) == "" || trim($Cu_name) == "" || trim($Cu_tel) == "" || trim($Cu_addr) == "" || trim($Cu_email) == "" )
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
$sql_update = "update cust set Cu_name = '" . $Cu_name . "',Cu_tel = '" . $Cu_tel . "',Cu_addr = '" . $Cu_addr . "',Cu_email = '" . $Cu_email . "' where Cu_no='". $Cu_no ."' and DelTag = 'N';";
$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");

mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("修改成功！"); 
		location.href='E01.php';
	//-->
	</SCRIPT>
</body>
</html>
