<?php
require_once "../../../dao/connect.php";

if (isset($_POST['save'])) {
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $chucvu = $_POST['chucvu'];

    $errors = [];

    if ($hoten == "") {
        $errors['hoten'] = "Nhập họ tên!";
    }
    if ($chucvu == "") {
        $errors['chucvu'] = "Chức vụ không được bỏ trống!";
    }
    if ($sdt == "") {
        $errors['sdt'] = "Số điện thoại không được bỏ trống!";
    }

    if (!$errors) {
        $sql = "INSERT INTO `doctor` (`hoten`,`sdt`, `chucvu`) 
        VALUES ('$hoten', '$sdt', '$chucvu')";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: ../quanLyHoSo.php");
        setcookie("add", "Thêm thành công", time() + 1);
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Page Title</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <a href="../quanLyHoSo.php" class="btn btn-primary">Quay lại</a>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="hoten" placeholder="Họ tên">
        <?php if (isset($errors['hoten'])) : ?>
            <span style="color: red; font-size: 10px;"><?= $errors['hoten']?></span>
        <?php endif ?>
        <br>
        <input type="text" name="sdt" placeholder="Số điện thoại">
        <?php if (isset($errors['sdt'])) : ?>
            <span style="color: red; font-size: 10px;"><?= $errors['sdt']?></span>
        <?php endif ?>
        <br>
        <input type="text" name="chucvu" placeholder="Chức vụ">
        <?php if (isset($errors['chucvu'])) : ?>
            <span style="color: red; font-size: 10px;"><?= $errors['chucvu']?></span>
        <?php endif ?>
        <br>
        <button name="save" class="btn btn-primary">Save</button>
    </form>

    <!--Optional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
