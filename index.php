<html>
<head>
	<link rel="stylesheet" href="./styling.css">
	</head>

<?php


try {
    
    $conn = new PDO("sqlsrv:server = tcp:site-thing-sql-server.database.windows.net,1433; Database = SiteThingDB", "ffatty", "password12345$");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ffatty", "pwd" => "password12345$", "Database" => "SiteThingDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:site-thing-sql-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
    
    echo '<br>connection info:<br>';
    echo var_dump($connectionInfo);
    echo '<br>server name:<br>';
    echo $serverName;
    echo '<br><br>';
    
    $testSql = "SELECT TOP (20) * FROM SalesLT.Customer;";
    
    $qresult = mysqli_query($conn, $testSql);
    
    while ($row = mysqli_fetch_assoc($res))
    {
        $cells[] = $row;
    }
    
    
    foreach($cells as $cell)
	{
		echo $cell . "  ";
	}
    
}

catch (PDOException $e) {
    
    print("Error connecting to SQL Server.");
    
    die(print_r($e));
}







?>
 
 
