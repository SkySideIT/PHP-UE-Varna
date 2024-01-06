<!doctype html>
<html lang="en"> 
 <head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title> 
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 </head> 
 <body>
    <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 
        <div class="signin">
            <form name = "main" method = "POST" action="process_reg.php">
                <div class="content"> 
                    <h2>Sign Up</h2>
                    <div class="form">
                        <div class="inputBox"> 
                            <input type="text" name="username" required> <i>Username</i>
                        </div> 
                        <div class="inputBox"> 
                            <input type="password" name="password" required> <i>Password</i>
                        </div>
                        <div class="inputBox"> 
                            <input type="text" name="email" required> <i>Email</i>
                        </div> 
                        <div class="links"><a href="login.php">Already registered?</a>
                        </div> 
                        <div class="inputBox"> 
                            <input type="submit" name="submit" value="Register">
                        </div>
                    </div>
                </div>    
            </form> 
        </div> 
    </section>
</body>
</html>

<?php
/*
    include_once('conn.php');
    
    if(!isset($_POST['username'], $_POST['password'], $_POST['email']))
    {
        exit('Empty Field(s)');
    }

    if(empty($_POST['username'] || empty($_POST['password'] || empty($_POST['email']))))
    {
        exit('Values Empty');
    }


    include_once 'conn.php';
    session_start();
    if(isset($_POST['submit']))
    {
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
        {
            $username = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $query = "INSERT INTO users ('username','password','email') VALUES('$username','$password','$email')";
            $result = mysqli_query($conn, $query);
        }
    }
*/
/*
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    if(!empty($username) && !empty($password) && !empty($email))
    {
        $link = mysqli_connect("localhost","root", "", "kursova2");
        $sql = "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";
    }
}
*/
?>