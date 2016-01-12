<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<?php
session_start();
require_once("../global.php");
require_once("../connect.php");
require_once("record_nav.php");
include "CheckPermission.php";
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $site_title;?></title>
    <link rel="stylesheet" href="menu_style.css" type="text/css" />
    <link rel="stylesheet" href="body.css" type="text/css" />
<link href="record_nav.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
//防滑鼠右鍵  
document.oncontextmenu=function(){  
    return false;  
}  
</script>
<link href="page.css" rel="stylesheet" type="text/css" />
<link href="title.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body>
    <?php
check_permision("B");
 include "Mindex1.php" ?>
<br>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="4" class="area_spacer"><!-- 中間的空白 --></td>
    <td width="100%" valign="top"><!-- Main Body -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td width="30"><img src="images/title_color_block_01.gif" width="30" height="40" /></td>
          <td class="system_title_cht">進貨管理</td>
        </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="5"></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#FFFFFF"></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td bgcolor="#FFFFFF"><table width="93%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="30" align="left">
             每頁顯示筆數：&nbsp;<a href='B01.php?record_per_page=15'>15筆&nbsp;</a>
                           &nbsp;<a href='B01.php?record_per_page=50'>50筆&nbsp;</a>
                           &nbsp;<a href='B01.php?record_per_page=100'>100筆&nbsp;</a>
              <td height="30" align="right"><a href="F01_addproduct.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('addnew_btn','','images/btn_addnew_on.gif',1)"><img src="images/btn_addnew_off.gif" alt="新增資料" name="addnew_btn" width="65" height="22" border="0" id="addnew_btn" /></a></td>
            </tr>
          </table>
            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td width="200" align="center" bgcolor="#666666" class="list_title">進貨單號</td>
              <td width="200" align="center" bgcolor="#666666" class="list_title">供應商編號</td>
              <td width="200" align="center" bgcolor="#666666" class="list_title">書籍編號</td>
              <td width="200" align="center" bgcolor="#666666" class="list_title">新增庫存</td>
			  <td width="200" align="center" bgcolor="#666666" class="list_title">進貨日期</td>
              <td width="60" bgcolor="#666666">&nbsp;</td>
            </tr>
<?php
$SQL_select="select Sh_no,Fa_no,It_no,Sh_qua,Sh_date from shop where DelTag = 'N';";

$result_select=mysql_query($SQL_select,$link) or die ("無法執行查詢");

if($result=mysql_query($SQL_select,$link)){
	if (!isset($_GET["Pages"])) $page=1;
	else $page=$_GET["Pages"];
	if (!isset($_GET["record_per_page"])) $record_per_page=15;
	else $record_per_page=$_GET["record_per_page"];
	$total_fields=mysql_num_fields($result);
	$total_rows=mysql_num_rows($result);
	$total_pages= ceil($total_rows/$record_per_page);
	$offset=($page-1)*$record_per_page;
	mysql_data_seek($result,$offset);
	$j=1;
	$tmp=0;
	while($row=mysql_fetch_array($result,MYSQL_ASSOC) and $j<=$record_per_page ){
?>
		<tr onmouseout="style.backgroundColor='#ffffff';" onmouseover="style.backgroundColor='#F0F0F0';">
        <td align="center" class="list_sn"><?php echo htmlspecialchars($row["Sh_no"]); ?></td>
        <td align="center" class="list_txt"><?php echo htmlspecialchars($row["Fa_no"]); ?></td>
        <td align="center" class="list_txt"><?php echo htmlspecialchars($row["It_no"]);?></td>
        <td align="center" class="list_txt"><?php echo htmlspecialchars($row["Sh_qua"]);?></td>
		<td align="center" class="list_txt"><?php echo htmlspecialchars($row["Sh_date"]);?></td>
                  
        
        <td width="60" align="center"><a href="F01_edit.php?Sh_no=<?=$row["Sh_no"]?>&Pages=<?=$page?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btn_edit','','images/btn_edit_on.gif',1)"><img src='images/btn_edit_off.gif' alt='Edit Data' name='btn_edit' width='19' height='19' border='0' align='absmiddle' id='btn_edit' /></a>&nbsp;
		  <a href='#' onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btn_edit','','images/btn_edit_on.gif',1)"><img src='images/btn_del_off.gif' alt='Delete Data' name='btn_del' width='19' height='19' border='0' align='absmiddle' id='btn_del' onclick="javascript:if (confirm('刪除後資料將無法回復，確定要刪除？'))location.href='F01_delDB.php?Sh_no=<?php echo $row['Sh_no']?>&Pages=<?php echo $page?>'" /></a></td>
		</tr>
		<tr><td colspan='11' background='images/body_sep_line.gif' height='2'></td></tr>
<?php
		$j++;
		$tmp++;
	}
?>
          </table>
            <table width="93%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="30" align="center"><span class="menu-item1">
                  <?php Show_Pager($page,$total_pages,$record_per_page,"","",$j);?>
                </span></td>
              </tr>
            </table></td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"></td>
        </tr>
      </table></td>
  </tr>
</table>
<br />
<br />
<br />
<?php
	mysql_free_result($result);
}
mysql_close($link);
?>
</body>
</html>
