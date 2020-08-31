<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="layout/css/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.5.2-dist/css/bootstrap.css">
  <script src="./js/js.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<style type="text/css">
		<?php require_once('layout/css/style.css'); ?>
	</style>
</head>
<body>
	<div class="container-fluid mt-1">
		<div class="row">
			<div class="col-md-2" id='admin-header'>
				<div class="row mt-2">
					<span class=" col-md-6"><?php echo $data_user[0]['full_name'] ?></span>
					<a href="?controller=profile" class="col-md-4 "><?php if ($data_user[0]['lv']=='1') {
						echo 'admin';
					}else{echo 'nhân viên';} ?>	
					</a>

				
				</div>
				<div class="row mt-5" id="main-info" <?php if ($controller=='trangchu') {
					echo 'style="background-color: gray;"' ;
				} ?>>
					<a class="col-md-12" href="?controller=trangchu" >
						<h5>Thông tin chung<h5>
					</a>
				</div>
				<div class="row mt-1" id="main-info" <?php if ($controller=='doanhthu') {
					echo 'style="background-color: gray;"' ;
				} ?>>
					<a class="col-md-12 " href="?controller=doanhthu" >
						<h5>Quản lí doanh thu<h5>
					</a>
				</div>
				<div class="row mt-1" id="main-info" <?php if ($controller=='ql_nhanvien') {
					echo 'style="background-color: gray;"' ;
				} ?>>
					<a class="col-md-12 " href="?controller=ql_nhanvien">
						<h5>Quản lí nhân viên/shipper<h5>
					</a>
				</div>
				<div class="row mt-1" id="main-info" <?php if ($controller=='ql_order') {
					echo 'style="background-color: gray;"' ;
				} ?>>
					<a class="col-md-12 " href="?controller=ql_order">
						<h5>Quản lí giao dịch/ đơn hàng<h5>
					</a>
				</div>
				<div class="row mt-1" id="main-info" <?php if ($controller=='ql_product') {
					echo 'style="background-color: gray;"' ;
				} ?>>
					<a class="col-md-12 " href="?controller=ql_product">
						<h5>Quản lí sản phẩm/ danh mục<h5>
					</a>
				</div>
				<div class="row mt-1" id="main-info" <?php if ($controller=='ql_web') {
					echo 'style="background-color: gray;"' ;
				} ?>>
					<a class="col-md-12 " href="?controller=ql_web">
						<h5>Quản lí hiển thị web<h5>
					</a>
				</div>
				<div class="row mt-1" id="main-info" <?php if ($controller=='ql_user') {
					echo 'style="background-color: gray;"' ;
				} ?>>
					<a class="col-md-12 " href="?controller=ql_user">
						<h5>Quản lí người dùng<h5>
					</a>
				</div>
				<div class="row mt-1"  id="main-info" <?php if ($controller=='ql_feedback') {
					echo 'style="background-color: gray;"' ;
				} ?>>
					<a class="col-md-12 " href="?controller=ql_feedback">
						<h5>Quản lí comment/rate/feedback<h5>
					</a>
				</div>
				<div class="row mt-1" id="main-info" <?php if ($controller=='ql_ship') {
					echo 'style="background-color: gray;"' ;
				} ?>>
					<a class="col-md-12 " href="?controller=ql_ship">
						<h5>Quản li tiền ship<h5>
					</a>
				</div>
				<div class="row mt-1" id="main-info">
					<a class="col-md-12 " href="?controller=logout" >
						<h5>đăng xuất<h5>
					</a>
				</div>
			</div>