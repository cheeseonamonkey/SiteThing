<?php

echo "Hello World!";

//DEFINE ('DB_USER','username');
//DEFINE ('DB_PASSWORD','password');
//DEFINE ('DB_HOST','localhost');
//DEFINE ('DB_NAME','finaldb'); 

//$dbc = @ mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$con=mysqli_init(); [mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL);] mysqli_real_connect($con, {your_host}, {username@servername}, {your_password}, {your_database}, {your_port});
	

if(!$con) {
	echo "not connected - " . mysqli_connect_error(); 
}else {
	echo 'connected !?';
}
	

?>
 
 
