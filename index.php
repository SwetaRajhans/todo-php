<?php
include('config.php');

$sql="select * from tbl_task";
$result=$conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">TODO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    
    <!-- modal-->
    
 
  
</nav>
<br>
    <div class="container">
    <form id="task_form" name="task_form" action="task.php" method="POST" class="form-group col-sm-6">
    <input type="text" id="add_task" name="add_task" placeholder="Enter the task" class="form-control"><br>
    <button class="btn-primary">Add Task</button>
    </form>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">TASK ID</th>
      <th scope="col">TASK DETAIL</th>
      <th scope="col">CREATED ON</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($rows=mysqli_fetch_array($result))
    {
  ?>
    <tr>
      <th scope="row"><?php echo $rows['task_id']; ?></th>
      <td><span id="span_task" ><?php echo $rows['task_details']; ?></span><span id="task_input" hidden="true"><input type="text" name="task_details" id="task_details" value="<?php echo $rows['task_details']; ?>" ></input><button type="button" id="btn_update" class="btn-primary">UPDATE</button></span></td>
      <td><?php echo substr($rows['created_on'],0,19); ?></td>
      <td><button type="button" id="btn_edit" class="btn-default"><a href="edit.php?task_id=<?php echo $rows['task_id'] ?>"> EDIT</a></button>    <button type="button" class="btn-danger" > <a href="delete.php?task_id=<?php echo $rows['task_id']; ?>">DELETE</a></button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

    </div>
    
</div>

 
</body>

</html>

