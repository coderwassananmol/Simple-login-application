<?php

session_start();
echo 'Welcome back '.$_SESSION['username'].'! Please make yourself home. Enjoy! :)';
if(isset($_POST['submit']))
{
    session_destroy();
    header('Location: login.php');
}

?>
<form action="loginsuccess.php" method="POST">
<br />
<input type="submit" name="submit" value="Log me out!">
</form>