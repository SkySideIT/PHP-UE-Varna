<?php
//print_r($_POST);
session_start();
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    if(!empty($username) && !empty($password) && !empty($email))
    {
        $link = mysqli_connect("localhost","root", "", "kursova2");
        if($link == false)
        {
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";
        if(mysqli_query($link, $sql))
        {
            header('Location: login.php');
        }
    }
}
?>