<?php
include('config.php');

$t_id=$_GET['task_id'];

$sql="select * from tbl_task where task_id=$t_id";
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
  
    <tr>
    <?php $rows=mysqli_fetch_array($result)?>
    <form action="update.php" method="POST" id="edit_form" name="edit_form">
      <th scope="row"><?php echo $rows['task_id']; ?> <input name="task_id"  id="task_id" value="<?php echo $rows['task_id']; ?>"hidden></input></th>
      <td><span id="task_input" ><input type="text" name="task_details" id="task_details" value="<?php echo $rows['task_details']; ?>" ></input></span></td>
      <td><?php echo substr($rows['created_on'],0,19); ?></td>
      <td><button type="submit" id="btn_edit" class="btn-default"> Update</button>    <button type="button" class="btn-danger" > <a href="index.php">Cancel</a></button></td>
   </form>
    </tr>
   
  </tbody>
</table>

    </div>
    
</div>

 
</body>

</html>

