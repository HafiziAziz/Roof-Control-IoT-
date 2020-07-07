<?php

session_start();

include("dbcon.php");

?>
<?php
   if (isset($_POST['logmasuk']))
   {
    $username=$_POST["username"];
    $password=$_POST["password"];
    $query = mysql_query("SELECT * FROM admin where username='$username' AND password='$password'", $con);

	$rows = mysql_num_rows($query);
	if($rows==1)
	{
		$_SESSION['login_user'] = $username;
		header("location:adminPanel.php");
	}
	else
	{
		$message="<div class='alert alert-danger'><strong>Access Denied!</strong><br> Please Check your Username and Password.</div>";

   }}
else
{
    $message="";
}

	?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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


   <div class="bg" align="center">
   <h1 >Automatic Roof Control <br><strong>(ARC)</strong></h1>
   <br>
   <img src="images/adminLogin.png" height="150" height="150">
   <br><br><br>

    <form action="adminLogin.php" method="post">

          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Username" name="username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
            </div>
			<?php echo $message ?>

            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="logmasuk">Sign In</button>
             <a href="index.php" class="btn btn-danger btn-lg btn-block">Back</a>
            </div>
          </form>

	  </form>




	<div>









    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
