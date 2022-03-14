<?php

    
if($q == null || $q == "")
{
    throw new Exception('ERROR - Query var (q) not set!   -    ');
}

//$q= "select * from accounts;";
echo ("<br> --- Doing query... <br>");
$getResults = sqlsrv_query($conn, $q);

echo ("Reading data from table...<br>");
if ($getResults == FALSE)
    echo ( '<br><hr>SQL ERRORS - ' . var_dump(sqlsrv_errors()) . "<hr><br>");


//echo '<br><br>query result (before fetch) var dump: <br><br>' . var_dump(sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) . '<br><br>';
echo '<br><br>--- ROW PRINT:<br><br>';



echo '<br>count - ' . sqlsrv_num_rows($getResults) . '<br>';


while( $row = sqlsrv_fetch_array( $getResults, SQLSRV_FETCH_ASSOC) ) {
  echo '' . $row['id']." . ".$row['username']."<br>";
}

?>