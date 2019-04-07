<?php
include('config.php');

$task_details=$_POST['add_task'];

$sql="insert into tbl_task (task_details) values ('$task_details')"; 
if ($conn->query($sql) === TRUE) {
    header("LOCATION:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>