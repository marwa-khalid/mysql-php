<?php

include '../configuration/db.php';

if (isset($_POST['update'])) {
	$ID = $_POST['ID'];
	$productName = $_POST['productName'];
	$productPrice = $_POST['productPrice'];
    $productImage= $_FILES["image"]["name"];

    $folder = "../images/" .basename($productImage);
 
	$updated = mysqli_query($connection, "UPDATE Product SET ProductName='$productName', ProductPrice='$productPrice', 'ProductImage = '$productImage' WHERE ID=$ID");
    if($updated){
        echo 'The record has been updated successfully!';
        echo '<a href="../products.php">Back to Home</a>';
        
    }
    else{
        echo 'Record not updated'. mysqli_error($updated);
    }

    if (move_uploaded_file( $_FILES["image"]["tmp_name"],$folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";

    } 
    else {
        echo "<h3>  Failed to upload image!</h3>";
    }


}

?>