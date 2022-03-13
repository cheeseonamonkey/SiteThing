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
   
    echo ("Reading data from table...<br>");
    if ($getResults == FALSE)
        echo ( '<br><hr>SQL ERRORS - ' . var_dump(sqlsrv_errors()) . "<hr><br>");
    
    
    //echo '<br><br>query result (before fetch) var dump: <br><br>' . var_dump(sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) . '<br><br>';
    echo '<br><br>--- ROW PRINT:<br><br>';
    
    
    
    sqlsrv_fetch_array( $getResults, SQLSRV_FETCH_ASSOC)
    
    
while( $row = sqlsrv_fetch_array( $getResults, SQLSRV_FETCH_ASSOC) ) {
      echo '' . $row['id']." . ".$row['username']."<br>";
    
        
}

    
    
    
    
    sqlsrv_free_stmt($getResults);

}catch(Exception $e)
{ 
        echo "Error - " . $e; 
    
    die(print_r($e));
}

?>
