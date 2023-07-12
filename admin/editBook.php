<?php
// Assuming you have a database connection established
require_once "../database.php";

// Check if book ID is provided
if (!isset($_GET['id'])) {
    echo 'Invalid book ID.';
    exit;
}

$bookId = $_GET['id'];

// Fetch the book data from the database
$query = "SELECT * FROM book WHERE id = $bookId";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    $bookTitle = $row['name'];
    $bookAuthor = $row['author_name'];
    $category = $row['category'];

    // Handle form submission
    if (isset($_POST['submit'])) {
        // Get the updated values
        $newTitle = $_POST['name'];
        $newAuthor = $_POST['author_name'];
        $newCategory = $_POST['category'];

        // Update the book record in the database
        $updateQuery = "UPDATE book SET name = '$newTitle', author_name = '$newAuthor', category = '$newCategory' WHERE id = $bookId";
        $updateResult = mysqli_query($con, $updateQuery);

        if ($updateResult) {
            echo '<div class="alert alert-success">Book updated successfully.</div>';
            $bookTitle = $newTitle; // Update the displayed title
            $bookAuthor = $newAuthor; // Update the displayed author
        } else {
            echo '<div class="alert alert-danger">Failed to update the book.</div>';
        }
    }

    // Display the edit form
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Book</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="container">
            <h2>Edit Book</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $bookTitle; ?>">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" name="author_name" id="author" value="<?php echo $bookAuthor; ?>">
                </div>

                <select name="category">
    <?php
    require_once "../database.php";
    
    // Assuming you already have a database connection ($con)
    
    $query = "SELECT * FROM category";
    $result = mysqli_query($con, $query);
    
    if ($result) {
        // Check if any categories are returned
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $categoryId = $row['id'];
                $categoryName = $row['category'];
                
                // Set the selected attribute if the category is already selected
                $selected = ($categoryId == $category->id) ? "selected" : "";
                
                echo "<option value='$categoryId' $selected>$categoryName</option>";
            }
        } else {
            echo "<option value=''>No categories found</option>";
        }
    } else {
        echo "<option value=''>Error retrieving categories</option>";
    }
    
    // Close the database connection
    mysqli_close($con);
    ?>
</select>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Update Book" name="submit">
                </div>
            </form>
        </div>
    </body>
    </html>
    <?php
} else {
    echo 'Book not found.';
}

// Close the database connection
?>
