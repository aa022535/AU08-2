<?php
session_start();
require_once("CheckPermission.php");
require_once("../global.php");
require_once("../connect.php");
require_once("Time.php");
?>

<?php

$Fa_no = $_POST["Fa_no"];
$Fa_name = $_POST["Fa_name"];
$Fa_per = $_POST["Fa_per"];
$Fa_tel=$_POST['Fa_tel'];
$Fa_addr=$_POST['Fa_addr'];
$Fa_email=$_POST['Fa_email'];


/*echo $user_name;
echo$user_pwd;
echo$user_email;
echo$user_mobile;
echo$user_birthday;*/

if($Fa_no != null && $Fa_name != null && $Fa_per != null)
{
        //新增資料進資料庫語法
        $sql = "insert into fact (Fa_no, Fa_name, Fa_per, Fa_tel,Fa_addr,Fa_email,DelTag) values ('$Fa_no', '$Fa_name', '$Fa_per', '$Fa_tel','$Fa_addr','$Fa_email','N')";
        if(mysql_query($sql))
        {
                echo '加入成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=D01.php>';
        }
        else
       {
                echo '加入失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=D02_add.php>';
        }

}
?>