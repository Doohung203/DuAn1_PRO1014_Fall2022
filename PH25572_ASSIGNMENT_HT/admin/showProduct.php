<?php
session_start();
require('../config/database.php');
if(!$_SESSION['username'] || !$_SESSION['admin']){
  header("location: /index.php");
}else{
if(isset($_POST['addCategory'])){
    $category = $_POST['category'];
    if($category == ''){
        $err = 'Vui lòng nhập tên danh mục';
    }else{
        $insertCategory = $conn->prepare("INSERT INTO `categories`(`cate_name`) VALUES ('$category')");
        $insertCategory->execute();
        $success = "Thêm danh mục <b>$category</b> thành công !";
    }
}
require('layout/header.php');
require('layout/sidebar.php');
//Lấy danh sách danh mục
$getProducts = $conn->prepare("SELECT * FROM `products`");
$getProducts->execute();
$productList = $getProducts->fetchALL(PDO::FETCH_ASSOC);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách sản phẩm</h3>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_GET['msg'])): ?>
                        <div class="alert alert-success alert-dismissible">
                            <?=$_GET['msg'];?>
                        </div>
                        <?php endif ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($productList as $value):?>
                                <tr>
                                    <td><?=$value['product_id'];?></td>
                                    <td><?=$value['product_name'];?></td>
                                    <td><?=number_format($value['price']);?> đ</td>
                                    <td><?=number_format($value['quantity']);?></td>
                                    <td><img src="upload/<?=$value['image'];?>" alt="" height="100px" width="100px">
                                    </td>
                                    <td><textarea class="form-control" id="" cols="30"
                                            rows="4"><?=$value['description'];?></textarea></td>
                                    <td>
                                        <a onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger"
                                            href="deleteProduct.php?id=<?=$value['product_id'];?>">Xóa</a>
                                        <a class="btn btn-primary"
                                            href="editProduct.php?id=<?=$value['product_id'];?>">Sửa</a>

                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>


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