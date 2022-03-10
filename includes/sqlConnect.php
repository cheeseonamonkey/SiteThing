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
    $tsql= "select * from accounts;";
    echo ("Doing query..." . PHP_EOL);
    $getResults= sqlsrv_query($conn, $tsql);
    echo 'var dump: <br>' . var_dump($getResults) . '<br><br>';
    echo ("Reading data from table..." . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['username'] . " " . $row['password'] . PHP_EOL);
    }

    sqlsrv_free_stmt($getResults);

}catch(Exception $e)
{
        echo "Error - " . $e; 
    
    die(print_r($e));
}

?>
