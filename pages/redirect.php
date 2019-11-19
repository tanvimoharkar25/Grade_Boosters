<?php
	session_start();

	$username = $_SESSION["username"];
	
	if($username == "admin")
		header("location: admin/Docs.php");
	else
		header("location: user/Docs.php?sub=1");
?>