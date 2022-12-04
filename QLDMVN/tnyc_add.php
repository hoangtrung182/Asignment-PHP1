<?php
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$type = isset($_GET['type']) ? $_GET['type'] : '';
	$name = isset($_GET['name']) ? $_GET['name'] : '';

	include '.././QLVN/connect.php';

	$sql_add = " INSERT INTO typepets (id, type, name) VALUES('$id', '$type', '$name') ";
	$statement = $connect->prepare($sql_add);
	$statement->execute();

	header('location: list-category.php');
 ?> 