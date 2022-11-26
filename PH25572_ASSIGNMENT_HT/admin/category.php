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
                        <h3 class="card-title">Thêm danh mục</h3>
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
                                <input type="text" class="form-control" name="category" placeholder="Máy tính">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" name="addCategory" class="btn btn-danger">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách danh mục</h3>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($categories as $value):?>
                            <tr>
                                <td><?=$value['cate_id'];?></td>
                                <td><?=$value['cate_name'];?></td>
                                <td>
                                    <a onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger"
                                        href="deleteCategory.php?id=<?=$value['cate_id'];?>">Xóa</a>
                                    <a class="btn btn-primary"
                                        href="editCategory.php?id=<?=$value['cate_id'];?>">Sửa</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

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