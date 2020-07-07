<?php


include("sessionCek.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/arc.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <body>
 <?php

include("dbcon.php");

$query = mysql_query("SELECT * FROM report ORDER BY date desc, time desc limit 1", $con);
$row = mysql_fetch_array($query);

$date = new DateTime($row[2]);
$result = $date->format('d-m-Y');

?>
<?php
   $username = $_SESSION['login_user'];





  ?>

   <div style="padding-top:10px;">


<div class='alert alert-success'><strong class="col-xs-9 col-md-4" style="text-transform: uppercase;">Welcome :<?php echo $username;?></strong><strong class=""> <a href="logout.php" >Logout</a></strong></div>




</div>
   <div class="bg" align="center">


<img id="myImg" src="./images/home1.png" width="250px" height="300px"></br></br>

</br></br>
<div class='alert alert-danger'>Last time use the system on <strong><?php echo $result;?></strong> at <strong><?php echo $row[3];?></strong></div>

<a href="http://192.168.43.136/?button2on/"  class="btn btn-primary btn-lg btn-block" id="myBtn" name="SubmitButton">Retrieve out</a>
<a href="http://192.168.43.136/?button2off/"  class="btn btn-primary btn-lg btn-block" id="myBtn" name="SubmitButton">Retrieve in</a>

</div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
