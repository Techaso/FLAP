<?php
/* 
This file contains databse configuration for postgres
*/

// Put PostgreSQL credentials here
$host        = "host = localhost";
$port        = "port = 5432";
$dbname      = "dbname = flap";
$credentials = "user = postgres password=passwordpostgres";

 // Try to connect with the Database
$conn = pg_connect("$host $port $dbname $credentials");

//Check the connection
if(!$conn) {
   echo "Error: Unable to connect with database\n";
}

?>
