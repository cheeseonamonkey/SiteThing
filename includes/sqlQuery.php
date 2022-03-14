<?php

    
if($q == null || $q == "")
{
    throw new Exception('ERROR - Query var (q) not set!   -    ');
}

//$q= "select * from accounts;";

//echo ("<br> --- Doing query... <br>");
$result = sqlsrv_query($conn, $q);

//echo " --- Reading data from table...<br>";

if ($result == FALSE)
{
    echo ( '<br>SQL ERRORS - ' . var_dump(sqlsrv_errors()) . "<br>");
    $rowCount = sqlsrv_num_rows($result);
}
    
    //echo '<br><br> --- ROW PRINT:<br><br>';



//
//debugDump($result);
//




function debugDump($result)
{

  echo ' --- DEBUG DUMP: <br>';
  echo '<small>';
  echo '<br>count - ' . sqlsrv_num_rows($result) . '<br>';


  while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
    echo var_export($row) . '<br>';
  }

  echo '</small>';

}

?>