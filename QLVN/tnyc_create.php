<?php 
	include 'connect.php';
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$name = isset($_GET['name']) ? $_GET['name'] : '';
	$type = isset($_GET['type_id']) ? $_GET['type_id'] : '';
	$age = isset($_GET['age']) ? $_GET['age'] : 0;
	$weight = isset($_GET['weight']) ? $_GET['weight'] : 0;
	$image = isset($_GET['image']) ? $_GET['image'] : '';

	$sql = "INSERT INTO pets (id, name, type_id, age, weight, image) VALUES('$id','$name','$type','$age','$weight','$image') ";

	$statement = $connect->prepare($sql);
	$statement->execute(); 

	header('location: list-pet.php');
?>