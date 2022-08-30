<?php

// Connecting to the Database
$servername = "localhost";
$username = "marwa";
$password = "Marwa123@";
$database = "Products";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo <script> console.log("Connection was successful")</script>;
}

?>

