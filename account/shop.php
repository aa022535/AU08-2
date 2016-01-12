<!DOCTYPE HTML >
<?php
session_start();
?>
<html>
  <head>
  <title>龍翼的blog</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href='images/louis.gif' type='image/vnd.microsoft.icon' rel='shortcut icon'/> 
  <link href='images/louis.gif' type='image/vnd.microsoft.icon' rel='icon'/>
  
  <style>
      #headall{                       
              background-color:black;
              height:30px;
              line-height:30px;               
             }
      .head{                       
             display:inline;
             color:white; 
             font-size:10px;          
             }
             
      #login1{
            float:right;
            } 
      a.login:link,a.login:visited{     
            color:white;
            font-size:10px;
            }                      
       #bodyall{
         margin-left:30px;
         width:60%;         
       }
       #bodytop{
       background-color:white;    
       height:150px;
       padding:5px 15px 0px 15px;

       }
       #bodyleft{
       background-color:gray;
       float:left;
       width:35%;
       height:700px;
       background: rgba(0%,10%,20%,0.6);
       }
       #bodymain{
       background-color:blue;
       float:left;
       width:65%;
       height:700px;
       background:rgba(30%,0%,0%,0.6);     
       }
       #bodybottom{
       background-color:black;
       clear:both;
       height:200px;
          
       }


     body{
          margin:0;
          background-image:url(images/back.jpg);
          background-size: cover;          
         }   
     a{
       text-decoration:none;
     }
     
  

  </style>
  
  
  </head>
  <body>
  
  <div id="headall">   
     <div class="head">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="search1" size=20px>&nbsp;<input type="image" src="images/0012.png" width="20" height="20" align="center"></div>
     <div class="head" id="login1"><?php if(isset($_SESSION["reg_MUID"])) {echo $_SESSION["reg_MName"]."先生!!! 您好 &nbsp;&nbsp;".'<a href="logout.php" class="login">登出</a>&nbsp;&nbsp;' ;} else {echo '<a href="register.php" class="login">註冊</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="login">登入</a>&nbsp;&nbsp;';} ?> </div>
   
  </div>
  <div id="bodyall">
     <div id="bodytop">
     <h1>假裝他是一個電子購物商城</h1>
     <br>
     <p align="right"></p>
     </div>
     <div id="bodyleft">  
     </div>
     <div id="bodymain">
     </div>
     <div id="bodybottom">
     </div>
  </div> 
  </body>
</html>
      