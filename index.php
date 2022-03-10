<html>
<head>
	<link rel="stylesheet" href="styling.css">
	</head>

	
	
	
	<div id="navList">
 <ul id="navlist">
 <li id="active"><a href="#" id="current">Home</a></li>
 <li><a href="#">About</a></li>
 <li><a href="#">Contact</a></li>
 <li><a href="#">Services</a></li>
 <li><a href="#">Portfolio</a></li>
 </ul>
 </div>
	
	
<?php


try {
$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL); mysqli_real_connect($conn, "sitething-server.mysql.database.azure.com", "vcyswvxapq", "abcd123$", "stdb", 3306, MYSQLI_CLIENT_SSL);
    
	echo '<br>errors:<br>';
    echo mysqli_error();
    echo '<br>connection info:<br>';
    echo var_dump(
	    nectionInfo);
    echo '<br>server name:<br>';
    echo $serverName;
    echo '<br>conn<br>';
    echo $con;
    echo '<br><br>';
    echo 'test query:<br>';
    
    $testSql = "SHOW tables;";
    echo $testSql .  " - ";
    $qresult = mysqli_query($con, $testSql);
    
    while ($row = mysqli_fetch_assoc($qresult))
    {
        $cells[] = $row;
    	echo var_dump($row);
    }
    
    
    foreach($cells as $cell)
	{
		echo $cell . " - ";
	}
    
	
	
echo '<br><br>errors:<br>';
    echo mysqli_error();
    echo '<br>';
	
}
catch (PDOException $e) {
    
    echo "Error - " . $e; 
    
    die(print_r($e));
}







?>
 
 </html>
