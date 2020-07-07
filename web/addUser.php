<?php

session_start();

include("dbcon.php");

?>
<?php
   if (isset($_POST['adduser'])) {
    $username=$_POST["username"];
    $password=$_POST["password"];
    $query = mysql_query("SELECT * FROM user where username='$username'", $con);
	
	
	if(mysql_num_rows($query) > 0)
	{
		$message="<div class='alert alert-danger'><strong>Username Already Used</strong><br> Choose Another Username.</div>";
		
	}
	else
	{
		$fullname=$_POST['fname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		

	$query1 = mysql_query("INSERT INTO user SET fname='$fullname', username='$username' , password = '$password'",$con);
	header("location:viewUser.php");

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
   
  

   <div class="bg">
   
   <h1 align="center"><img src="images/adduser.png"  ></h1>
   
   <form class="form-horizontal" action="addUser.php" method="post">
   
   <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="full name" name="fname" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="username" name="username" required>
            </div>
			<div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="password" name="password" required>
            </div>
			
			<?php echo $message ?>

            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="adduser">Add User</button>
             <a href="viewUser.php" class="btn btn-danger btn-lg btn-block">Back</a>
            </div>
          </form>
   
   
  
  
  
</form>
</div>
 
 
   



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>