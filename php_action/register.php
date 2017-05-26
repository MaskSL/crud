<?php


session_start();
require_once 'connect.php';



$username=$_POST["username"];
$password=$_POST["password"];





$sql="INSERT INTO admin (username,password) values ('$username','$password')";

if($connect->query($sql)===TRUE)
	{

		echo"User Created Successully";
		echo"<br>";
    echo "<a href=../login.php>Go to Login Page</a>";



	}
else
{
	echo"Error";
}








?>
