<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TechWorld - About Us</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-header">
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

	<section class="about-us">
		<div class="row">
			<div class="about-col">
				<h1>	We are the largest gaming company in Bulgaria</h1>
				<p>	TechWorld Pvt. Ltd. is a company incorporated under the Companies Act, 2000 with its registered office at bul. "Knyaz Boris Purvi" 77, 9002, Varna, Bulgaria. <br><br>



					TechWorld website is the virtual supermarket for gaming. If you like shopping the traditional way, our stores offer you the same experience. Products offered online as well as in our stores, include, consoles like PS4, PS3, Xbox One, Nintendo Switch. We also offer the softwares for your consoles and accessories to enhance your gaming. You can also order Playstation Digital Cards <span class="sign">&</span> get voucher code immediately delivered on your e-mail.
					<br><br>


					Every Games The Shop store will offer you unique experience. Our gaming knowledgeable staff not only understand your needs, they also educate you on latest gaming trends. You can also avail of offers/deals which are exclusive to our stores. This experience ensures that our customers come back to satisfy their gaming needs.<br></p>
				</div>
				<div class="about-col">
					<img src="images/about.png">
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