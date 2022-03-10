<?php

try
{
	
$serverName = "sqlserverass.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "stdb", // update me
        "Uid" => "banana", // update me
        "PWD" => "asdf123$" // update me
    );
    //Establishes the connection
    $dbc = sqlsrv_connect($serverName, $connectionOptions);
//    $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
//         FROM [SalesLT].[ProductCategory] pc
//         JOIN [SalesLT].[Product] p
//        ON pc.productcategoryid = p.productcategoryid";

$tsql = "SELECT * FROM [SYSOBJECTS] WHERE xtype = 'U';"
    
    
    $results= sqlsrv_query($dbc, $tsql);
    echo ("Reading data from table... " . PHP_EOL);
    if ($results == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC)) {
     echo ($row['name'] . " " . $row['id'] . PHP_EOL);
    }
    sqlsrv_free_stmt($results);

}catch(Exception $e)
{
	echo "Error - " . $e; 
    
	die(print_r($e));
}

?>
