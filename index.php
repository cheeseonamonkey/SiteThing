<?php


try {
    $conn = new PDO("sqlsrv:server = tcp:site-thing-sql-server.database.windows.net,1433; Database = SiteThingDB", "ffatty", "password12345$");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
//$connectionInfo = array("UID" => "ffatty", "pwd" => "password12345$", "Database" => "SiteThingDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
//$serverName = "tcp:site-thing-sql-server.database.windows.net,1433";
//$conn = sqlsrv_connect($serverName, $connectionInfo);

try
{
    
    $c = mysqli_query("SELECT TOP (10) * FROM SalesLT.Customer");

    while ($row = mysqli_fetch_assoc($c))
    {
        echo $row[FirstName] . " - ";
    }
}catch (exception $e)
{
    echo $e->getMessage();
    
}

?>
 
 
