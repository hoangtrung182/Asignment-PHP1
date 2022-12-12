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
