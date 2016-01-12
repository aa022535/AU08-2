<?php
	
function Show_Pager($page,$total_pages,$record_per_page,$other_parameter,$j)//產生分頁導覽列 
{ 
	echo "<div class=\"pagination\">";

	if (1 < $page) {
		echo "<a href=" . $_SERVER['PHP_SELF'] . "?Pages=1&record_per_page=$record_per_page" . $other_parameter."><span >&#9668;&#9668;</span></a>&nbsp;";
		echo "<a href=" . $_SERVER['PHP_SELF'] . "?Pages=" ;
		if(($page-1)< 1) echo "1";
		else echo ($page-1);
		echo $other_parameter.">&#9668;</a>&nbsp;";
	}
	else{
		echo "<span class=\"disabled\">&#9668;&#9668;</span>&nbsp;";
		echo "<span class=\"disabled\">&#9668;</span>&nbsp;";
	}
	for ($i = 1 ; $i <= $total_pages ;  $i++){
		if($i+9<$page)
			$i = $page-9;
		if($j>9) break;
		if ($i==$page) echo  "<span class=\"current\">" . $i . "</span>&nbsp;";
		else echo "<a href=" . $_SERVER['PHP_SELF'] . "?Pages=" . $i . $other_parameter."&record_per_page=$record_per_page><b>" . $i . "</b></a> ";
		$j++;		
	}
	if ($total_pages > $page) {
		echo "<a href=" . $_SERVER['PHP_SELF'] . "?Pages=" ;
		if(($page+1)> $total_pages)echo $total_pages;
		else echo ($page+1).'&record_per_page='.$record_per_page;
		echo $other_parameter.">&#9658;</a>";
		echo "&nbsp;<a href=" . $_SERVER['PHP_SELF'] . "?Pages=" . $total_pages . $other_parameter."&record_per_page=$record_per_page><span >&#9658;&#9658;</span></a>";
		
	}
	else{
		echo "<span class=\"disabled\">&#9658;</span>";
		echo "&nbsp;<span class=\"disabled\">&#9658;&#9658;</span></a>";
	}
	echo "</div>";
}
?>