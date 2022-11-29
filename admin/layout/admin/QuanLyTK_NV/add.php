<?php
require_once "../../../../dao/connect.php";

if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $errors = [];

    if ($username == "") {
        $errors['username'] = "Tên đăng nhập không được bỏ trống!";
    }
    if ($password == "") {
        $errors['password'] = "Nhập pass đê!";
    }

    if (!$errors) {
        $sql = "INSERT INTO `admin` (`username`, `password`) VALUES ('$username', '$password')";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: ../showadmin.php");
        setcookie("add", "Thêm thành công", time()+1);
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
    <title>Thêm tk nhân viên</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<div class="grid place-content-center max-w-4xl mx-auto py-4">
    <a class="border " href="../../../layout/admin/showadmin.php" >Quay lại</a>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Username">

        <?php if (isset($errors['username'])) : ?>
            <span style="color: red; font-size: 10px;"><?= $errors['username'] ?></span>
        <?php endif ?>

        <br>

        <input type="text" name="password" placeholder="Password">

        <?php if (isset($errors['password'])) : ?>
            <span style="color: red; font-size: 10px;"><?= $errors['password'] ?></span>
        <?php endif ?>

        <br>
        <button class="btn btn-primary" name="save">Save</button>
    </form>

</div>
    <!--Optional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>