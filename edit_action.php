<?php

include('config.php');

$t_id=$_POST['task_id'];
$sql="UPDATE tbl_task SET task_details='$task_details' where task_id='$task_id'";

if($result=$conn->query($sql)) {
header("Location: index.php");
}

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

?>