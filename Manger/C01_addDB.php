<?php
session_start();
require_once("CheckPermission.php");
require_once("../global.php");
require_once("../connect.php");
require_once("Time.php");
?>

<?php

$It_no = $_POST["It_no"];
$It_name = $_POST["It_name"];
$It_pri = $_POST["It_pri"];
$It_nowqty=$_POST['It_nowqty'];


/*echo $user_name;
echo$user_pwd;
echo$user_email;
echo$user_mobile;
echo$user_birthday;*/

if($It_no != null && $It_name != null && $It_pri != null && $It_nowqty != null)
{
        //新增資料進資料庫語法
        $sql = "insert into items (It_no, It_name, It_pri, It_nowqty,DelTag) values ('$It_no', '$It_name', '$It_pri', '$It_nowqty', 'N')";
        if(mysql_query($sql))
        {
                echo '加入成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=C01.php>';
        }
        else
       {
                echo '加入失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=C01_add.php>';
        }

}
?>