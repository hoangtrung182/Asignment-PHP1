<?php 	
	include '.././QLVN/connect.php';

	$sql = "SELECT * FROM typepets";
	$statement = $connect->prepare($sql);
	$statement->execute();
	$data = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<title>Quản lí danh muc</title>
	<style>
		html {
			box-sizing: border-box;
		}
		
		.btn {
			display: block;
			margin: 20px 0;
			height: 30px;
			width: 100px;
			background-color: orange;
			color: #fff;
			border-radius: 4px;
			font-size: 18px;
			line-height: 30px;
		}

		a {
			display: block;
			text-decoration: none;
			text-align: center;
			margin-bottom: 30px;
		}
		.btn-new {
			text-align: center;
			height: 30px;
			width: 200px;
			border: none;
			background-color: #ddd;
			color: #000;
			border-radius: 5px;
		}
		.header {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.color {
			background-color: #6dd9c5;
			color: #fff;
			border: none;
			width: 100px;
		}
		.delete {
			background-color: red;
		}

	</style>
</head>
<body>
	<div class="">
		<div class="header">
			<h1>Danh sách danh mục</h1>
			<a href="../lobby.php">
				<button class="btn color">Back</button>
			</a>
		</div>
	</div>
	<div class="container">
		<table class="table">
		  <thead>
		    <tr>		
		      <th scope="col">Mã</th>
		      <th scope="col">Thể loại</th>
		      <th scope="col">Tên các con vật </th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		for($i = 0; $i < count($data); $i++) { ?>
		  			<tr>
		  				<td><?= $data[$i]['id'] ?></td>
		  				<td><?= $data[$i]['type'] ?></td>
		  				<td><?= $data[$i]['name'] ?></td>
		  				<td>
	  						<a href="edit_category.php?id=<?= $data[$i]['id'] ?>">
	  							<button class="btn" >Edit</button>
	  						</a>
	  						<a href="delete_category.php?id=<?= $data[$i]['id'] ?>">
	  							<button class="btn delete">Delete</button>
	  						</a>
		  				</td>
		  			</tr>
		  		<?php } ?>
		  </tbody>
		</table>
		<a href="./create_category.php">
			<button class="btn-new">ADD NEW</button>
		</a>
	</div>	
</body>
</html>