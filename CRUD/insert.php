<?php

    require '../configuration/db.php';

    $check = true;
    
    $productName = $_POST ['name']; 
    $productPrice = $_POST ['price'];
    $productImage= $_FILES["image"]["name"];

    $folder = "../images/" .basename($product_image);
 
    //Add new product in table Product
        $query = "INSERT INTO Product(product_name, product_price, product_image) VALUES ('$productName', '$productPrice', '$productImage')";
        $result = mysqli_query($connection, $query);
    // Add a new trip to the Trip table in the database
    if($result){
        echo 'The record has been inserted successfully!';
        echo '<a href="../products.php">Back to Home</a>';
        
    }
    else{
        echo 'The record was not inserted because '. mysqli_error($connection);
    }

    if (move_uploaded_file( $_FILES["image"]["tmp_name"],$folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } 
    else {
        echo "<h3>  Failed to upload image!</h3>";
    }

        #header("Location: ", TRUE, 301);
        #exit();
      
?>
            
            
            