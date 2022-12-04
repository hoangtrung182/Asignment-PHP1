

<?php 
	include '.././QLVN/connect.php';
	$id = isset($_POST['id']) ? $_POST['id'] : 0;
	$type = isset($_POST['type']) ? $_POST['type'] : '';
	$name = isset($_POST['name']) ? $_POST['name'] : '';

	$sql = "UPDATE typepets SET type='$type', name='$name' WHERE id = $id";
	$statement = $connect->prepare($sql);
	$statement->execute();

	header('location: list-category.php');

?>