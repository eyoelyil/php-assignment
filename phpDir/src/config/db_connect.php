<?php

// The MySQL service named in the docker-compose.yml.
$host = 'db1';

// Database user name
$user = 'lionUser';

//database user password
$pass = 'lionPass';

// Database name
$db = 'lionDB';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected to MySQL server successfully!";  
}

?>