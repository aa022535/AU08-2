<?php    
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
session_unset();
?>
<SCRIPT language=javascript>
<!--
alert ("登出成功！");
window.location.assign("shop.php");
//-->                 
</SCRIPT>
</body>
</html> 

