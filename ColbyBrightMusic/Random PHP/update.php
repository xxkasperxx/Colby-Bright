<?php
	include("config.php");
	
	$left = $_POST['updateLeft'];
	$right = $_POST['updateRight'];


	if (isset($right))
	{
		$result = mysql_query("UPDATE about SET rightside = '$right' WHERE id = '1' ");
	}
	if (isset($left))
	{
	$result = mysql_query("UPDATE about SET leftside = '$left' WHERE id = '1' ");  	
	}

	if (!$result) {
	die('Invalid query: ' . mysql_error());
	}else
	{
		
		echo "Update Sucessfull! Click"."<a href='http://www.colbybrightmusic.com/login.php'> here</a>"." to return to update page";

	} 
?>