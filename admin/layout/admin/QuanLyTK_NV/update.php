<?php
require_once "../../../../dao/connect.php";

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];

    $errors = [];

    if ($password == "") {
        $errors['password'] = "Nhập pass đê!";
    }

    if (!$errors) {
        $sql = "UPDATE `user` SET password='$password' where role = '2'";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: ../showadmin.php");
        setcookie("update", "Sửa thành công");
        exit;
    }
}

$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id=$id and role = '2'";

$stmt = $conn->prepare($sql);
$stmt->execute();

$admin = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thêm tài khoản nhân viên</title>
    <!--Bootstrap CSS-->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="flex justify-center bg-gradient-to-r from-green-500 border">
      <div class="logo flex items-center max-w-7xl lg:max-w-[20%]">
        <img src="../../images/zyro-mouth.png" alt="" width="30%" class="max-w-7xl md:inlne-flex" />
        <h2 class="p-4 font-bold text-4xl md:text-center hover:text-white"><a href="../site/home.php">Health Clinic</a></h2>
      </div>
    </div>
    <div class="mx-auto bg-gradient-to-r from-green-100">
        <div class="grid place-content-center border-2-sm ">
            <div class="my-40 bg-[#2B4B62] rounded-lg font-['Roboto'] text-xl text-white w-[800px] h-[600px] pt-[10%] text-center">
                <div class="title font-bold uppercase text-3xl py-8 pl-[75px] px-14">
                    <h2>Sửa thông tin</h2>
                </div>

                <div class="content-center font-bold text-black">
                    <form  method="POST" enctype="multipart/form-data" class="">
                        <input type="hidden" name="id" value="<?= $admin['id'] ?>">
                        <div>
                            <input type="text" name="password" class="rounded-lg w-[50%] p-2 py-4" placeholder="Password" value="<?= $admin['password'] ?>" >
                            <?php if (isset($errors['password'])) : ?>
                                <span style="color: red; font-size: 10px;"><?= $errors['password'] ?></span>
                            <?php endif ?>
                        </div>
                        <div class="button space-x-5 ">
                            <a href="../../../layout/admin/showadmin.php" class="bg-[#2B4B62] w-[20%] py-[19px] px-2 my-4 border rounded-lg text-white  hover:text-black">Quay lại</a>
                            <button type="submit" name="save" class="bg-[#2B4B62] w-[20%] py-3 px-2 my-4 border rounded-lg text-white  hover:text-black">Lưu</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <!--Optional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>