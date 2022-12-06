
<?php 
	$gmail = $_POST['gmail'];
	$password = $_POST['pwd'];

	$notify = '';

	if($gmail == '') {
		$notify = $notify . 'Không được để Gmail trống !!';
		echo "<br>";
		header("location: login.php?notify=$notify");
	}

	if($password == '') 	{
		$notify = $notify . 'Không được để Password trống !';
		header("location: login.php?notify=$notify");
	}

	include './QLVN/connect.php';

	if($gmail && $password) {
		$sql = "SELECT * FROM users WHERE gmail = '$gmail' and password = '$password'";
		$statement = $connect->prepare($sql);
		if($statement->execute()) {
			$notify .= 'Đăng Nhập thành công !';
			header("location: lobby.php?gmail=$gmail&notify=$notify");
		}else {
			$notify .= 'Đăng nhập thất bại, Mời thử lại !!';
			header("location: login.php?notify=$notify");
		}
	}

?>