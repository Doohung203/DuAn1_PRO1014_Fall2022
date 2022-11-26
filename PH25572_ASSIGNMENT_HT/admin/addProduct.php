<?php
session_start();
require('../config/database.php');
if(!$_SESSION['username'] || !$_SESSION['admin']){
  header("location: /index.php");
}else{
if(isset($_POST['addProduct'])){
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $file = $_FILES['product_images'];
    $product_image = $file['name'];
    $time = time();
    if($product_name == '' || $price == '' || $price <= 0 || $quantity == '' || $quantity <= 0 || $description == '' || $file['size'] <= 0 || $file['size'] > 2000000){
    if($product_name == ''){
        $err_name = 'Vui lòng nhập tên sản phẩm !';
    }
    if($price == '' || $price <= 0){
        $err_price = 'Giá không hợp lệ';
    }
    if($quantity == '' || $quantity <= 0){
        $err_quantity = 'Số lượng không hợp lệ';
    }
    if($description == ''){
        $err_desc = 'Vui lòng điền mô tả';
    }
    if($file['size'] <= 0){
        $err_file = 'Vui lòng thêm ảnh';
    }
    if($file['size'] > 2000000){
        $err_file = 'Dung lượng ảnh phải nhỏ hơn 2MB';
    }   
    }else{
        $extension = pathinfo($product_image, PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        if($extension != 'jpg' && $extension!= 'png' && $extension != 'jpeg' && $extension != 'webm' ){
            $err_file = "file bạn nhập không đúng định dạng của ảnh";
        }else{
            $filename = 'KenSine_'.$time.'.'.$extension;
            move_uploaded_file($file['tmp_name'],'upload/'.$filename);
            //insert database
            $stmt = $conn->prepare("INSERT INTO `products`(`product_name`, `price`, `quantity`, `image`, `description`, `time`, `cate_id`) VALUES ('$product_name','$price','$quantity','$filename','$description','$time','$category_id')");
            $stmt->execute();
            $msg_success = "Thêm sản phẩm <b>$product_name</b> thành công !";
        }
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
                        <h3 class="card-title">Thêm sản phẩm</h3>
                    </div>


                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <?php if(isset($msg_success)): ?>
                            <div class="alert alert-success alert-dismissible">
                                <?=$msg_success;?>
                            </div>
                            <?php endif ?>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Iphone 13"
                                    value="<?php if(isset($_POST['product_name'])) echo $_POST['product_name'] ?>">
                                <?php if(isset($err_name)){
                                    echo "<span style='color:red'>$err_name</span>";
                                }?>
                            </div>
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="category" class="form-control">
                                    <?php foreach($categories as $category):?>
                                    <option value="<?=$category['cate_id'];?>"><?=$category['cate_name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="product_images">
                                    </div>
                                </div>
                                <?php if(isset($err_file)){
                                    echo "<span style='color:red'>$err_file</span>";
                                }?>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="number" class="form-control" name="price"
                                    value="<?php if(isset($_POST['price'])) echo $_POST['price'] ?>">
                                <?php if(isset($err_price)){
                                    echo "<span style='color:red'>$err_price</span>";
                                }?>
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input type="number" class="form-control" name="quantity"
                                    value="<?php if(isset($_POST['quantity'])) echo $_POST['quantity'] ?>">
                                <?php if(isset($err_quantity)){
                                    echo "<span style='color:red'>$err_quantity</span>";
                                }?>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea rows="" cols="5" class="form-control" placeholder="mô tả..."
                                    name="description"><?php if(isset($_POST['description'])) echo $_POST['description'] ?></textarea>
                                <?php if(isset($err_desc)){
                                    echo "<span style='color:red'>$err_desc</span>";
                                }?>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" name="addProduct" class="btn btn-danger">Thêm</button>
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
?>