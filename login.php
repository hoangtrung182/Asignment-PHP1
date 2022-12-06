<?php 
	
	$notify = isset($_GET['notify']) ? $_GET['notify'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="index.css">
	<title>Form Login</title>
</head>
<body>
	<div class="container">
		<a href="./index.php">
			<button class="btn color">Back</button>
		</a>
		<h1>Form Login</h1>

		<p><?= $notify ?></p>
		<form action="./tnyc_login.php" method="post">
			<label for="">Email: </label><br>
			<input 	type="email"
					name="gmail" 
					placeholder="Enter your email" 
					class="form-input"><br>
			<label for="">Password</label><br>
			<input type="password" name="pwd" >
			<button class="btn btn-primary">Login</button>
		</form>
	</div>
</body>
</html> 



