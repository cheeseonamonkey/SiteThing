<html>
<head>
	<link rel="stylesheet" href="styling.css">
	</head>

	
	
	
	<div id="navList">
 <ul id="navlist">
 <li id="active"><a href="#" id="current">Home</a></li>
 <li><a href="#">About</a></li>
 <li><a href="#">Contact</a></li>
 <li><a href="#">Services</a></li>
 <li><a href="#">Portfolio</a></li>
 </ul>
 </div>
	
	
<?php


try {
	
	DEFINE ('DB_USER','vcyswvxapq');
	DEFINE ('DB_PASSWORD','abcd123$');
	DEFINE ('DB_HOST','sitething-server.mysql.database.azure.com');
	DEFINE ('DB_NAME','stdb');
	
	
	$dbc = @ mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
		or die ('Could not connect to mysql: ' . mysqli_connect_error() );
	
	
	
	
	
}
catch (Exception $e) {
    
    echo "Error - " . $e; 
    
    die(print_r($e));
}







?>
 
 </html>
