<?php
require_once("global.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $site_title;?></title>
<script type="text/javascript">
//防滑鼠右鍵  
document.oncontextmenu=function(){  
    return false;  
}  
</script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(images/back.jpg);
	background-size: cover;
}
-->
</style>
</head>
<body>
<br />
<br />
<table width="700" border="0" align="center">
  <tr><td><center><font size="6"><b>會員登入網頁</b></font></center></td></tr>
</table>
<br />
<br />
<center><img src="images/account.png" width="420" height="300"></center>
<br />
<br />

<table width="500" border="0" align="center">
<form name="form1" method="post" action="loginDB.php">
  <tr> 
  <td height="30" align="right"><b>ID / 帳號： </b></td>
  <td><input type="text" size="20" name="MUID"></td> 
  </tr>
  <tr>
  <td height="30" align="right"><b>Password / 密碼：</b></td>
  <td><input type="password" size="20" name="APassword"></td> 
  </tr>  
  <tr>  
  <td height="30"  align="center"><input type="button" value="註冊會員" onclick="javascript:location.href='register.php'"></td>
    <td><input type="submit" value="登入"></td>
  </tr>
  </form>        
</table>
  <br />
<br />

  <center>
<font color=#191970 size='2'>
真理大學 資訊管理學系<br />
<br />
<br /> 


<br>
</center>
</body>
</html>