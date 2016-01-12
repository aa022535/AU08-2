<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("db_connect.php");
include("index.html");
$user_name = $_POST['user_name'];
$user_pwd = $_POST['user_pwd'];
$user_pwd2= $_POST['user_pwd2'];
$user_email = $_POST['user_email'];
$user_mobile = $_POST['user_mobile'];
$user_birthday = $_POST['user_birthday'];



/*echo $user_name;
echo$user_pwd;
echo$user_email;
echo$user_mobile;
echo$user_birthday;*/

if($user_name != null && $user_pwd != null && $user_pwd2 != null && $user_pwd == $user_pwd2)
{
        //新增資料進資料庫語法
        $sql = "insert into user (user_name, user_pwd, user_email, user_mobile, user_birthday) values ('$user_name', '$user_pwd', '$user_email', '$user_mobile', '$user_birthday')";
        if(mysql_query($sql))
        {
                echo '加入成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
       {
                echo '加入失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
        }

}
?>