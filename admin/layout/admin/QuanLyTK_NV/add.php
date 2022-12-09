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
<section class="Login">
    <!-- Header -->
    <div class="flex justify-center bg-gradient-to-r from-green-500 border">
      <div class="logo flex items-center max-w-7xl lg:max-w-[20%]">
        <img src="../../images/zyro-mouth.png" alt="" width="30%" class="max-w-7xl md:inlne-flex" />
        <h2 class="p-4 font-bold text-4xl md:text-center hover:text-white"><a href="../site/home.php">Health Clinic</a></h2>
      </div>
    </div>
     <!-- End-header -->
     <div class="mx-auto bg-gradient-to-r from-green-100">
     <div class="grid place-content-center border-2-sm ">
    <div class="grid place-content-center max-w-4xl mx-auto py-4">
    </button>

    <form action="" method="post" enctype="multipart/form-data" class="space-y-6">
        <div class="my-40 bg-[#2B4B62] rounded-lg font-['Roboto'] text-xl text-white w-[800px] h-[550px] pt-[10%] text-center">
                <div class="title font-bold uppercase text-4xl py-2 ">
                    <h2 class="py-4 text-center"> Thêm tài khoản</h2>
                </div>
                <div class="py-8">
                    <p>Điền thông tin tài khoản tại đây

                    </p>
                </div>
                <div class="content-center font-bold text-black">
                       
                        <div class="pb-2">
                            <input type="text" name="username" placeholder="Nhập tên đăng nhập" class="rounded-lg w-[70%] p-2 py-4 text-black">
                        </div>
                        <?php if (isset($errors['username'])) : ?>
                         <span style="color: red; font-size: 10px;"><?= $errors['username'] ?></span>
                        <?php endif ?>
                       
                       
                        <div class="password my-3">
                            <input type="password" name="password" placeholder="Nhập password" class="rounded-lg w-[70%] p-2 py-4 text-black">
                        </div>
                        <br>
                        <?php if (isset($errors['password'])) : ?>
                         <span style="color: red; font-size: 10px;"><?= $errors['password'] ?></span>
                         <?php endif ?>
                        <br>
                        <div class="space-x-4" >
                        <button class="bg-[#2B4B62] w-[20%] py-3 px-2  border rounded-lg hover:bg-white hover:text-black " href="../admin/layout/admin/showadmin.php">Quay Lại</button>
                        <button class="bg-[#2B4B62] w-[20%] py-3 px-2  border rounded-lg hover:bg-white hover:text-black " name="save">Save</button>
                        </div>
                       


                     
                      
                </div>
            </div>

        
        </form>
    </div>

</div>
    <!--Optional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>