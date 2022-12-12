<?php 
	// 1. Kết nối PHP vs db mySQL
	// 1. Khởi tạo kết nối
	// PDO( Thongtin(sql:link);username;password )	
	include 'connect.php';
	$sql = "SELECT * FROM pets";
	$statement = $connect->prepare($sql); 
	$statement->execute();
	$data = $statement->fetchAll();

	$success = isset($_GET['success']) ? $_GET['success'] : '';
	$id = isset($_GET['id']) ? $_GET['id'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Quản lí vật nuôi</title>
</head>	
<body>
	<p><?= isset($_GET['thong_bao']) ? $_GET['thong_bao'] : '' ?></p>
	<div class="">
		<div class="header">
			<h1>Danh sách vật nuôi</h1>
			<a href="../lobby.php">
				<button class="btn color">Back</button>
			</a>
		</div>
	</div>
	<div class="container">
		<div class="">
			<?= $success . ' ' . $id ?>
		</div>
		<table class="table">
		  <thead>
		    <tr style="text-align: center;">		
		      <th scope="col">Mã</th>
		      <th scope="col">Tên</th>
		      <th scope="col">Loại</th>
		      <th scope="col">Tuổi(Years)</th>
		      <th scope="col">Cân nặng(KG)</th>
		      <th scope="col">Hình ảnh</th>
		      <th scope="col">Chú thích</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		for($i = 0; $i < count($data); $i++) {  ?>
		  			<tr style="text-align: center;">
		  				<td><?= $data[$i]['id'] ?></td>
		  				<td><?= $data[$i]['name'] ?></td>
		  				<td><?= $data[$i]['type_id'] ?></td>
		  				<td><?= $data[$i]['age'] ?></td>
		  				<td><?= $data[$i]['weight'] ?></td>
		  				<td><img src="<?= $data[$i]['image'] ?>" ></td>
		  				<td>
		  					<a href="edit-pet.php?id=<?= $data[$i]['id'] ?>">
		  						<button class="btn">Edit</button>
		  					</a>
		  					<a href="delete-pet.php?id=<?= $data[$i]['id'] ?>" onclick="return confirm('ban co muon xoa khong?')">
		  						<button class="btn delete">Delete</button>
		  					</a>
		  				</td>
		  			</tr>
		  		<?php } ?>
		  </tbody>
		</table>
		<div>
			<a href="./create-pet.php">
				<button class="btn-new">ADD NEW</button>
			</a>
		</div>
	</div>	
</body>
</html>