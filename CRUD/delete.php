<?php

include "../configuration/db.php"; 

$productId = $_GET['id'];

$delete_query = "DELETE FROM product WHERE `product`. product_id = '$productId'";

$query_run = mysqli_query($connection, $delete_query);

unlink("../images/".$_GET["image"]);

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