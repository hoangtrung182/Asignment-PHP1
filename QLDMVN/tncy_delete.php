<?php 
	
	$id = isset($_POST['id']) ? $_POST['id'] : 0; 
	include '.././QLVN/connect.php';
	$sql = "DELETE FROM typepets WHERE id = $id";
	$statement = $connect->prepare($sql);
	$statement->execute();

	header('location: list-category.php');

?>