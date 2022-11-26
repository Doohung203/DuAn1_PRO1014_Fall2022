<?php session_start();
if (!isset($_SESSION['admin'])) {
	header("Location:../index.php");
 
}
include('dao/dao.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
	<link href="../../public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../../public/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="../../public/js/jquerye.js"></script>
	<script src="../../public/js/bootstrap.js"></script>

	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
	<script src="../../public/js/summernote.js"></script>
	<style>
		#ql li {
			height: 50px;
			border: 1px solid #cdcdcd;
			line-height: 50px;
			padding-left: 50px;
		}

		#ql li:hover {
			background-color: #cdcdcd;
		}

		#addPro input {
			width: 100%;
			border-radius: 5px;
			border: 1px solid #cdcdcd;
			height: 30px;
		}

		#addPro select {
			height: 30px;
			background-color: #cdcdcd;
			width: 100%;
		}

		#register input,
		#login input,
		#updateuser input,
		#slide input {
			width: 100%;
			height: 35px;
			border: 1px solid #cdcdcd;
			border-radius: 5px;
		}

		.profile {
			position: relative;
			overflow: hidden;
		}

		.profile:hover {
			overflow: inherit;
		}

		.profiles {
			position: absolute;
			width: 150px;
			top: 20px;
			display: block;
			background-color: #fff;

		}

		.profiles li a {
			color: white;
		}

		#detailsC {
			width: 150px;
			overflow: inherit;
		}
	</style>
</head>

<body>
	<div class="header">
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<!-- <a href="../index.php"><img src="../public/images" alt=" " /></a> -->
						<?php
						foreach (selectDb("SELECT * FROM info LIMIT 1") as $row) { ?>
							<a href="../index.php"><img src="../public/images/logo.png" alt=" " width="10%"/></a>
						<?php
						}

						?>
					</div>
					<form action="" method="POST">
						<div class="search">
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
							<input type="submit" value="Tìm kiếm">

						</div>
					</form>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">
					<!-- <div class="account"><a href="login.php"><span> </span>Tài khoản của bạn</a></div> -->

					<ul class="login">
						<?php
						if (isset($_SESSION['admin'])) { ?>
							<li class="profile"><a href="#"><?= $_SESSION['admin'] ?></a>
								<ul class="profiles">
									<li><a href="../profile.php?email=<?= $_SESSION['admin'] ?>">Thông tin</a></li> <br>
									<li><a href="../logout.php" onclick="return alert('Bạn chắc chắn muốn đăng xuất chứ ?')">Đăng xuất</a></li>
								</ul>

							</li>
						<?php

						} elseif (isset($_SESSION['user'])) { ?>
							<li class="profile"><a href="#"><?= $_SESSION['user'] ?></a>
								<ul class="profiles">
									<li><a href="profile.php?email=<?= $_SESSION['user'] ?>">Thông tin</a></li> <br>
									<li><a href="logout.php" onclick="return alert('Bạn chắc chắn muốn đăng xuấ chứ ?')">Đăng xuất</a></li>
								</ul>
							</li>
						<?php
						} else { ?>
							<li><a href="register.php">Đăng ký</a></li> |
							<li><a href="login.php">Đăng nhập</a></li>
						<?php

						}
						?>

						<li><a href="../contact.php">Liên hệ</a></li>
					</ul>
					<div class="cart" style="float:right"><a href="#"><span> </span>Giỏ hàng</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="container" style="height:800px">

		<div class="colasds-xs-3 col-sm-3 col-md-3 col-lg-3">
			<h3 style="text-align:center">Trang quản trị</h3>
			<ul id="ql">
				<li><a href="loaihang/category.php">Quản trị danh mục</a></li>
				<li><a href="hanghoa/product.php">Quản trị sản phẩm</a></li>
				<li><a href="khachhang/user.php">Quản trị tài khoản</a></li>
				<li><a href="binhluan/comment.php">Quản trị bình luận</a></li>
				<li><a href="slide/slideshow.php">Quản trị slideshow</a></li>
			</ul>
		</div>