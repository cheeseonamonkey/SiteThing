<?php


try {
    $conn = new PDO("sqlsrv:server = tcp:site-thing-sql-server.database.windows.net,1433; Database = SiteThingDB", "ffatty", "password12345$");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

echo 'hello!';

// SQL Server Extension Sample Code:
$connectionInfo$connectionInfo = array("UID" => "ffatty", "pwd" => "password12345$", "Database" => "SiteThingDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:site-thing-sql-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


echo '<br>';

echo '$connectionInfo';

echo '$serverName';

echo '$conn';

?>
 
 
