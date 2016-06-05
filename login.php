<?php

$flag = 1;
session_start();
include 'Formforlogin.php';
if (isset($_POST['text']) && isset($_POST['password']))
{
    if (!empty($_POST['text']) && !empty($_POST['password']))
    {
        $_SESSION['username'] = $_POST['text'];
        $_SESSION['pwd'] = $_POST['password'];
        if ($_SESSION['username'] == 'anmolcoder' && $_SESSION['pwd'] == 'jan261998')
        {
            $flag = 0;
        }
    } else
    {
        echo '<script type="text/javascript"> alert("One or more fields are empty");</script>';
    }
}

if (isset($_POST['submit']) && $flag == 0)
{
    header('Location: loginsuccess.php');
}
if (isset($_POST['submit']) && $flag == 1)
{
    header('Location: loginfailed.php');
}

?>