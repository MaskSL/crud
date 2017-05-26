<?php
require_once 'connect.php';

session_start();

if(!isset($_SESSION['username']))
{
  header('Location: login.php');
}



 ?>
<?php

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM admin where username=\"$username\" and password=\"$password\" ";

if($rs = $connect->query($sql)){
  $count = mysqli_num_rows($rs);
if($count==1)
{
	$_SESSION['username']=$_POST['username'];
	header("Location: ../main.php");
}
else
{
	header("Location: ../login.php");
}

}
?>
