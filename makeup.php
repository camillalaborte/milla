<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 

   
    <html>
<head>
	<title>Add Data</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
<style type="text/css">
body{
  background-image:url(make.jpg);
  background-size:cover;
}
  .navbar-inverse {
    background-color: #7c0086;
    border-color: #16ec00;
}


</style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
  <li><a href="index.php">Home</a></li>
		 <li><a href="makeup.php">Order Makeup</a></li>
		   <li><a href="#.php"> View  Costumer</a></li>

  </ul>
  <ul class="nav navbar-nav navbar-right">
     
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
</nav>
<div class="row">
  <div class="col-sm-4"><img src="s1.jpg" height="400" width="400">
  <a href="#"><h2>Proceed Order</h2></div>

  <div class="col-sm-4"><img src="s2.jpg" height="400" width="400">
  <a href="#"><h2>Proceed Orde</h2></div>

  <div class="col-sm-4"><img src="s3.jpg" height="400" width="400">
  <a href="#"><h2>Proceed Order</h2></div>
  
</div><div class="row">
  <div class="col-sm-4"><img src="s4.jpg" height="400" width="400">
  <a href="#"><h2> Proceed Order</h2></div>
  <div class="col-sm-4"><img src="s5.jpg" height="400" width="400">
  <a href="#"><h2>Proceed Order</h2></div>
</div>


<div class="row">

  <div class="col-sm-4"><img src="s9.jpg" height="400" width="400">
  <a href="#"><h2>Proceed Order</h2></div>
  <div class="col-sm-4"><img src="s7.jpg" height="400" width="400">
  <a href="#"><h2>Proceed Order</h2></div>
  <div class="col-sm-4"><img src="s8.jpg" height="400" width="400">
  <a href="#"><h2>Proceed Order</h2></div>
</div>


</body>
</html>
<?php 
   

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
