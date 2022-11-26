<?php
session_start();
require('../config/database.php');
if(!$_SESSION['username'] || !$_SESSION['admin']){
  header("location: /index.php");
}else{
    $id_category = $_GET['id'];
    $checkCategory = $conn->prepare("SELECT * FROM `categories` WHERE `cate_id`='$id_category'");
    $checkCategory->execute();
    $category = $checkCategory->fetch(PDO::FETCH_ASSOC);
    if(!$category){
        $message = "Danh mục có mã $id_product không tồn tại";
        header("location: category.php?msg=$message");
    }else{
if(isset($_POST['editCategory'])){
    $category_name = $_POST['category'];
    if($category_name == ''){
        $err = 'Vui lòng nhập tên danh mục';
    }else{
        $insertCategory = $conn->prepare("UPDATE `categories` SET `cate_name`='$category_name' WHERE `cate_id`='$id_category'");
        $insertCategory->execute();
        $success = "Sửa danh mục <b>$category_name</b> thành công !";
    }
}
require('layout/header.php');
require('layout/sidebar.php');
//Lấy danh sách danh mục
$getCategories = $conn->prepare("SELECT * FROM `categories`");
$getCategories->execute();
$categories = $getCategories->fetchALL(PDO::FETCH_ASSOC);
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sửa: <?=$category['cate_name'];?></h3>
                    </div>


                    <form action="" method="POST">
                        <div class="card-body">
                            <?php if(isset($err)): ?>
                            <div class="alert alert-danger alert-dismissible">
                                <?=$err;?>
                            </div>
                            <?php endif ?>
                            <?php if(isset($success)): ?>
                            <div class="alert alert-success alert-dismissible">
                                <?=$success;?>
                            </div>
                            <?php endif ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục:</label>
                                <input type="text" class="form-control" name="category"
                                    value="<?=$category['cate_name'];?>">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" name="editCategory" class="btn btn-danger">Sửa</button>
                        </div>
                    </form>
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
}
?>