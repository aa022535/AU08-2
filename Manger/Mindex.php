<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">

<?php
session_start();
require_once("../global.php"); 
include "CheckPermission.php";
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $site_title;?></title>
    <link rel="stylesheet" href="menu_style.css" type="text/css" />
    <link rel="stylesheet" href="body.css" type="text/css" />

<script type="text/javascript">
//防滑鼠右鍵  
document.oncontextmenu=function(){  
    return false;  
}  
</script>

</head>
<body> 
    <?php include "Mindex1.php" ?>
<br>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
        <tr>
          <td width="30"><img src="images/title_color_block_01.gif" width="30" height="40" /></td>
          <td >登入成功 ! :)</td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
            <tr>
              <td><br /><br />  <p class="welcome_txt">親愛的 <b><?php echo $_SESSION["reg_MUID"];?> ( <?php echo $_SESSION["reg_MName"];?> )</b> 您好 !<br />
              你上次登入的時間為 <?php echo $_SESSION["reg_MLoginTime"]?><br />
              請選擇維護項目 !</p> <br /><br />             </td>
            </tr>
            <tr>
              <td bgcolor="#CCCCCC" height="1"></td>
            </tr>
          <td bgcolor="#FFFFFF">&nbsp;</td>  
</tr>
<br>
</table>
</div>
</body>
</html>
