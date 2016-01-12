<?
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><? echo $site_title;?></title>
</head>
<body>
<?
session_unset();
?>
<SCRIPT language=javascript>
<!--
alert ("登出成功！");
window.close();
//-->
</SCRIPT>
</body>
</html>

