<?php
session_start();
require_once("CheckPermission.php");
require_once("../global.php");
require_once("../connect.php");
require_once("Time.php");
?>

<?php

$Cu_no = $_POST["Cu_no"];
$Cu_name = $_POST["Cu_name"];
$Cu_tel=$_POST['Cu_tel'];
$Cu_addr=$_POST['Cu_addr'];
$Cu_email=$_POST['Cu_email'];


/*echo $user_name;
echo$user_pwd;
echo$user_email;
echo$user_mobile;
echo$user_birthday;*/

if($Cu_no != null && $Cu_name != null&& $Cu_tel != null&& $Cu_addr != null&& $Cu_email != null)
{
        //新增資料進資料庫語法
        $sql = "insert into cust (Cu_no, Cu_name,Cu_tel,Cu_addr,Cu_email,DelTag) values ('$Cu_no', '$Cu_name', '$Cu_tel','$Cu_addr','$Cu_email','N')";
        if(mysql_query($sql))
        {
                echo '加入成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=E01.php>';
        }
        else
       {
                echo '加入失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=E02_add.php>';
        }

}
?>