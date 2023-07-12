<?php
// Assuming you have a database connection established
require_once "../database.php";
// Check if book ID is provided
if (isset($_GET['id'])) {
    $bookId = $_GET['id'];

    // Delete the book record from the database
    $deleteQuery = "DELETE FROM book WHERE id = $bookId";
    $deleteResult = mysqli_query($con, $deleteQuery);

    if ($deleteResult) {
        echo '<div class="alert alert-success">Book deleted successfully.</div>';
        // Optionally, you can redirect to a different page after deletion
        // header('Location: books.php');
        // exit;
    } else {
        echo '<div class="alert alert-danger">Failed to delete the book.</div>';
    }
} else {
    echo 'Invalid book ID.';
}

// Close the database connection
mysqli_close($con);
?>
