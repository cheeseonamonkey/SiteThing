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
    echo ("Doing query... <br>");
    $getResults= sqlsrv_query($conn, $tsql);
   
    echo ("Reading data from table..." . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
     echo '<br>var dump: <br>' . var_dump(sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) . '<br><br>';
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ( '---' .$row['username'] . " " . $row['password'] . "<br>");
    }

    sqlsrv_free_stmt($getResults);

}catch(Exception $e)
{
        echo "Error - " . $e; 
    
    die(print_r($e));
}

?>
