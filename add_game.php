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
					<li><a href="sign_out.php">SIGN OUT</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
	</section>

	<section style = "text-align:center; font-size: 40px">
		<div>
		<br>
            <h3>ADD GAMES</h3>
			<br>
            <form name = "main" method = "POST" action="" enctype="multipart/form-data">
				NAME:
				<input type="text" style="height:40px; width:250px;" name = "name">
				<br>
				PLATFORM:
				<input type="text" style="height:40px; width:250px;" name = "platform">
				<br>
				PRICE:
				<input type="int" style="height:40px; width:250px;" name = "price">
				<br>
				IMAGE:
				<input type="file" style="height:40px; width:250px;" name = "file">
				<br>
				<br>
				<input type="submit" style="height:40px; width:250px; font-size: 30px" name = "submit" value = "Add!">
				<br>
				<br>
				<br>
				<a href="admin_panel.php">VIEW ALL GAMES</a>
				<br>
				<br>
            </form>
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

<?php
include_once 'conn.php';
session_start();
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $platform = $_POST['platform'];
    $price = $_POST['price'];
    $file_name = $_FILES['file']['name'];
    $query = "INSERT INTO `games`(`name`, `platform`, `price`,`image`) VALUES ('$name', '$platform', '$price', '$file_name')";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        $target_dir = "images/";
        $target_file = $target_dir.basename($_FILES["file"]["name"]);
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) 
        {
            echo "The file ".htmlspecialchars(basename($_FILES["file"]["name"]))." has successfully uploaded.";
        } 
        else 
        {
            echo "Sorry, there is a problem with uploading.";
        }
    }
}
else
    {
        echo "Hello, fill the gaps to upload!";
    }
?>