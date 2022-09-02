<?php

// Connecting to the Database
$server_name = "localhost";
$username = "marwa";
$password = "Marwa123@";
$database = "Products";

// Create a connection
$connection = mysqli_connect($server_name, $username, $password, $database);

// Die if connection was not successful
if (!$connection){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo '<script> console.log("Connection was successful")</script>';
}

/*
// Create a db
$sql = "CREATE DATABASE Products";
$result = mysqli_query($connection, $sql);

// Check for the database creation success
if($result){
    echo "<br>The db was created successfully!";
}
else{
    echo "<br>The db was not created ".mysqli_error($connection);
}

//Create a table product in Products
$sql = "CREATE TABLE `product` ( `ID` INT(6) NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(30) NOT NULL , `product_price` INT(6) NOT NULL , `product_image` VARCHAR(30), PRIMARY KEY (`ID`))";
$result = mysqli_query($db_Config, $sql);

// Check for the table creation success
if($result){
    echo "<br>The table was created successfully!";
}
else{
    echo "<br>The table was not created successfully because ". mysqli_error($db_config);
}
*/

?>

