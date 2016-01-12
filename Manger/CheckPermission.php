<?php
function check_permision($this_rule){
	if (trim(strstr($_SESSION["reg_MPer"],$this_rule))== "" ){
?>
		<script language="javascript">
			alert("存取被拒絕");
			//location.href="../index.php";
		</script>
<?php
		die();
	}
}

if ($_SESSION["reg_MUID"]=="" || $_SESSION["reg_MName"] == ""){
?>
	<script language="javascript">
		location.href="../index.php";
	</script>
<?php
	die();
}
?>