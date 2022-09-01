<?php

include "../configuration/db.php"; 

$ID = $_GET['ID'];

$delete_query = "DELETE FROM Product WHERE `Product`. ID = '$ID'";

$query_run = mysqli_query($connection, $delete_query);

if($query_run)
{
    header("Location: ../products.php ", TRUE, 301);
    exit();
}
else
{
    echo "Error deleting record"; // display error message if not delete
    echo '<a href="../products.php">Back to Home</a>';

}
?>