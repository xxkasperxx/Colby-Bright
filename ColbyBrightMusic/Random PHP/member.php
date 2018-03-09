<?php

 session_start();

 
//if($_SESSION['username'])
//{
	echo "Welcome, ".$_SESSION['username']."!<a href='logout.php'> Logout</a><br>";
	$directions = "<h3>Directions:</h3> Please click a link below to enter the update phase!<br>";
	

	echo $directions;
	
	
	
//}
//else
//	die("You must be logged in!");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>



<div class="aboutUpdate">
<a href="aboutUpdate.php"><h2>Home Page</h2></a><br>
<a href="musicChange.php"><h2>Music Page</h2></a><br>
<a href="addVideos.php"><h2>Videos Page</h2></a><br>
<a href="addShows.php"><h2>Shows Page</h2></a><br>
<a href="addInterviews.php"><h2>Interviews Page</h2></a><br>

</div>


</body>
</html>
