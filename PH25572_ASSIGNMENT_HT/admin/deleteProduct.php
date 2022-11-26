<?php
session_start();
require('../config/database.php');
if($_SESSION['username'] && $_SESSION['admin']){
    if(isset($_GET['id'])){
    $id_product = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM `products` WHERE `product_id`='$id_product'");
    $stmt->execute();
    $message = "Xóa thành công sản phẩm $id_product";
    header("location: showProduct.php?msg=$message");
    }
}else{
    header("location: /index.php");
}