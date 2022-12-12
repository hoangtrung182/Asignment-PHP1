

<?php 
	//Dung PHP de lay du lieu
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	include 'connect.php';
	$sql = "DELETE FROM pets WHERE id = $id";
	$statement = $connect->prepare($sql);
	$statement->execute();

	$mess = '';
	if($statement->execute()) {
		$mess = 'Delete Successful';
	}else {
		$mess = "Not Found";
	}

	header("location: list-pet.php?thong_bao=$mess");

?>