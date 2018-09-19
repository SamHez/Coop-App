<?php 
session_start();
if (isset($_SESSION["email"])) {

	header("location: profile.php");

}else{

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login / Signup</title>

	<!-- Bootsrap Links -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>


<!-- Begin Signup -->
<center><form class="form-signup" method=POST action="includes/process.php">

	<h2>Login</h2><br>

	<!-- Email Input -->
    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email">
    <br>

    <!-- Password Input-->
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">

    <br>
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
  <br><br>
  <a href="auth.php">New Here? Signup</a>
    <br><br>
  <u><a href="index.php"><i class="fa fa-home"></i> BACK TO HOME</a></u>
</form></center>

<!-- Scripts -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>