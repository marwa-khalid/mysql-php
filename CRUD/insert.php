<?php

    include '../configuration/db.php';

    $check = true;
    
    $productName = $_POST ['name']; 
    $productPrice = $_POST ['price'];
    $productImage= $_FILES["image"]["name"];

    $folder = "../images/" .basename($productImage);
 
    //Add new product in table Product
        $query = "INSERT INTO product(product_name, product_price, product_image) VALUES ('$productName', '$productPrice', '$productImage')";
        $result = mysqli_query($connection, $query);
    
        // Add a new product to the product table in the database
    if($result){

        if (move_uploaded_file( $_FILES["image"]["tmp_name"],$folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
            echo 'The record has been inserted successfully!';
            echo '<a href="../products.php">Back to Home</a>';
        } 
        else {
            echo "<h3>  Failed to upload image!</h3>";
        }
    }
    else{
        echo 'The record was not inserted because '. mysqli_error($connection);
    }

?>
            
            
            