<?php

// Connecting to the Database
$servername = "localhost";
$username = "marwa";
$password = "Marwa123@";

// Create a connection
$connection = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$connection){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo '<script> console.log("Connection was successful")</script>';
}

// Create a db
$sql = "CREATE DATABASE Product";
$result = mysqli_query($connection, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully!";
}
else{
    echo "The db was not created ".mysqli_error($connection);
}

?>

