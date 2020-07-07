<?php


 $host = "localhost";
 $user = "root";
 $pass = "";
 
 $con = mysql_connect($host, $user , $pass);
 
 mysql_select_db("arc", $con) or die (mysql_error());
 


?>