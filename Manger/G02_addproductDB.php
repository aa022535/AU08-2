
<?php

session_start();
require_once("../global.php");
require_once("../connect.php");
require_once("record_nav.php");
include "CheckPermission.php";

 $It_no=$_POST["It_no"]; //陣列型態，產品編號
 $Sa_qua=$_POST["Sa_qua"];//進貨數量
 $Sa_date=date("y.m.d");
 
 $Sa_no=$_POST["Sa_no"];
 $Cu_no=$_POST["Cu_no"];

 

 //將產品編號、數量、進貨日期新增至進貨表 shop
 
 
        //新增資料進資料庫語法
        $sql="insert into sale(Sa_no,cu_no,It_no,Sa_qua,Sa_date,DelTag)values('".$Sa_no."','".$Cu_no."','".$It_no[0]."','".$Sa_qua."','".$Sa_date."','N')";
        if(mysql_query($sql))
        {
                echo '進貨處理完成';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=G02.php>';
        }

 
 //$sql="insert into shop(It_no,Sh_qua,Sh_date)
//values('".$It_no[0]."','".$Sh_qua."','".$Sh_date."')";
// $result=mysqli_query($con,$sql);

 //查詢庫存數量
 $sql="select * from items where It_no='".$It_no[0]."'";
 $result=mysql_query($sql);
 $row = mysql_fetch_array($result);
 $new_Sh_qua=$row['It_nowqty']-$Sa_qua;

 //更正庫存數量
 $sql="update items set It_nowqty='".$new_Sh_qua. "' where It_no='".$It_no[0]."'";
 $result=mysql_query($sql);
if(mysql_query($sql))
        {
                echo '進貨處理完成!';
				
                echo '<meta http-equiv=REFRESH CONTENT=2;url=G02.php>';
        }
 
//以上查詢與更正庫存數量亦可合併處理如下：
 //$sql="update items set Sh_qua=Sh_qua+$Sh_qua where It_no='".$It_no[0]."'";
 //$result=mysqli_query($con,$sql);
 //Sh_qua 是欄位名稱
 //$Sh_qua 是進貨數量
?> 