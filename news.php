<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TechWorld - News</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-headernews">
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

	<section class="news">
		
		<div class="content event">
			<div class="title">
				<h2>Gaming Events <span class="sign">&</span> News</h2>
			</div>
			<div class="cards">
				<div class="card">
					<div class="image-section">
						<img src="images/event1.png">
					</div>
					<div class="article">
						<h4>Global Game Jam 2023</h4>
						<p>Site applications are now open for Global Game Jam and Global Game Jam Next 2023! Once again in 2023 we will be allowing for in-person, virtual, and hybrid sites depending on what works best for your community in terms of accessibility, as well as health <span class="sign">&</span> safety regulations and precautions.</p>
					</div>
					<div class="event-view">
						<a href="https://globalgamejam.org/" class="hero-btn">Read More</a>
					</div>
					<div class="posted-date">
						<p>Posted on January 30 2023</p>
					</div>
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/event2.png">
					</div>
					<div class="article">
						<h4>Gaming Time Event 2023</h4>
						<p>The world's largest event for computer and video games and Europe's most comprehensive business platform for the games industry finally took place again in Cologne in 2022. Everything and everyone that matters in the games world will meet at gamescom 2023!</p>
					</div>
					<div class="event-view">
						<a href="https://b2b.gamescom.global/gamescom/gamescom-2023/" class="hero-btn">Read More</a>
					</div>
					<div class="posted-date">
						<p>Posted on November 27 2023</p>
					</div>
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/event3.png">
					</div>
					<div class="article">
						<h4>Video Games To Watch Out For</h4>
						<p>2023 is looking like a bumper year for games on Switch, PlayStation, Xbox and PC. Have you recovered from the holidays and had the chance to catch up on all the big games from 2022? Well, ready or not, it’s already time to gaze ahead to the best games to play in 2023!</p>
					</div>
					<div class="event-view">
						<a href="https://www.stuff.tv/features/most-anticipated-games/" class="hero-btn">Read More</a>
					</div>
					<div class="posted-date">
						<p>Posted on January 3 2023</p>
					</div>
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