<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TechWorld - Video Games</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-headergames">
		<nav>
		<a href="index.php"><img src="images/logo.png"></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="videogames.php">VIDEO GAMES</a></li>
					<li><a href="news.php">NEWS</a></li>
					<li><a href="gallery.php">GALLERY</a></li>
					<li><a href="aboutus.php">ABOUT US</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="register.php">REGISTER</a></li>
					<li><a href="login.php">LOGIN</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
		<h1>Video Games We Offer</h1>
	</section>

	<section class="videogames">
		<h1>Video Games We Offer</h1>
		<p>Best Sellers</p>

		<div style = "justify-content: center;">
                    <?php
					session_start();
                    include_once 'conn.php';
                    $query = "SELECT * FROM games";

                    $result = mysqli_query($conn, $query);
                    $rows = mysqli_num_rows($result);
                    if($rows > 0)
                    {
                        for($i=0; $i<$rows; $i++)
                        {
                        $row = mysqli_fetch_assoc($result);
                        echo "Name: ".$row['name']."<br/>"."Platform: ".$row['platform']."<br/>"."Price: ".$row['price']." BGN"."<br/>"
                        ."<img src='images/".$row['image']."' width='500' height='500'>";
                        echo "<br/>";
                        echo "<br/>";
                        echo "<hr>";
                        }
                    }
                    else
                    {
                        echo "No records!";
                    }
                ?>

	</section>

	<footer>
		<a href="aboutus.php" class="hero-btn">MORE ABOUT US</a>
		<p>Our Socials:</p>
		<div class="icons">
			<a href="https://www.facebook.com/">
				<i class="fa fa-facebook"></i>
			</a>
			<a href="https://twitter.com/">
				<i class="fa fa-twitter"></i>
			</a>
			<a href="https://instagram.com/">
				<i class="fa fa-instagram"></i>
			</a>
			<a href="https://www.linkedin.com/">
				<i class="fa fa-linkedin"></i>
			</a>
		</div>
		<p>© 2023 TechWorld. All rights reserved.</p>
		<p>Made by Danail Georgiev</p>
	</footer>

	<script>
		var navLinks = document.getElementById("navLinks");
		function showMenu(){
			navLinks.style.right = "0";
		}

		function hideMenu(){
			navLinks.style.right = "-169px";
		}
	</script>

</body>
</html>