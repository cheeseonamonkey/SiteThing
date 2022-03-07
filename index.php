<?php

echo "Hello World!";

//DEFINE ('DB_USER','username');
//DEFINE ('DB_PASSWORD','password');
//DEFINE ('DB_HOST','localhost');
//DEFINE ('DB_NAME','finaldb'); 

//$dbc = @ mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//$con=mysqli_init(); [mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL);] mysqli_real_connect($con, {your_host}, {username@servername}, {your_password}, {your_database}, {your_port});


//if(!$con) {
//	echo "not connected - " . mysqli_connect_error(); 
//}else {
//	echo 'connected !?';
//}


try {
    $conn = new PDO("sqlsrv:server = tcp:site-thing-sql-server.database.windows.net,1433; Database = SiteThingDB", "ffatty", "password12345$");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ffatty", "pwd" => "password12345$", "Database" => "SiteThingDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:site-thing-sql-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


?>
 
 
