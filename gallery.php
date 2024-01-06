<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TechWorld - Gallery</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-headergallery">
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
	</section>

	<section class="gallerypage">

		<input type="radio" name="Photos" id="check1" checked>
		<input type="radio" name="Photos" id="check2">
		<input type="radio" name="Photos" id="check3">
		<input type="radio" name="Photos" id="check4">

		<div class="container">
			
			<div class="top-content">
				<h3>Photo Gallery</h3>
				<label for="check1">All Photos</label>
				<label for="check2">Sofia</label>
				<label for="check3">Burgas</label>
				<label for="check4">Varna</label>
			</div>

			<div class="photo-gallery">
				<div class="pic sofia">
					<img src="images/store1.png">
				</div>
				<div class="pic burgas">
					<img src="images/store2.png">
				</div>
				<div class="pic varna">
					<img src="images/store3.png">
				</div>
				<div class="pic sofia">
					<img src="images/store1-2.png">
				</div>
				<div class="pic sofia">
					<img src="images/store1-3.png">
				</div>
				<div class="pic burgas">
					<img src="images/store2-2.png">
				</div>
				<div class="pic burgas">
					<img src="images/store2-3.png">
				</div>
				<div class="pic varna">
					<img src="images/store3-2.png">
				</div>
			</div>


		</div>


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

