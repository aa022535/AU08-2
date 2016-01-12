<?php
  session_start();
  require_once("../connect.php");
  require_once("../Manger/time.php");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
 $Aname=$_POST["Aname"]; 
 $AID=$_POST["AID"];
 $Apassword=$_POST["Apassword"];
 $Cpassword=$_POST["Cpassword"];
 $mail=$_POST["mail"];
 $phone=$_POST["phone"]; 
 $gender=$_POST["gender"];
 $birthday=$_POST["birthday"];
 /*
 echo $AID."<br />";
 echo $Apassword."<br />";
 echo $Cpassword."<br />";
 echo $mail."<br />";
 echo $phone."<br />";
 echo $gender."<br />";
 echo $birthday."<br />";
 */


if(trim($Aname)==""||trim($AID)==""||trim($Apassword)==""||trim($Cpassword)==""||trim($mail)==""||trim($phone)==""||trim($birthday)==""){
 ?>
	<SCRIPT language=javascript>
	<!--
		alert ("您輸入的資料不全！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}

if(preg_match("/[\x7f-\xff]/", $AID)){
 ?>
	<SCRIPT language=javascript>
	<!--
		alert ("會員帳號不能使用中文！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}

if(trim($Apassword)!=trim($Cpassword)){
 ?>
	<SCRIPT language=javascript>
	<!--
		alert ("您輸入的密碼不一致！"); 
		history.go(-1);
	//-->
	</SCRIPT>
<?php	
	exit;
}




$SQL_select="select * from account where 刪除 = 'N' and 帳號 = '" . $AID . "';";
$result_select=mysql_query($SQL_select,$link) or die ("無法執行查詢");
if (mysql_num_rows($result_select) != 0)
{
	mysql_free_result($result_select);
	mysql_close($link);
?>
	<SCRIPT language=javascript>
	<!--
		alert ("您輸入的會員已經使用中，請重新輸入！"); 
		history.go(-1);
	//-->
	</SCRIPT> 
<?php
	exit;
} 
              
$SQL_select="select max(RID) from account";
$result_select=mysql_query($SQL_select,$link) or die ("無法執行查詢");
$MAX=mysql_result($result_select,0);

$MAX=$MAX+1;

$會員代號="AA".$MAX;

     
$now_time = date("Y-m-d H:i:s",mktime());
$IP=$_SERVER['REMOTE_ADDR'];

$sql_insert = "insert into account (ID,會員姓名,帳號,密碼,信箱,手機號碼,性別,生日,顯示,會員階級,上次登入,登入IP,刪除) values ('" . $會員代號 . "','" .  $Aname . "','" . $AID . "','" . $Apassword . "','" . $mail . "','" . $phone . "','" . $gender . "','" . $birthday . "','Y','一般會員','" . $now_time. "','" . $IP . "','N');";
$result_insert=mysql_query($sql_insert,$link) or die ("無法執行新增"); 

mysql_close($link);
?>              
	<SCRIPT language=javascript>
	<!--
	alert ("新增成功！"); 
	location.href='./index.php';
	//-->
	</SCRIPT>  
