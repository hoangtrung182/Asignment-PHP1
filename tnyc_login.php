
<?php 
	$gmail = $_POST['gmail'];
	$password = $_POST['password'];
	include './QLVN/connect.php';


	$err = '';

	if($gmail == '') {
		$err .= 'Gmail khong duoc de trong';
	}

	if($password == '') {
		$err .= 'Password khog dc de trong';
	}

	if($err != '') {
		header("location: login.php?err=$err");
	}else {
		// KHi khong co' loi nua thi ktra trong database
		$sql = "SELECT * FROM users WHERE gmail = '$gmail'";
		$sm = $connect->prepare($sql);
		$sm->execute();
		$data = $sm->fetch();
		// echo "<pre>";
		// var_dump($data);
		// var_dump($gmail, $password);
		// die;
		header("location: lobby.php");

		// $password_ma_hoa = password_hash($password, PASSWORD_BCRYPT);
		// var_dump($password_ma_hoa);
		// die;

		// if($data == false) {
		// 	$err .= 'Nguoi dung khong ton tai';
		// 	header("location: login.php?err=$err");
		// } else if (password_verify($password_ma_hoa, $data['password']) == false) {
		// 	$err .= 'Password khong chinh xac';
		// 	header("location: login.php?err=$err");
		// } else {
		// 	// KHi nhap dung ca gmail va password roi`
		// 	// session_start();
		// 	// $_SESSION['user'] = $data;
		// 	header("location: lobby.php");
		// }
	}
 	
?>