<?php 
include("config.php");
	$query = mysql_query("SELECT * FROM about");
	$query_row=mysql_fetch_array($query);
	$query = mysql_query("SELECT * FROM shows");
	$query_row=mysql_fetch_array($query);
	$query = mysql_query("SELECT * FROM interviews");
?>
<?php echo($query_row[leftside]); ?>
<?php echo($query_row[rightside]); ?>

						<?php 
						while($row = mysql_fetch_array($query)) 
						{
							echo $row['interviewArea']; 
							echo "<br>";
						}  
					?>