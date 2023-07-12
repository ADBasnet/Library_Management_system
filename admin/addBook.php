
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD BOOKS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">

<h2>Add Book</h2>
        <?php
        if (isset($_POST["submit"])) {
           $name = $_POST["name"];
           $author_name = $_POST["author_name"];
           $category = $_POST["category"];
        
           require_once "../database.php";
    
            
            $sql = "INSERT INTO book (name, author_name,category) VALUES ( ?,?,? )";
            $stmt = mysqli_stmt_init($con);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "sss", $name, $author_name, $category);

                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are successfully added Book.</div>";
            }else{
                die("Something went wrong");
            }
           }
          
        ?>
        <form action="addBook.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Book Name">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="author_name" placeholder="Author Name">
            </div>
            <br>
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
<br>
&ensp;
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Add Book" name="submit">
            </div>
        </form>
     
    </div>
</body>
</html>