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

$It_no = strtolower($_POST["It_no"]);
$It_name = $_POST["It_name"];
$It_pri= $_POST["It_pri"];
$It_nowqty = $_POST["It_nowqty"];


if (trim($It_no) == "" || trim($It_name) == "" || trim($It_pri) == "" || trim($It_nowqty) == "" )
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
$sql_update = "update items set It_name = '" . $It_name . "',It_pri = '" . $It_pri . "',It_nowqty = '" . $It_nowqty . "'where It_no='". $It_no ."' and DelTag = 'N';";
$result_update=mysql_query($sql_update,$link) or die ("無法執行修改");

mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("修改成功！"); 
		location.href='C01.php';
	//-->
	</SCRIPT>
</body>
</html>
