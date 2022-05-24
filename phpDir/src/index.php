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

// Create a table in the MySQL database.
$sql = "SELECT * FROM books";

// Execute the query to get the results.
$result = $conn->query($sql);

// Loop through the results and print them out.
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($books);


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