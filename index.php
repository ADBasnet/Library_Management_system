<!DOCTYPE html>
<html>
	<head>
		<!-- <link rel="stylesheet" href="style.css"/> -->
		<title>Home</title>
	</head>
	<body>

	<header>
		<section>
			<aside>
				<h3>Office Hours:</h3>
				<p>Mon-Fri: 09:00-16:00</p>
				<p>Sat: 09:00-1:00</p>
				<p>Sun: Closed</p>
			</aside>
			<h1>Kathmandu</br>Library</h1>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<!-- <li>Category
				<ul>
<li>hello</li>
		</ul>
			</li> -->
      <li><a href="book-list.php">Books</a></li>
            <li><a href="logout.php">Log out</a></li>
           
		</ul>

	</nav>
<img src="img.jpg" alt="Library Image"/>
<div class="welcome-message"> 
    
  </div>
	


	<footer>
		&copy; <?=date('Y')?>
	</footer>
</body>
</html>

<style>
/* import fonts */
@import url('https://stockfont.org/?3e1218d9a01517d5734a1be9e67be4af797abff1230ab272235ec8ed759251d6');
* {margin: 0; padding: 0;}

html {font-family: 'Oxygen-Regular', verdana, sans-serif; }

body {background-color: #eaeaea;}
header {background-color: #f3f3f3

; color: black;

height: 150px;

}

header img {width: 500px; float: left; background-color: white; border-radius: 20px; margin-top: 20px;}
header aside {float: right; margin-top: 15px;}
header section {width: 1000px; display: block; margin:auto;}
header h1 {float: left; margin-left: 20px; font-size:50px; color:#70c65a;}
nav {width: 100%; background-color: white; overflow: auto;}
body > img {width: 100%; display: block; filter:blur(3px);}
nav ul {width: 1000px; margin: auto; display: block; list-style-type: none; }
nav ul li {width: 25%; float: left; overflow: auto; text-align: center; }
nav li {color: black; padding-top: 10px; display: block;}
nav a {color: black; text-decoration: none}
nav ul ul {
	max-height: 0;
	position: absolute;
	overflow: hidden;
	background-color: #264f87;
	transition: max-height 0.5s;
	margin-left: 4em;
	width: 20vw;
}
main ul {
	margin-left: 3em;
}

nav ul ul li { float: none; text-align: left;  margin-left: 3em; width: auto; }

 li:hover ul { max-height: 400px; }


main a {
	color: #333;
}

nav {font-family: 'Oxygen-Regular';}
header section {  display: block; font-family: 'Oxygen-Regular', cursive;}

header h1 {font-weight: normal;}


h1 { font-size:4em; color: white; text-align: center; padding-top: 20px; text-shadow: 2px 2px 2px #000;}

main {min-height: 50vh; background-color: #fff; width: 70vw; display: block; margin: auto; box-shadow: 0px 0px 10px #888; color:#444;}
footer {min-height: 5vh; color: white;}

main h2 {font-size:2em;}
.home {padding: 5vw; width: 60vw;}

p, li, h2 {margin-bottom: 1em;}
ol {margin-left: 30px;}

pre {margin-top: 20px;}
code {background-color: #ccc;}
pre code {display: block;}

footer {background-color: #4b72ad; padding: 10px; color: white;}

.welcome-message {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;
      font-size: 46px;
      font-weight: 1000px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

</style>
