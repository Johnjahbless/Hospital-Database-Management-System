<?php
session_start();
error_reporting(1);
      

      if(!mysql_connect("localhost","root",""))
      {
        echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
die();
 }
 mysql_connect("localhost","root","");
 mysql_select_db("hospital");
 
 extract($_POST);
 if(isset($signIn))
 {
//echo $user,$pass;
	//for Admin
	$que=mysql_query("select user,pass from admin where user='$user' and pass='$pass'");
	 $row= mysql_num_rows($que);
	 if($row)
	 {
		$_SESSION['admin']=$user;
		echo "<script>window.location='alist.php'</script>";
		
		//include('alist.php');
	 	
	 }
	 else
	 {
	  $err="<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Invalid admin Login</font>";
	 }
	
 
 }
if($_SESSION['admin']!="")
{
header('alist.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Hospital Management System Federal Medical Center Bida</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signIn.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <center>
  
<img src="images/logo.png" alt="Avatar" style="width:40%" align="middle">
<p></p>
</center>

    <div class="container">
	
      <form method="post" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label><?php echo $err; ?></label>
		<label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="user" class="form-control" placeholder="example@gmail.com" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="xxxxxxx" required>
        
<button class="btn btn-lg btn-primary btn-block" name="signIn" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
?>