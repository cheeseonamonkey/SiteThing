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

	
	
	echo "this ip: <br> " . $_SERVER['REMOTE_ADDR'] . "<br><br>";

	echo "path:<br>";
	echo getcwd() . "<br><br>";
	
	echo "files:<br>";
				//Get a list of file paths using the glob function.
				$fileList = glob(getcwd());
	

				echo var_dump($fileList);
	
	$fileList = glob("C:");
	
	echo var_dump($fileList);
	
	
	echo "<br><br>connecting...<br>";
	
// PHP Data Objects(PDO) Sample Code:
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:sqlserverass.database.windows.net,1433; Database = stdb", "banana", "asdf123$");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "banana", "pwd" => "asdf123$", "Database" => "stdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sqlserverass.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	
	echo "<br><br>connection errors:<br>" . var_dump(mysqli_error());
	
	
		
	
	
}
catch (Exception $e) {
    
    echo "Error - " . $e; 
    
    die(print_r($e));
}


 




?>
 
 </html>
