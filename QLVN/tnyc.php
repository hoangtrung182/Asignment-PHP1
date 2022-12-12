<?php
	// var_dump($_POST);
	$id = isset($_POST['id']) ? $_POST['id'] : 0;
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$type = isset($_POST['type_id']) ? $_POST['type_id'] : '';
	$age = isset($_POST['age']) ? $_POST['age'] : 0;
	$weight = isset($_POST['weight']) ? $_POST['weight'] : 0;
	$image = isset($_POST['image']) ? $_POST['image'] : 0;

	$err = '';
	if($name == '') {
		$err .= 'Tên không được để rỗng';		
	}
	if($age == '') {
		$err .= 'Tuổi không được để rỗng';
	}
	if($weight == '') {
		$err .= 'Cân nặng không được để rỗng';
	}
	if($image == '') {
		$err .= 'Hình ảnh không được để rỗng';
	}

	if($err != '') {
		header("location: edit-pet.php?err=$err");
	}else {
		include 'connect.php';	
		$sql = "UPDATE pets  SET name='$name', type_id='$type', age='$age', weight='$weight', image='$image' 
			WHERE id=$id ";
		$statement = $connect->prepare($sql);
		if($statement->execute()) {
			$success = 'Sua thanh cong id';
			header("location: list-pet.php?success=$success&&id=$id");
		}

	}
 ?>
