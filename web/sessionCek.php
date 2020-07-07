<?php

session_start();

if(!isset($_SESSION['login_user']) ==true)
{
header("location:index.php");
exit();
}
?>