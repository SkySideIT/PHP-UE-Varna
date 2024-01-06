<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'kursova2';
$conn = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_error())
{
    exit('Error connecting to the database' . mysqli_connect_error());
}
?>