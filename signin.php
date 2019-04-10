<?php
include 'config.php';

if (isset($_POST['login_user'])) {
$username = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$type = mysqli_real_escape_string($con, $_POST['type']);
if($type=='admin'){
$query = "SELECT type FROM users WHERE username='$username' AND password='$password'  AND type='$type'";
$results = mysqli_query($con, $query);



if (mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location: crud/admin/admin.html');
}else {
echo '<a href="index.php"> Wrong Username Password Try Again</a>';
}
}
else{
	$query = "SELECT type FROM users WHERE username='$username' AND password='$password'  AND type='$type'";
$results = mysqli_query($con, $query);



if (mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location: display.html');
}else {

echo '<a href="index.php"> Wrong Username Password Try Again</a>';
}
}

}?>