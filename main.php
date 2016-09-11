<?php
	$mainPages = $_GET['p'] . ".php";

	if($_GET['p'] == ""){
		include "home.php";
	} else{
		include $mainPages;
	}
?>