<?php
session_start();
$username = $_POST['username'];
$_SESSION['name26']=$username;

echo $_SESSION['name26'];
echo $username;
?>