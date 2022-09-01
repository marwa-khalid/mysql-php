<?php

    require '../configuration/db.php';

    $check = true;
    
    $product_name = $_POST ['product-name']; 
    $product_price = $_POST ['product-price'];
    $product_image= $_FILES["image"]["name"];

    $folder = "../images/" .basename($product_image);
 

    $number = preg_match('@[0-9]@', $product_price);

    if($product_name){
        $product_name_error = "";
        $check = true;
    }
    
    if (!ctype_alnum ($product_name) || strlen($product_name) < 5) {  
        $product_name_error = "Product name isn't valid"; 
        $check = false;
    }

    if (empty ($product_name)) {  
        $product_name_error = "Error! Name cannnot be blank";
        $check = false;
    }
    
    if($product_price){
        $product_price_error = "";
        $check = true;
    }
    
    if(!$number) {
        $product_price_error = 'Price should be a number';
        $check = false;
    }  

    if(($product_price) <= 0) {
        $product_price_error = 'Price cannot be 0 or less than 0.';
        $check = false;
    }    
    
    if (empty ($product_price)) {  
        $product_price_error = "Error! Price cannnot be blank";
        $check = false;
    }

    //Add new product in table Product
        $query = "INSERT INTO Product(ProductName, ProductPrice, ProductImage) VALUES ('$product_name', '$product_price', '$product_image')";
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
            
            
            