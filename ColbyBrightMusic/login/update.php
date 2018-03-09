<?php
session_start();
if($_SESSION['username'])
{
    $connect = mysql_connect("colbybrightmusic.db.8356999.hostedresource.com","colbybrightmusic","Maxgaming88")or die("Couldnt connect to the database! Sorry.");
    mysql_select_db("colbybrightmusic") or die ("Couldnt find table Database. Sorry");
   
   
    $left = $_POST['updateLeft'];
    $right = $_POST['updateRight'];


    if (isset($right))
    {
        $result = mysql_query("UPDATE about SET rightside = '$right' WHERE id = '1' ");
    }else if (isset($left))
    {
    $result = mysql_query("UPDATE about SET leftside = '$left' WHERE id = '1' ");     
    }

    if (!$result) {
    die('Invalid query: ' . mysql_error());
    }else
    {
       
        echo "Update Sucessfull! Click"."<a href='http://www.colbybrightmusic.com/login.php'> here</a>"." to return to update page";

    }
   
}
else
    die ("You must be logged in!");*/
 


?>
