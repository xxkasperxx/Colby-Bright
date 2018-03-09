<?php
session_start();
include("config.php");
$query = mysql_query("SELECT * FROM shows ORDER BY id DESC");
//$query_row=mysql_fetch_array($query);

if (isset($_SESSION['loggedin'])&&isset($_SESSION['username']))
 {
 echo "<a href='logout.php'> Log-out!</a>";
?>

<?php

 

	
	
	

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Colby Bright Music</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<link href="css/admin.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript">        
        $(function() {
            $("#loading-overlay").hide();
        });
    </script>
<!--[if IE ]>
<link href="css/ie.css" type="text/css" rel="stylesheet" />
<![endif]-->
		<!-- Browser Icon -->
	  <link rel="shortcut icon" href=".\favicon.ico">
	   <!-- End browser Icon -->
		</head>



	<body id="sector1">
<div id="loading-overlay">Loading...</div>
		<div id="logo">
			<div class="c">C</div>
			<div class="olby">olby</div>
			<div class="b">B</div>
			<div class="right">right</div>
		</div>
		<!-- Black Menu -->
		<div id="menu_wrapper" class="black">
		<div class="left"></div>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="takeoff.html">Takeoff Season</a></li>
				<li><a href="music.php">Music</a></li>
				<li><a href="videos.php">Videos</a></li>
				<li><a href="interview.php">Interviews</a></li>
				<li><a href="store.html">Store</a></li>
				<li><a href="contact.html">Contact</a></li>

			</ul>
		</div>
			
			<form method="POST" action="shows.php">
				<table  width="100%" border="0"  >
				
					<colgroup class="cities" />
					<colgroup span="4" class="dates" />
						<col span="4">
						<col class="totals">
					</colgroup>
						
						<tr>	
							<td><h6>Date</h6></td>
							<td><h6>Time</h6></td>
							<td><h6>Location</h6></td>
							<td><h6>Address</h6></td>
							<td><h6>Price</h6></td>
						</tr>	
							<tbody>
								
								<div id="shows">
							
									
									
										<tr>
											<td>
												<textarea style="display:block; max-width:100%; min-height:1em;" name="date" ></textarea>
											</td>
											<td>
												<textarea style="display:block; max-width:100%; min-height:1em;" name="time" ></textarea>
											</td>
											<td>
												<textarea style="display:block; max-width:100%; min-height:1em;" name="location" ></textarea>
											</td>
											<td>
												<textarea style="display:block; max-width:100%; min-height:1em;" name="address" ></textarea>
											</td>
											<td>
												<textarea style="display:block; max-width:100%; min-height:1em;" name="price" ></textarea>
											</td>
												
										</tr>
										<input type="submit" value="Insert New Show" />
										<p>Please only click Inster New Show once, when you press it, the update will take full effect. P.S. Please do not refresh this page, it will make duplicate show listings.</p>
										
									
								
							</div>
									<?php 
											
											 while($row = mysql_fetch_array($query)){
											echo "<tr>";
											echo "<td>";
												  echo $row['date'];
											echo "</td>";
											echo "<td>";
												  echo $row['time'];
											echo "</td>";
											echo "<td>";
												  echo $row['location'];
											echo "</td>";
											echo "<td>";
												  echo $row['address'];
											echo "</td>";
											echo "<td>";
												  echo $row['price'];
												  echo "<br>";
											echo "</td>";
											echo "</tr>";
											 }
											
										?>
								
							</tbody>
						</table>
					
					</form>
		
				
			
				
					
						
		
</body>
</html>

<?php
 }else
{
 ?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php

	
	
	
	

	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Colby Bright Music</title>
<link href="css/main.css" type="text/css" rel="stylesheet" />
<!--[if IE ]>
<link href="css/ie.css" type="text/css" rel="stylesheet" />
<![endif]-->
		<!-- Browser Icon -->
	  <link rel="shortcut icon" href=".\favicon.ico">
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript">        
        $(function() {
            $("#loading-overlay").hide();
        });
    </script>
	   <!-- End browser Icon -->
		</head>



	<body id="sector1">
	<div id="loading-overlay">Loading...</div>
<div id="logo">
			<div class="c">C</div>
			<div class="olby">olby</div>
			<div class="b">B</div>
			<div class="right">right</div>
		</div>
		
		<!-- Black Menu -->
		<div id="menu_wrapper" class="black">
		<div class="left"></div>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="takeoff.html">Takeoff Season</a></li>
				<li><a href="music.php">Music</a></li>
				<li><a href="videos.php">Videos</a></li>
				<li><a href="interview.php">Interviews</a></li>
				<li><a href="store.html">Store</a></li>
				<li><a href="contact.html">Contact</a></li>

			</ul>
		</div>
			
			
				<table  width="100%" border="0"  >
				
					<colgroup class="cities" />
					<colgroup span="4" class="dates" />
						<col span="4">
						<col class="totals">
					</colgroup>
						
						<tr>	
							<td><h6>Date</h6></td>
							<td><h6>Time</h6></td>
							<td><h6>Location</h6></td>
							<td><h6>Address</h6></td>
							<td><h6>Price</h6></td>
						</tr>	
							<tbody>
								
							
									<?php 
											
											 while($row = mysql_fetch_array($query)){
											echo "<tr>";
											echo "<td>";
												  echo $row['date'];
											echo "</td>";
											echo "<td>";
												  echo $row['time'];
											echo "</td>";
											echo "<td>";
												  echo $row['location'];
											echo "</td>";
											echo "<td>";
												  echo $row['address'];
											echo "</td>";
											echo "<td>";
												  echo $row['price'];
												  echo "<br>";
											echo "</td>";
											echo "</tr>";
											 }
											
										?>
									
								
							
								
								
							</tbody>
						
		
				
			
				
					
						
		
</body>
</html>

<?php
}
	$date = $_POST['date'];
	$time = $_POST['time'];
	$location = $_POST['location'];
	$address = $_POST['address'];
	$price = $_POST['price'];

if (isset($date)&&($time)&&($location)&&($address)&&($price))
{
		$sql    = "INSERT into shows (date,time,location,address,price) VALUES('$date','$time','$location','$address','$price')";


		$qury  = mysql_query($sql);
		}

	if (!$result) {
	
	}else
	{
		
		echo "<b>Update Sucessfull! Click"."<a href='http://www.colbybrightmusic.com/test.php'> here</a>"." to view your update!</b>";

	} 
?>


