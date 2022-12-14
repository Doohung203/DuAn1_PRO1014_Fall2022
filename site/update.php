<?php
session_start();
require_once "../dao/connect.php";

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $errors = [];
    if ($name == ""){
        $errors['name'] = "Nhập họ tên";
    }
    if ($password == "") {
        $errors['password'] = "Password không được bỏ trống!";
    }

    if (!$errors) {
        // $sql = "INSERT INTO `user` (`hoten`, `name`, `password`, `sdt`, `diachi`) 
        // VALUES ('$hoten', '$name', '$password', '$sdt', '$diachi')";

        $sql = "UPDATE `user` SET hoten='$name', password='$password', sdt='$phone', diachi='$address' WHERE id=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: login.php");
        setcookie("update", "Vui lòng đăng nhập lại", time() + 1);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chỉnh sửa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <section class="Login">
    <!-- Header -->
    <div class="flex justify-center bg-gradient-to-r from-green-500 border">
      <div class="logo flex items-center max-w-7xl lg:max-w-[20%]">
        <img src="../../images/zyro-mouth.png" alt="" width="30%" class="max-w-7xl md:inlne-flex" />
        <h2 class="p-4 font-bold text-4xl md:text-center hover:text-white"><a href="../site/home.php">Health Clinic</a></h2>
      </div>
    </div>
    <!-- End-header -->
    <!-- Main-login -->
    <div class="mx-auto bg-gradient-to-r from-green-100">
      <div class="grid place-content-center border-2-sm ">
        <div class="my-40 bg-[#2B4B62] rounded-lg font-['Roboto'] text-xl text-white w-[800px] h-[550px] pt-[10%] text-center">
          <div class="title font-bold uppercase text-3xl py-8 pl-[75px] px-14">
            <h2>Chỉnh sửa thông tin</h2>
          </div>
          <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $_SESSION['user']['id'] ?>">

        <input class="text-black" type="text" name="name" placeholder="Họ tên" value="<?= $_SESSION['user']['hoten'] ?>">
        <br>

        <input class="text-black" type="text" name="password" placeholder="Password" value="<?= $_SESSION['user']['password'] ?>">
        <br>

        <input class="text-black" type="text" name="phone" placeholder="Số điện thoại" value="<?= $_SESSION['user']['sdt'] ?>">
        <br>
        <input class="text-black" type="text" name="address" placeholder="Địa chỉ" value="<?=  $_SESSION['user']['diachi'] ?>">
        <br>
        <button name="save" class="btn btn-primary">Save</button>
        <a class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="../site/home.php">Quay Lại</a>

    </form>
        </div>
      </div>
    </div>
    <!-- end-main-login -->
