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
$serverName = "sqlserverass.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "stdb", // update me
        "Uid" => "banana", // update me
        "PWD" => "asdf123$" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
         FROM [SalesLT].[ProductCategory] pc
         JOIN [SalesLT].[Product] p
         ON pc.productcategoryid = p.productcategoryid";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);

	
	echo "<br><br>connection errors:<br>" . var_dump(mysqli_error());
	
	
		
	
	
}
catch (Exception $e) {
    
    echo "Error - " . $e; 
    
    die(print_r($e));
}


 




?>
 
 </html>
