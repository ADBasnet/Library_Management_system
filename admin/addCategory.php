
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD CATEGORY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">

<h2>Add Category</h2>
        <?php
        if (isset($_POST["submit"])) {
           $category = $_POST["category"];
        
           require_once "../database.php";
    
            
            $sql = "INSERT INTO category (category) VALUES ( ? )";
            $stmt = mysqli_stmt_init($con);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "s", $category);

                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are successfully added category.</div>";
            }else{
                die("Something went wrong");
            }
           }
          
        ?>
        <form action="addCategory.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="category" placeholder="Category">
                
                &ensp;
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Add Category" name="submit">
            </div>
        </form>
     
    </div>
</body>
</html>