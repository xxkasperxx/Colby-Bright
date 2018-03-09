 <?php

 if ($_SESSION['sesh'])
 {
  session_start();
echo "Please Log in.. <a href='http://www.colbybrightmusic.com/admin.php'>Log in Here </a>";
 }else
 {
	 
  
 	unset($_SESSION["sesh"]);
 
 echo "You've been logged out. Click <a href='admin.php'> here</a> to return";
 }
	
 
 ?>