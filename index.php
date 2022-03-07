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
    
    $conn = new PDO("sqlsrv:server = tcp:site-thing-sql-server.database.windows.net,1433; Database = SiteThingDB", "ffatty", "abcd1234$");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ffatty", "pwd" => "abcd1234$", "Database" => "SiteThingDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:site-thing-sql-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
    
	echo '<br>errors:<br>';
    echo mysqli_error();
    echo '<br>connection info:<br>';
    echo var_dump($connectionInfo);
    echo '<br>server name:<br>';
    echo $serverName;
    echo '<br>conn<br>';
    echo $conn;
    echo '<br><br>';
    echo 'test query:<br>';
    
    $testSql = "SELECT TOP (20) * FROM SalesLT.Customer;";
    
    $qresult = mysqli_query($conn, $testSql);
    
    while ($row = mysqli_fetch_assoc($qresult))
    {
        $cells[] = $row;
    	echo var_dump($row);
    }
    
    
    foreach($cells as $cell)
	{
		echo $cell . " - ";
	}
    
	
	
echo '<br><br>errors:<br>';
    echo mysqli_error();
    echo '<br>';
	
}
catch (PDOException $e) {
    
    echo "Error - " . $e; 
    
    die(print_r($e));
}







?>
 
 </html>
