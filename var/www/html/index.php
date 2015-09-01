<?php
$host = getenv("MYSQL_SERVICE_SERVICE_HOST");
$port = getenv("MYSQL_SERVICE_SERVICE_PORT");
$username = getenv("MYSQL_SERVICE_SERVICE_USERNAME");
$password = getenv("MYSQL_SERVICE_SERVICE_PASSWORD");

// Create connection
$connection = mysql_connect($host.":".$port, $username, $password);

// Check connection
if (!$connection) {
    echo "Connection failed";
}
echo "Connected successfully";
?> 
