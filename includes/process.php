<?php 
include("../config/db.php");
session_start();

if (isset($_POST["signup"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = mysqli_query($con,"INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')");
	
	if($sql){
		header("location: ../profile.php?welcome");
		$_SESSION["name"] = $name;
		$_SESSION["email"] = $email;

	}else{
		header("location: ../auth.php?auth=false");
	}

}

if (isset($_POST["login"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql = mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$password' ");

	if ($sql) {
		$num_rows = mysqli_num_rows($sql);
		if($num_rows > 0){
			header("location: ../profile.php?welcome");
			$_SESSION["email"] = $email;
			while ($row=mysqli_fetch_assoc($sql)) {
				$name = $row["name"];
			}
			$_SESSION["name"] = $name;

		}else{
			header("location: ../auth.php?auth=false");
		}

	}else{
		header("location: ../login.php?auth=false");
	}


}



// Recipe
if (isset($_POST["submit-r"])) {
	$title = $_POST["title"];
	$recipe = $_POST["recipe"];
	$author = $_POST["author"];

	$sql1 = mysqli_query($con,"INSERT INTO recipes (title,texts,author) VALUES ('$title','$recipe','$author')");
	
	if($sql1){
		header("location: ../profile.php?recipe=true");

	}else{
		header("location: ../profile.php?recipe=false");
	}

}

 ?>