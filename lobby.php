<?php
	// $gmail = isset($_GET['gmail']) ? $_GET['gmail'] : '';
	
	session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./index.css">
	<title>Asignment PHP</title>
	<style>
		.header-main {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<!-- <p><?= $thong_bao ?></p> -->
		<div class="box">
			<div class="header-main">
				<header>
					<p class="box-name">Welcome!!</p>
				</header>
				<a href="./index.php">
					<button class="btn color">Exit</button>
				</a>
			</div>
			<div>
				<h1 class="box-inf">Xin mời chọn :</h1>
			</div>
			<div class="div">
					<a href="./QLVN/list-pet.php">
						<button class="btn btn-warning">Quản lí vật nuôi</button>
					</a>
					<a href="./QLDMVN/list-category.php">
						<button class="btn btn-warning">Quản lí loại vật nuôi</button>
					</a>
			</div>
		</div>
	</div>
</body>
</html>