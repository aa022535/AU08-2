<div>
<ul class="menu">

            
              <?php if (trim(strstr($_SESSION["reg_MPer"],'A')) != ""){?>
	<li class="top"><a href="#" class="top_link"><span>A.員工</span></a>
		<ul class="sub">
	          <li><a href="A01.php">A01.員工管理</a></li>			
            <li><a href="A02.php">A02.權限設定</a></li>
            <li><a href="A03.php">A03.權限查詢</a></li>
		</ul>
        </li> 
              <?php }?>        
              <?php if (trim(strstr($_SESSION["reg_MPer"],'B')) != ""){?>
	<li class="top"><a href="#" class="top_link"><span>B.會員</span></a>
  	       <ul class="sub">
	    <li><a href="B01.php">B01.會員管理</a></li>			
            <li><a href="B02.php">B02.會員查詢</a></li>
		</ul>
        </li>     
              
        <?php }?>
               <?php if (trim(strstr($_SESSION["reg_MPer"],'C')) != ""){?>
	<li class="top"><a href="#" class="top_link"><span>C.產品管理</span></a>
	<ul class="sub">
	<li><a href="C01.php">C01.書籍資料</a></li>	
	    <li><a href="C01_add.php">C02.書籍新增</a></li>			
            
		</ul>
        </li>  
		
		<?php }?> 
		
		
		
               <?php if (trim(strstr($_SESSION["reg_MPer"],'C')) != ""){?>
	<li class="top"><a href="#" class="top_link"><span>D.供應商管理</span></a>
	<ul class="sub">
	<li><a href="D01.php">D01.供應商資料</a></li>	
	    <li><a href="D02_add.php">D02.供應商新增</a></li>			
            <li><a href="D03_edit.php">D03.供應商修改
</a></li>
		</ul>
        </li>  
		
		<?php }?>
		
		
		
             
			
			
			
			 <?php if (trim(strstr($_SESSION["reg_MPer"],'C')) != ""){?>
	<li class="top"><a href="#" class="top_link"><span>E.客戶管理</span></a>
	<ul class="sub">
	<li><a href="E01.php">E01.客戶資料</a></li>
	    <li><a href="E02_add.php">E02.客戶新增</a></li>	
			<li><a href="E03_edit.php">E03.客戶修改</a></li>	
		
            
</a></li>
		</ul>
        </li> 
            <?php }?> 
			
			
			<?php if (trim(strstr($_SESSION["reg_MPer"],'C')) != ""){?>
	<li class="top"><a href="#" class="top_link"><span>F.進貨管理</span></a>
	<ul class="sub">
	<li><a href="F01.php">F01.進貨訂單資料</a></li>
	    <li><a href="F01_addproduct.php">F02.進貨訂單新增</a></li>			
            
</a></li>
		</ul>
        </li> 
            <?php }?> 
			
			
			<?php if (trim(strstr($_SESSION["reg_MPer"],'C')) != ""){?>
	<li class="top"><a href="#" class="top_link"><span>G.銷貨管理</span></a>
	<ul class="sub">
	<li><a href="G02.php">G01.銷貨訂單資料</a></li>
	    <li><a href="G02_addproduct.php">G02.銷貨訂單新增</a></li>			
            
</a></li>
		</ul>
        </li> 
            <?php }?> 
			
			
              
               
        <li class="top"><a href="logout.php" class="top_link"><span>登出</span></a>              
                </li>       
</ul>                        
</div>
