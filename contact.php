<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TechWorld - Contact Us</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-headercontact">
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

	<section class="location">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.0206133690535!2d27.921412315483348!3d43.20905697913902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a4540939dfa6d5%3A0x3d401ef3c09a59bf!2z0JjQutC-0L3QvtC80LjRh9C10YHQutC4INGD0L3QuNCy0LXRgNGB0LjRgtC10YIgLSDQktCw0YDQvdCw!5e0!3m2!1sbg!2sbg!4v1673812402876!5m2!1sbg!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

		</iframe>

	</section>

	<section class="contact-us">

		<div class="row">
			<div class="contact-col">
				<div>
					<i class="fa fa-home"></i>
					<span>
						<h5>bul. "Knyaz Boris Purvi" 77, 9002</h5>
						<p>Varna, Bulgaria</p>
					</span>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<span>
						<h5>+359 89 123 4567</h5>
						<p>Monday To Friday From 10AM To 6PM</p>
					</span>
				</div>
				<div>
					<i class="fa fa-envelope-o"></i>
					<span>
						<h5>info@gmail.com</h5>
						<p>Email Us Your Query</p>
					</span>
				</div>
			</div>
			<div class="contact-col">

				<form action="">
					<input type="text" placeholder="Enter your name" required>
					<input type="email" placeholder="Enter your email address" required>
					<input type="text" placeholder="Enter your subject" required>
					<textarea rows="8" placeholder="Message" required></textarea>
					<button type="submit" class="hero-btn blue-btn">Submit</button>
				</form>

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