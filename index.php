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
	
//	DEFINE ('DB_USER','vcyswvxapq');
//	DEFINE ('DB_PASSWORD','FXDUBP1OQ8K8D2X6$');
//	DEFINE ('DB_HOST','sitething-server.mysql.database.azure.com');
//	DEFINE ('DB_NAME','stdb');
//	
//	
//	$dbc = @ mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
//		or die ('Could not connect to mysql: ' . mysqli_connect_error() );
//	
//	

	echo "path:<br>";
	echo getcwd();
	
	echo "files:<br>";
	$files = scandir(getcwd());
	$files = array_diff(scandir($path), array('.', '..'));
	foreach($files as $file){
  		echo "<a href='$file'>$file</a>";
	}
	
	echo "<br>connecting...";
	$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL); mysqli_real_connect($conn, "sitething-server.mysql.database.azure.com", "vcyswvxapq", "FXDUBP1OQ8K8D2X6$", "stdb", 3306, MYSQLI_CLIENT_SSL);
	
	
	echo "<br>connection errors:<br>" . var_dump(mysqli_error());
	
	
		
	
	
}
catch (Exception $e) {
    
    echo "Error - " . $e; 
    
    die(print_r($e));
}







?>
 
 </html>
