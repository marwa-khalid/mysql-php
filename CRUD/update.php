<?php

include '../configuration/db.php';

if (isset($_POST['update'])) {
	$productId = $_GET['id'];
	$productName = $_POST['name'];
	$productPrice = $_POST['price'];
    $productImage= $_FILES["image"]["name"];

    $folder = "../images/" .basename($productImage);
 
	$updated = mysqli_query($connection, "UPDATE product SET product_name = '$productName', product_price = '$productPrice', product_image = '$productImage' WHERE product_id = '$productId'");
    
    if($updated){

        if (move_uploaded_file( $_FILES["image"]["tmp_name"],$folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } 
        else {
            echo "<h3>  Failed to upload image!</h3>";
        }
        echo 'The record has been updated successfully!';
        echo '<a href="../products.php">Back to Home</a>';
        
    }
    else{
        echo 'Record not updated'. mysqli_error($connection);
    }

}

?>