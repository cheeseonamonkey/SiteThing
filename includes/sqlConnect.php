<?php

$rowCount = 0;

    //echo ' <br><br> --- SQL CONNECTING --- <br><br>';
    
    
$serverName = "sqlserverass.database.windows.net";
    $connectionOptions = array(
        "Database" => "stdb",
        "Uid" => "banana",
        "PWD" => "asdf123$"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    //echo '<br>' . var_dump($conn) . '<br>';
    

    //echo '<br> --- SQL CONNECTED! --- <br><br>';










?>
