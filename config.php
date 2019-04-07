<?php


// db_todo
//tbl_task-->(task_id(AI),task_details,created_on)




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_todo";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>