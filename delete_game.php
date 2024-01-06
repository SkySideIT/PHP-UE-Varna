<?php
session_start();
include_once 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE GAMES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel = "stylesheet">
</head>
<body>
    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-12">
                <div class = "card mt-5">
                    <div class = "card-header">
                        <h4>Select which game you want to delete.</h4>
                        <h5><a href="admin_panel.php">GO BACK?</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <?php
                if(isset($_SESSION['status']))
                {
                    echo "<h4>".$_SESSION['status']."<h4>";
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <form action="delete_game2.php" method = "POST">
                            <table class = "table table-bordered table-stripted">
                                <tbody>
                                    <tr>
                                        <th>
                                            <button type = "submit" name = "stud_delete_multiple_btn" class = "btn btn-danger">Delete</button>
                                        </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Platform</th>
                                        <th>Price</th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <?php
                                    
                                    $query = "SELECT * FROM games";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run)>0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td style = "width:10px; text-align: center">
                                                    <input type="checkbox" name = "stud_delete_ids[]" value = "<?= $row['id'] ?>">
                                                </td>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['platform'] ?></td>
                                                <td><?= $row['price']." BGN"?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No Record Found!</td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>