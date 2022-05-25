<?php

include('config/db_connect.php');

// Create a table in the MySQL database.
$sql = "SELECT title, author, isbn, synopsis  FROM books ORDER BY created_at DESC";

// Execute the query to get the results.
$result = $conn->query($sql);

// Loop through the results and print them out.
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free the memory associated with the result.
mysqli_free_result($result);

// Close the connection.
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <?php include './templates/header.php'; ?>

    <h4 class="center grey-text">Books</h4>
    <div class="container">
        <div class="row">
            <?php foreach ($books as $book) : ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($book['title']); ?></h6>
                            <div><?php echo htmlspecialchars($book['author']); ?></div>
                            <div><?php echo htmlspecialchars($book['isbn']); ?></div>
                            <div><?php echo htmlspecialchars($book['synopsis']); ?></div>
                        </div>
                        <div class="card-action right-align">
                            <a class="brand-text" href="#">More Info</a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include './templates/footer.php'; ?>

</body>
</html>