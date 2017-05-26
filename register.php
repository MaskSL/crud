<?php


session_start();
require_once 'php_action/connect.php';






// form is submitted
// if($_POST) {
//
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $cpassword = $_POST['cpassword'];
//
//
//
//     if($username == "") {
//         echo " * Username is Required <br />";
//     }
//
//     if($password == "") {
//         echo " * Password is Required <br />";
//     }
//
//     if($cpassword == "") {
//         echo " * Confirm Password is Required <br />";
//     }

    // if($username && $password && $cpassword) {
    //
    //   $sql = "INSERT INTO admin WHERE username = '$_GET['username']' AND password = '$_GET['password']'";
    //   $db->query($sql);
    //
    //   echo "Successfully Inserted <a href="login.php" >Login</a>";
    //
    //     } else {
    //         echo " * Password does not match with Confirm Password <br />";
    //     }
    // }

//}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>


<form action="php_action/register.php" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Username" autocomplete="off" value="<?php if($_POST) {
            echo $_POST['username'];
          } ?>" required />
    </div>
    <br />

    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="Password" autocomplete="off" required />
    </div>
    <br />

    <div>
        <label for="cpassword">Confirm Password: </label>
        <input type="password" name="cpassword" placeholder="Conform Password" autocomplete="off" required />
    </div>
    <br />
    <div>
        <button type="submit">Create</button>
        <button type="reset">Cancel</button>
    </div>

</form>

Already Registered ? Click <a href="login.php">login</a>

</body>
</html>
