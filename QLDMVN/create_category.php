	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form tạo mới danh mục </title>
</head>
<body>

	<form action="./tnyc_add.php" method="get">
		<!-- <label for="">ID:</label> -->
		<input type="number" name="id" placeholder="ID" hidden><br><br>
		<label for="">Type: </label>
		<input type="text" name="name" placeholder="Enter a new name" required><br><br>
		<label for="">Name: </label>	
		<input type="text" name="type" 	placeholder="Type.."><br><br>
		<button>ADD</button>
	</form>
	
</body>
</html>