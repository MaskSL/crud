<?php
session_start();
require_once 'connect.php';
if(!isset($_SESSION['username']))
{
  header('Location: ../login.php');
}

if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO members (fname, lname, contact, age, active) VALUES ('$fname', '$lname', '$contact', '$age', 1)";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../main.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>
