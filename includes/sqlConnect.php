<?php

try
{
    echo ' <br> <br> --- SQL CONNECTING NOW --- <br><br>';
    
    
$serverName = "sqlserverass.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "stdb",
        "Uid" => "banana",
        "PWD" => "asdf123$"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * FROM [SYSOBJECTS] WHERE xtype = 'U';";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['name'] . " " . $row['id'] . PHP_EOL);
    }

    sqlsrv_free_stmt($getResults);

}catch(Exception $e)
{
        echo "Error - " . $e; 
    
    die(print_r($e));
}

?>
