<?php


try {
    $conn = new PDO("sqlsrv:server = tcp:site-thing-sql-server.database.windows.net,1433; Database = SiteThingDB", "ffatty", "password12345$");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ffatty", "pwd" => "password12345$", "Database" => "SiteThingDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:site-thing-sql-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
    
    echo $connectionInfo;
    echo $serverName;
    
    $testSql = "SELECT TOP (20) * FROM SalesLT.Customer;";
    $result = mysqli_query($conn, $testSql);
    
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    echo $row[0] . " " .  $row[1] . " " .  $row[2] . " " .   $row[3] 
        
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}







?>
 
 
