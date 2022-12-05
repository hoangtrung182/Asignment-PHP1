<?php
	$id = isset($_GET['id']) ? $_GET['id'] : 0; 
	
	include '.././QLVN/connect.php';
	// $sql = "SELECT * FROM typepets WHERE id = $id";
	// $statement = $connect->prepare($sql);
	// $statement->execute();
	// $item = $statement->fetch();


	$sql = "DELETE FROM typepets WHERE id = $id";
	$statement = $connect->prepare($sql);
	$statement->execute();

	header('location: list-category.php');

 ?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form chỉnh sửa danh mục</title>
</head>
<body>
	<form action="./tncy_delete.php" method="post">
		<input type="text" name="id" placeholder="ID" value="<?= $item['id'] ?> " hidden><br><br>
		<label for="">Loại vật nuôi</label>
		<input type="text" name="type" placeholder="Type.." value="<?= $item['type'] ?>"><br><br>
		<label for="">Tên vật nuôi</label>
		<input type="text" name="name" placeholder="Name" value="<?= $item['name'] ?>"><br><br>
		<button>DELETE</button>
	</form>
</body>
</html> -->