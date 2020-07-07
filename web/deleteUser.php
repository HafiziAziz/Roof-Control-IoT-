<?php 

session_start();

include("dbcon.php");

$id = $_GET['id'];

$query = mysql_query("DELETE FROM user where id='$id'", $con);

header("location:viewUser.php");



?>