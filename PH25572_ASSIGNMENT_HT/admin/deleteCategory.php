<?php
session_start();
require('../config/database.php');
if($_SESSION['username'] && $_SESSION['admin']){
    if(isset($_GET['id'])){
    $cate_id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM `categories` WHERE `cate_id`='$cate_id'");
    $stmt->execute();
    $message = "Xóa thành công sản phẩm $id_product";
    header("location: category.php?msg=$message");
    }
}else{
    header("location: /index.php");
}