<?php 
	session_start();
	require_once('./model/helper.php');
	require_once('./model/database.php');
	$db = new Database();

	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	}else{
		$controller = 'login';
	 }

	switch ($controller) {
		case 'login':
			require_once('controller/login.php');
			break;
		case 'signup':
			require_once('controller/signup.php');
			break;	
		default:
			echo "Lỗi trang";
			break;
	}
?>