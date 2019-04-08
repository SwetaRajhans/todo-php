<?php
include('config.php');

$t_id=$_POST['task_id'];
$task_details=$_POST['task_details'];
$sql="UPDATE tbl_task SET task_details='$task_details' where task_id='$t_id'";

$result=$conn->query($sql);
if($result)
{
    header('LOCATION:index.php');
}



?>