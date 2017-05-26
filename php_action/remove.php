<?php

session_start();
require_once 'connect.php';
if(!isset($_SESSION['username']))
{
  header('Location: ../login.php');
} ?>
<?php



if($_POST) {
    $id = $_POST['id'];

    $sql = "DELETE FROM members WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../main.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
