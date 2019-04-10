<?php

include 'config.php';

if(isset($_POST['done'])){

  $username = $_POST['username'];
 $password = $_POST['password'];
 $type = $_POST['type'];
 $q = " INSERT INTO `users`(`username`, `password`, `type`) VALUES ( '$username', '$password', '$type')";

  $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Add Users </h1>
 <a href="admin/admin.html" class="text-white" style="margin-left:32%">Go back to admin panel</a>
 </div><br>

  <label> Username: </label>
 <input type="text" name="username" class="form-control" required> <br>

  <label> Password: </label>
 <input type="text" name="password" class="form-control" required> 
 <br>
 <!--
 <div>
 <input type="radio" value="admin" name="type" class="form-control">Admin
<input type="radio"  value="generaluser" name="type" class="form-control">Gen User
</div>
-->
<select name="type" class="form-control" required>
  <option value="admin">Admin</option>
  <option value="generaluser">General User</option>

</select>
<br>
<br>
  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>