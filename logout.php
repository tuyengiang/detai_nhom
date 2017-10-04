<?php require_once("inc/lib.php");?>
<?php 
	if(isset($_SESSION["user"])){
		unset($_SESSION["user"]);
		header("location:index.php");
	}


?>