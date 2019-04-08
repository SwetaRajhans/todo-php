<?php

include('config.php');

$task_id=$_GET['task_id'];
$sql="delete from tbl_task where task_id=$task_id";
$result=$conn->query($sql);
if($result)
{
    header('LOCATION:index.php');////
}
?>