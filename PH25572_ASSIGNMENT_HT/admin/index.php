<?php
session_start();
require('../config/database.php');
if(!$_SESSION['username'] || !$_SESSION['admin']){
  header("location: /index.php");
}else{
require('layout/header.php');
require('layout/sidebar.php');
//Lấy số lượng danh mục
$getCategories = $conn->prepare("SELECT * FROM `categories`");
$getCategories->execute();
$countCategories = $getCategories->rowCount();
//Lấy số lượng sản phẩm
$getProducts = $conn->prepare("SELECT * FROM `products`");
$getProducts->execute();
$countProducts = $getProducts->rowCount();
//Lấy số lượng user
$getUsers = $conn->prepare("SELECT * FROM `users`");
$getUsers->execute();
$countUsers = $getUsers->rowCount();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?=$countProducts;?></h3>
                            <p>Sản Phẩm</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?=$countCategories;?></h3>
                            <p>Danh mục</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?=$countUsers?></h3>
                            <p>Người dùng</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>

<?php
require('layout/footer.php');
}
?>