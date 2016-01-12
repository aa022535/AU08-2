
<?php

session_start();
require_once("../global.php");
require_once("../connect.php");
require_once("record_nav.php");
include "CheckPermission.php";

 $It_no=$_POST["It_no"]; //陣列型態，產品編號
 $Sh_qua=$_POST["Sh_qua"];//進貨數量
 $Sh_date=date("y.m.d");
 
 
 $Sh_no=$_POST["Sh_no"];
 $Fa_no=$_POST["Fa_no"];
 //echo $It_no[0]; //產品編號
 //echo $Sh_qua; //數量
 //foreach($It_no as $avalue)
 //echo $avalue."<br>";
 

 //將產品編號、數量、進貨日期新增至進貨表 shop
 
 
        //新增資料進資料庫語法
        $sql="insert into shop(Sh_no,Fa_no,It_no,Sh_qua,Sh_date,DelTag)
values('".$Sh_no."','".$Fa_no."','".$It_no[0]."','".$Sh_qua."','".$Sh_date."','N')";
        if(mysql_query($sql))
        {
                echo '進貨處理完成';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=F01.php>';
        }

 
 //$sql="insert into shop(It_no,Sh_qua,Sh_date)
//values('".$It_no[0]."','".$Sh_qua."','".$Sh_date."')";
// $result=mysqli_query($con,$sql);

 //查詢庫存數量
 $sql="select * from items where It_no='".$It_no[0]."'";
 $result=mysql_query($sql);
 $row = mysql_fetch_array($result);
 $new_Sh_qua=$row['It_nowqty']+$Sh_qua;
 

 

 //更正庫存數量
 $sql="update items set It_nowqty='".$new_Sh_qua. "' where It_no='".$It_no[0]."'";
 $result=mysqli_query($con,$sql);
if(mysql_query($sql))
        {
                echo '進貨處理完成!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=F01.php>';
        }
 
//以上查詢與更正庫存數量亦可合併處理如下：
 //$sql="update items set Sh_qua=Sh_qua+$Sh_qua where It_no='".$It_no[0]."'";
 //$result=mysqli_query($con,$sql);
 //Sh_qua 是欄位名稱
 //$Sh_qua 是進貨數量
?> 