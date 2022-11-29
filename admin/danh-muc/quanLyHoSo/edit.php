<?php
require_once "../../../dao/connect.php";

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $chucvu = $_POST['chucvu'];

    $errors = [];
    if ($chucvu == "") {
        $errors['chucvu'] = "Chức vụ không được bỏ trống!";
    }

    if (!$errors) {
        // $sql = "INSERT INTO `user` (`hoten`, `name`, `password`, `sdt`, `diachi`) 
        // VALUES ('$hoten', '$name', '$password', '$sdt', '$diachi')";

        $sql = "UPDATE `bacsi` SET  chucvu='$chucvu' WHERE id=$id";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: ../quanLyHoSo.php");
        setcookie("update", "Sửa thành công", time() + 1);
        exit;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM bacsi WHERE id=$id";

$stmt = $conn->prepare($sql);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

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
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <input type="text" name="chucvu" placeholder="Chức vụ" value="<?= $user['chucvu'] ?>">
        <?php if (isset($errors['chucvu'])) : ?>
            <span style="color: red; font-size: 10px;"><?= $errors['chucvu'] ?></span>
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
