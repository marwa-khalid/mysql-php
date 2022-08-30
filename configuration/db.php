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

//Create a table Product in Products
$sql = "CREATE TABLE `Product` ( `ID` INT(6) NOT NULL AUTO_INCREMENT , `ProductName` VARCHAR(30) NOT NULL , `ProductPrice` INT(6) NOT NULL , `ProductImage` VARCHAR(30), PRIMARY KEY (`ID`))";
$result = mysqli_query($db_Config, $sql);

// Check for the table creation success
if($result){
    echo "<br>The table was created successfully!";
}
else{
    echo "<br>The table was not created successfully because ". mysqli_error($db_config);
}

//Add new product in table Product
$sql = "INSERT INTO `Product` (`ProductName`, `ProductPrice`, `ProductImage`) VALUES ('Cute Pink Top', 2000, 'images\cutetop.png')";
$result = mysqli_query($connection, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully!<br>";
}
else{
    echo "The record was not inserted because of this error ". mysqli_error($connection);
}
*/
?>

