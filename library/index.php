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
    <span class="text"> Kathmandu Library</span>
</a> 
		<ul class="side-menu top">
			<li class="active">
				
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				
			</li>
			<li>
				
				<i class='bx bxs-group' ></i>
					<span class="text">Profile</span>
				
			</li>
			<li>
				
					<i class='bx bxs-book-content' ></i>
					<span class="text">Books</span>
				
			</li>
			<li>
			
					<i class='bx bxs-calendar' ></i>
					<span class="text">Category</span>
				
			</li>
			
		</ul>
		<ul class="side-menu">
	
			<li>
				<a href="logout.php" class="logout">
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
        <h2>Books</h2>
      <ul class="book-list">
        <li class="book-item">
          <div>
            <span class="book-title">Book 1</span>
            <span class="book-author">Author 1</span>
          </div>
          <button>Reserve</button>
        </li>
        <li class="book-item">
          <div>
            <span class="book-title">Book 2</span>
            <span class="book-author">Author 2</span>
          </div>
          <button>Reserve</button>
        </li>
        <!-- Add more book items here -->
      </ul>
  </main>
	</section>
	<!-- CONTENT -->
	
</body>
</html>
