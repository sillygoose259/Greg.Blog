<?php
require_once ("../model/database.php"); // so our program doesn't use the same information twice 


$connection = new mysqli($host, $username, $password); //we are establishing the connection

if($connection-> connect_error) { //testing if we are connecting 
    die("Error : " . $connection->connect_error); // the program will die if it doesn't connect
}
else {
    echo "Success" . $connection->host_info; // the program will continue and give you a message saying success
}

$connection->close(); 

