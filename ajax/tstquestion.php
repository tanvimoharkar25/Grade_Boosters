<?php
	require_once '../class/project.php';
	// pre($_POST);
	$title = $_POST["txttitle"];
	if(val_alphanumspace($title, "3,50") == false)
		echo "Please enter proper Title";
	else
	{
		$objproject->insert("test", "test_name", "'$title'");
			echo "Test Added";	
	}

?>