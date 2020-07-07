

<?php 


include("sessionCek.php");

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

<?php 

include("dbcon.php");

$query = mysql_query("SELECT * FROM user",$con);


?>

<br>

<a href="addUser.php"><img id="icon" src="images/adduser.png"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="adminPanel.php"><img id="icon" src="images/home.png"></a>
	<br><br>
<table  border="1px solid;" class="table table-striped " >
    <thead>
    <tr>
		<th class="success">No. </th>
        <th class="success">Name</th>
		<th class="success">Action</th>
       
    </tr>
	  </thead>
	<?php 
	 $rows = mysql_num_rows($query);
	 /* Usage Looping */
	 for($j = 1 ; $j<=$rows; $j++)
	{
		$row = mysql_fetch_array($query);?>
	
    <tbody>
    <tr>
		<td><?php echo $j; ?></td>
        <td><?php echo  $row[1]; ?></td>
        <td class="center">
            <a class="btn btn-danger" href="deleteUser.php?id=<?php echo $row[0];?>"><span class="glyphicon glyphicon-remove"></span>  
            </a>
           
        </td>
    </tr>
    <?php }
	?>
    
    </tbody>
    </table>

	
	
	
	
	<div>

          







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>