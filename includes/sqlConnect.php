<?php

try
{

    echo ' <br><br> --- SQL CONNECTING --- <br><br>';
    
    
$serverName = "sqlserverass.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "stdb",
        "Uid" => "banana",
        "PWD" => "asdf123$"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    

    echo '<br> --- SQL CONNECTED! --- <br><br>';










}catch(Exception $e)
{ 
        echo "Error - " . $e; 
    
    die(print_r($e));
}

?>
