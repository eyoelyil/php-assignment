<?php

$title = $author = $isbn = $synopsis = '';
$errors = array('title' => '', 'author' => '', 'isbn' => '', 'synopsis' => '');

if(isset($_POST['submit'])){
    if(empty($_POST['title'])) {
        $errors['title'] = 'A title is required <br />';
    } else {
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }
    if(empty($_POST['author'])) {
        $errors['author'] = 'An author is required <br />';
    } else {
        $author = $_POST['author'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $author)) {
            $errors['author'] = 'Author must be letters and spaces only';
        }
    }
    if(empty($_POST['isbn'])) {
        $errors['isbn'] = 'An isbn is required <br />';
    } else {
        $isbn = $_POST['isbn'];
        if(!preg_match('/^[0-9]+$/', $isbn)) {
            $errors['isbn'] = 'ISBN must be numbers only';
        }
    }
    if(empty($_POST['synopsis'])) {
        $errors['synopsis'] = 'A synopsis is required <br />';
    } else {
        $synopsis = $_POST['synopsis'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $synopsis)) {
            $errors['synopsis'] = 'Synopsis must be letters and spaces only';
        }
    }

    if(array_filter($errors)) {
        //echo 'errors in the form';
    } else {
       
            header('Location: /index.php');
       
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Book Store</title>
</head>

    <?php include ('header.php'); ?>

    <section class="container green-text">
        <h4 class="center">Add a Book</h4>
        <form class="forestgreen" action="add.php" method="POST">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Book Title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>
            <label for="author">Author</label>
            <input type="text" name="author" id="author" placeholder="Book Author" value="<?php echo htmlspecialchars($author) ?>">
            <div class="red-text"><?php echo $errors['author']; ?></div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" placeholder="Book ISBN" value="<?php echo htmlspecialchars($isbn) ?>">
            <div class="red-text"><?php echo $errors['isbn']; ?></div>
            <label for="synopsis">Synopsis</label>
            <textarea name="synopsis" value="<?php echo htmlspecialchars($synopsis) ?>" id="synopsis" cols="30" rows="10"></textarea>
            <div class="red-text"><?php echo $errors['synopsis']; ?></div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include ('footer.php'); ?>


</html>