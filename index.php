<?php

echo "Hello World!";

DEFINE ('DB_USER','username');
DEFINE ('DB_PASSWORD','password');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','finaldb');


die ('Could not connect to mysql: ' . mysqli_connect_error() );

?>
