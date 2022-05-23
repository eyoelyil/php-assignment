<?php



// The MySQL service named in the docker-compose.yml.
$host = 'db1';

// Database user name
$user = 'lionUser';

//database user password
$pass = 'lionPass';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected to MySQL server successfully!";  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include './templates/header.php'; ?>
    <?php include './templates/footer.php'; ?>

</body>
</html>