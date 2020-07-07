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
   
   <div style="padding-top:10px;">
 
 <div class="bg" align="center">
   <br>
   <h1 >Automatic Roof Control <br><strong>(ARC)</strong></h1>
<div class='alert alert-success'><strong class="col-xs-9 col-md-4" style="text-transform: uppercase;"><?php echo $_SESSION['login_user'];?></strong>
<br><strong class="col-md-8 col-md-4"> <a href="logout.php" >Logout</a></strong></br></div>



</div>
   <div class="bg" align="center">
   <?php $username = $_SESSION['login_user'];
  ?>
 
   

   
   <div class="bg" align="center">
   <br><br><br>
   <p><a href="viewUser.php"><img src="images/users.png" ></a></p>
</br></br></br></br>

<p><a href="viewReport.php"><img src="images/report.png" ></a></p>
          

</div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>