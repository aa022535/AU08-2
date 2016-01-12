<?php
require_once("global.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員註冊</title>
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
  <tr><td><center><font size="6"><b>會員註冊</b></font></center></td></tr>
</table>
<br />
<br />

  <table border="0" align="center">
  <form name="form2" method="post" action="registerDB.php">
  <tr>
      <td height="20" align="right">會員姓名:</td>
      <td><input type="text" name="Aname"></td>
  </tr>
  <tr>
      <td height="20" align="right">會員帳號:</td>
      <td><input type="text" name="AID"></td>
  </tr>
  <tr>
      <td height="20" align="right">會員密碼:</td>
      <td><input type="password" name="Apassword"></td>
  </tr>
  <tr>
      <td height="20" align="right">密碼確認:</td>
      <td><input type="password" name="Cpassword"></td>
  </tr>
  <tr>
      <td height="20" align="right">電子郵件:</td>
      <td><input type="text" name="mail"></td>
  </tr>
  <tr>
      <td height="20" align="right">手機號碼:</td>
      <td><input type="text" name="phone"></td>
  </tr>
  <tr>
      <td height="20" align="right">性別:</td>
      <td><select name="gender">
          <option value="男">男</option>
          <option value="女">女</option>
          </select></td>
  </tr>
  <tr>
      <td height="20" align="right">生日:</td>
      <td><input type="text" name="birthday" placeholder="yyyy/mm/dd"></td>
  </tr>
  <tr>
      <td colspan="2" align="center"><input type="submit" value="註冊"></td>

  </tr>
  </form>
  </table>

  </body>
</html>
