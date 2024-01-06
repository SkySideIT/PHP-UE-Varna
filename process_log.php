<?php
session_start();
include_once 'conn.php';
if(isset($_POST['submit']))
{
    $username = $_POST['name'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    if($rows > 0)     
    {  
        $row = mysqli_fetch_assoc($result);
        if($username == $row['username'] && $password == $row['password'])
        {
            $_SESSION['name'] = $username;
            //echo 'Successfully Logged In';
            header('Location: admin_panel.php');      
        }
        else
        {
            header('Location: login.php');
        }
    }
}
?>