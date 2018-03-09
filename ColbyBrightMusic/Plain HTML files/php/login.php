<?php
include 'functions.php';
if ($_POST['login'])
{

	// get data
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username&&$password)
	{
	
		
		$login = mysql_query("SELECT * FROM users WHERE username='$username'");
		while ($row = mysql_fetch_assoc($login))
		{
			$db_password = $row['password'];
			if ($password==$dbpassword)
			{
				$loginok = TRUE;
			}else
			{
				$loginok = FALSE;
			}
			
			if ($loginok==TRUE)
			{
				$_SESSION[];
			}else
			{
				die ("Incorrect username/password combo");
			}
			
		}
	
	}else
	{
		die("Please enter a username and password");
		exit();
	}

}
?>

<form action="login.php" method="POST">
username:<br>
<input type="text" name="username">
password:<br >
<input type="password" name="password">
<input type="submit" name = "login" value="login">
</form>