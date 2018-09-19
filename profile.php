<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>

	<!-- Bootsrap Links -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="includes/animate.css">
	<script type="text/javascript" src="includes/wow.min.js"></script>
</head>
<body>
	<div class="animated bounce">
Hello <?php echo $_SESSION["name"]; ?>
<a href="includes/logout.php">Logout</a>
</div>
<br><p></p>
<form method="POST" action="includes/process.php">
	<input type="text" name="title" placeholder="Enter the recipe title..." required>
	<textarea name="recipe" cols="30" placeholder="Enter recipe... " required></textarea>
	<input type="text" name="author" value="<?php echo $_SESSION['name']; ?>" hidden>
	<button type="submit" name="submit-r">Submit</button>
</form>

<!-- Scripts -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>