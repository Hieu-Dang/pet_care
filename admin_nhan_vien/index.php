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
		case 'trangchu':
			require_once('controller/trangchu.php');
			break;	
		case 'doanhthu':
			require_once('controller/doanhthu.php');
			break;	
		case 'ql_nhanvien':
			require_once('controller/ql_nhanvien.php');
			break;
		case 'ql_order':
			require_once('controller/ql_order.php');
			break;
		case 'ql_product':
			require_once('controller/ql_product.php');
			break;	
		case 'ql_web':
			require_once('controller/ql_web.php');
			break;	
		case 'ql_user':
			require_once('controller/ql_user.php');
			break;	
		case 'ql_feedback':
			require_once('controller/ql_feedback.php');
			break;	
		case 'ql_ship':
			require_once('controller/ql_ship.php');
			break;			
		case 'logout':
			require_once('controller/logout.php');
			break;				
		default:
			echo "Lỗi trang";
			break;
	}
?>