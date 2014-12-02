<?php
require_once("/../model/database.php"); // so our program doesn't use the same information twice 


$connection = new mysqli($host, $username, $password); //we are establishing the connection

if($connection-> connect_error) { //testing if we are connecting 
    die("<p>Error : " . $connection->connect_error . "</p>"); // the program will die if it doesn't connect
}

$exists = $connection ->select_db($database); //selecting our database if it exists or not

if(!$exists) { // an if statement that tell us if our database exists
    $query = $connection->query("CREATE DATABASE $database"); //created our database  
}

if($query) {
    echo "<p>Succesfully created the database:" . $database . "</p>"; // a message that runs if our database creation is successful
}
else {
    echo "<p>Database already exists</p>"; // this else statement tells us that the database already exists
}
    
    $query = $connection->query("CREATE TABLE posts (" // creating our table named post in our database
            . "id int(11) NOT NULL AUTO_INCREMENT ("  // giving our table an id saying that it can't be empty and has to be auto incremented
            . "title varchar(255) NOT NULL (" // the title can have up to 255 character and cannot be empty, title stored as characters
            . "post text NOT NULL,"  // our post informaton is going to be stored as text
            . "PRIMARY KEY (id )"); // making the primary key id
    
    if($query) {
        echo "<p>Successfully created database: posts</p>"; // an echo message that tells us if our table creation was successful
    }
 else {
        echo "<p>$connection->error</p>"; // a message that tells us if our table exists or not
}

$connection->close(); 

