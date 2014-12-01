<?php
require_once ("../model/database.php"); // so our program doesn't use the same information twice 


$connection = new mysqli($host, $username, $password); //we are establishing the connection

if($connection-> connect_error) { //testing if we are connecting 
    die("Error : " . $connection->connect_error); // the program will die if it doesn't connect
}

$exists = $connection ->select_db($database); //selecting our database if it exists or not

if(!$exists) { // an if statement that tell us if our database exists
    $query = $connection->query("CREATE DATABASE $database"); //created our database  
}

if($query) {
    echo "Succesfully created the database: " . $database; // a message that runs if our database creation is successful
}
else {
    echo "Database already exists"; // this else statement tells us that the database already exists
}
    

$connection->close(); 

