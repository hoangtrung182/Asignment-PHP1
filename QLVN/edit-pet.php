

<?php 
	//Dung PHP de lay du lieu
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	include 'connect.php';
	$sql = "SELECT * FROM pets WHERE id = $id";
	$statement = $connect->prepare($sql);
	$statement->execute();
	$item = $statement->fetch();
	// var_dump($item);


	// Lay ds loai vat nuoi

	$sql_loai = "SELECT * FROM typepets";
	$statement_loai = $connect->prepare($sql_loai);
	$statement_loai->execute();
	$data = $statement_loai->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Form chỉnh sửa vật nuôi</title>
</head>
<body>
	<div class="container">
		<a href="./list-pet.php">
			<button class="btn color">Back</button>
		</a>
		<h1>Form cập nhật</h1>
		<form action="./tnyc.php" method="post">
			<label for="" hidden>Mã vật nuôi</label><br>
			<input type="number" name="id" placeholder="Mã vật nuôi" value="<?= $id ?>" hidden><br><br>

			<label for="">Tên</label><br>
			<input type="text" name="name" placeholder="Tên " value="<?= $item['name'] ?>"><br><br>

			<label for="">Kiểu</label><br>
			<select name="type_id" id="">
				<?php foreach ($data as $key => $value) { ?>
					<option value="<?= $value['type'] ?>">
						<?= $value['type'] ?>	
					</option>
				<?php } ?>
			</select><br><br>

			<label for="">Tuổi</label><br>
			<input type="number" name="age" placeholder="Tuổi vật nuôi" value="<?= $item['age']?>"><br><br>

			<label for="">Cân nặng</label><br>
			<input type="number" name="weight" placeholder="Cân nặng vật nuôi" value="<?= $item['weight'] ?>"><br><br>
			
			<label for="">Link ảnh</label><br>
			<input type="text" name="image" placeholder="Hình ảnh vật nuôi" value="<?= $item['image'] ?>">
			<button class="btn">UPDATE</button>
		</form>
	</div>
</body>
</html>