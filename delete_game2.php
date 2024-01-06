<?php

session_start();
include_once 'conn.php';

if(isset($_POST['stud_delete_multiple_btn']))
{
    $all_names = $_POST['stud_delete_ids'];
    $extract_name = implode(', ', $all_names);

    $query = "DELETE FROM games WHERE id IN ($extract_name) ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: delete_game.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted";
        header("Location: delete_game.php");
    }
}

?>