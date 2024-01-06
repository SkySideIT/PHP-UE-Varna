<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TechWorld - Homepage</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="header">
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

		<div class="text-box">
			<h1>All Games In One Place</h1>
			<p>We are bringing you the most popular games!</p>
			<a href="contact.php" class="hero-btn">Visit Us To Know More</a>
		</div>

	</section>

	<section class="videogames">
		<h1>Trending Products</h1>
		<a href="videogames.php" class="bestseller">Discover all</a>

		<div class="row">
			<div class="videogames-col">
				<h3>Grand Theft Auto V<br></h3>
				<p>65.99 BGN</p>
			</div>
			<div class="videogames-col">
				<h3>FIFA 23: Ultimate Edition<br></h3>
				<p>129.99 BGN</p>
			</div>
			<div class="videogames-col">
				<h3>Resident Evil 4 Remake<br></h3>
				<p>110.99 BGN</p>
			</div>
		</div>

	</section>

	<section class="news">
		<h1>Latest News</h1>
		<a href="news.php"><p>View Latest News</p></a>

		<div class="row">
			<div class="news-col">
				<img src="images/event1.png" alt="">
				<div class="layer">
					<h3>GLOBAL GAME JAM 2023</h3>
				</div>
			</div>
			<div class="news-col">
				<img src="images/event2.png" alt="">
				<div class="layer">
					<h3>GAMING TOURNAMENT</h3>
				</div>
			</div>
			<div class="news-col">
				<img src="images/event3.png" alt="">
				<div class="layer">
					<h3>VIDEO GAMES TO WATCH OUT FOR</h3>
				</div>
			</div>
		</div>

	</section>

	<section class="gallery">
		<h1>Gallery</h1>
		<a href="gallery.php" class="bestseller">See more pictures</a>

		<div class="row">
			<div class="gallery-col">
				<img src="images/store1.png" alt="">
				<h3>Our Store In Sofia<a/h3>
				</div>
				<div class="gallery-col">
					<img src="images/store2.png" alt="">
					<h3>Our Store In Burgas<a/h3>
					</div>
					<div class="gallery-col">
						<img src="images/store3.png" alt="">
						<h3>Our Store In Varna<a/h3>
						</div>
					</div>

				</section>

				<section>
					<div class="reviews">
						<h1>What Our Clients Thinks</h1>
						<p>Most Recent Reviews</p>
						<div class="row">
							<div class="reviews-col">
								<img src="images/user.png" alt="">
								<div>
									<p>The store was great. The best store I have ever been to. Great experience,
									I highly recommend it to everyone who is interested in video games. I love this store!!!</p>
									<br>
									<h3>Ivan Ivanov</h3>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="reviews-col">
								<img src="images/user.png" alt="">
								<div>
									<p>TechWorld has blown my mind with its product offerings! Incredible customer service and highly competitive prices. Great job TW! Not to mention the store is in a very convenient location.</p>
									<h3>Georgi Georgiev</h3>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-empty"></i>
								</div>
							</div>
						</div>
					</section>

					<section class="callus">
						<h1>24/7 Online Support</h1>
						<a href="contact.php" class="hero-btn">CONTACT US NOW</a>
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