<?php 
$pageTitle = 'Debug stuff';
require('includes/header.php');
?>
	
<?php

//echo 'php info - '  . phpinfo();
//ln();

echo 'php version info - ' . phpversion();
ln();



try {
	
//	DEFINE ('DB_USER','vcyswvxapq');
//	DEFINE ('DB_PASSWORD','FXDUBP1OQ8K8D2X6$');
//	DEFINE ('DB_HOST','sitething-server.mysql.database.azure.com');
//	DEFINE ('DB_NAME','stdb');
//	
//	
//	$dbc = @ mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
//		or die ('Could not connect to mysql: ' . mysqli_connect_error() );
//	

	
	



	echo "this ip - " . $_SERVER['REMOTE_ADDR'] . "<br><hr><br>";

	include('includes/sqlConnect.php');
    
    $q = "select * from copypastes;";
    include('includes/sqlQuery.php');
	

    while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC) ) {
        echo var_export($row) . '<br>';
    }

	
    echo '<br><br><hr><br><br>';
	
}
catch (Exception $e) {
    
    echo "Error - " . $e; 
    
    die(print_r($e));
}




echo "<br><br><hr><br><br><h4>szdxcsdf:</h4><br>";


?>

 </html>
