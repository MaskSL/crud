<?php
session_start();

 ?>

 <html>
 <body>

   <form name="f1" action="php_action/login.php" method="post">
    User Name:<input type="text" name="username" required/>
    <br /><br>
    Password:<input type="password" name="password" required/>
    <br />
    <input type="submit" name="b1" class="buttonDP" value="Log In" /><br />
    <input type="reset" name="b2" class="buttonDP" value="Clear"/>
    <br>
    <br>
    <a href="register.php">Not Registered? Register Now!!</a>
    </form>


 </body>
 </html>
