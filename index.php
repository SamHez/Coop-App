<?php include("config/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Coop App - &copy; 2018</title>
	<link href="https://www.logolynx.com/images/logolynx/60/60b104d1ee6ba0fb33a4b264684decb3.png" rel="shortcut icon">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Skill is a platform where home owners and offices can hire vetted casual workers.">
	<style type="text/css">
	       body {
	           overflow-x: hidden;
	           padding: 20px;
	           color: white;
	       }
	       .formi{
	           padding: 15px;
	           border: none;
	           border-radius: 8px;
	           
	       }
	       
	       .left {
	           padding-top: 110px;
	       }
	       
	       @media (max-width: 768px) {
	           .left {
	               margin-top: -50px;
	           }
	           .right {
	               display: none;
	           }
	       }
	       
	       h1 {
	           font-family: 'Poppins', sans-serif;
	       }
	       
	       span {
	           font-size: 35px;
	           color: #00FF6A;
	       }
	       
	       .btn:hover {
	           cursor: not-allowed;
	       }
	       
	       .btn {
	           margin-bottom: 10px;
	       }
	</style><!-- Bootstrap Cdn -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"><!-- Font Awesome Cdn -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="background-image: url('img/hero-purple.png'); background-size: cover; color: white; background-repeat: no-repeat; padding-bottom: 280px; padding-top: 100px; overflow: hidden;">
	<header>
		
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12 left">
				<h1 style="font-family: 'Poppins', sans-serif;"><b>Ntinda Coop &copy; 2018<br>
				Management system <br></b></h1><br>
				<p>If your part of the NTINDA COOP &copy; then your in the right place. Register / Signin to get started<br>
				<br>
				<!--<span style="font-size: 30px; font-family: 'Pacifico', cursive; color: white;">Coming End of May 2018...</span>--></p><!--<button class="btn btn-primary btn-lg" data-toggle="tooltip" disabled title="Coming Soon!">Search for workers</button>--> 
				
				<!--<button class="btn btn-outline-dark btn-lg" data-toggle="tooltip" title="Coming Soon!" disabled>Signup as a worker</button>-->
				<a href="auth.php"><button class="btn btn-success" style="height: 50px; width: 100px;">Register</button></a>
				<a href="login.php"><button class="btn btn-warning" style="height: 50px; width: 100px;">Login</button></a>
				<br>
				<br>
				<h5>Developed with <i class="fa fa-heart"></i> by <a href="https://twitter.com/sam_epodoi/" style="color: white;" target="_blank"><u>Samuel Epodoi</u></a></h5>
			</div><!--Right-->
			<div class="col-md-6 col-xs-12 right">
				<img src="img/hero-13.2.png">
			</div>
		</div>
	</div>
	<footer style="float: bottom; margin-top: 0;"></footer>
</body>
</html>