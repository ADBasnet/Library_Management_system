<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="index.css">

	<title>Dashboard</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
	<a href="#" class="brand">
    <span class="text"> Kathmandu Library </span>
</a> 
		<ul class="side-menu top">
			<li class="active">
				
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				
			</li>
			<li>
			<a href="addCategory.php">
					<i class='bx bxs-calendar' ></i>
					<span class="text">Add Category</span>
                    </a>
			</li>
			<li>
				<a href="addBook.php">
					<i class='bx bxs-book-content' ></i>
					<span class="text">Add Book</span>
                    </a>
			</li>
			
			
		</ul>
		<ul class="side-menu">
	
			<li>
				<a href="../logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
	
		<!-- MAIN -->
        <main> 
            <?php

require_once "../database.php";

        $query = "SELECT * FROM book";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    // Display the book list
    echo '<main>';
    echo '<h2>Books</h2>';
    echo '<ul class="book-list">';

    while ($row = mysqli_fetch_assoc($result)) {
        $bookId = $row['id'];
        $bookTitle = $row['name'];
        $bookAuthor = $row['author_name'];
        $category = $row['category'];

        echo '<li class="book-item">';
        echo '<div>';
        echo '<span class="book-title">' . $bookTitle . '</span></br>';
        echo '<span class="book-author">' . $bookAuthor . '</span>';
        echo '</div>';
        echo '<div>';
        echo '<a href="editBook.php?id=' . $bookId . '"> Edit </a>';
        echo '<a href="deleteBook.php?id=' . $bookId . '">      Delete </a>';
        echo '</div>';
        echo '</li>';
    }

    echo '</ul>';
    echo '</main>';
} else {
    echo 'No books found.';
}

// Close the database connection
mysqli_close($con);
?>
  </main>
	</section>
	<!-- CONTENT -->
	
</body>
</html>
