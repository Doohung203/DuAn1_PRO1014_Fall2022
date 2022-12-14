<?php
    require "../../../../dao/connect.php";
    if(isset($_POST['btn-submit']))  
    {
        $name = $_POST['name'];
        $infor = $_POST['information'];
        $err = [];
        if(isset($_FILES['img']))
        {
            $file = $_FILES['img'];
            $file_name = $file['name'];
            move_uploaded_file($file['tmp_name'],'img/'.$file_name);
        }
        
        if (!$err) {
            $sql = "UPDATE `doctor` SET `name`='$name',`img`='$file_name',`information`='$infor'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            header("location: ../showadmin.php");
            setcookie("update", "Update thành công", time() + 1);
            exit;
        }

    }

    $sql = "SELECT * FROM doctor";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $doctor = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section class="Login">
    <!-- Header -->
    <div class="flex justify-center bg-gradient-to-r from-green-500 border">
        <div class="logo flex items-center max-w-7xl lg:max-w-[20%]">
          <img
            src="../../images/zyro-mouth.png"
            alt=""
            width="30%"
            class="max-w-7xl md:inlne-flex"
          />
          <h2 class="p-4 font-bold text-4xl md:text-center hover:text-white"><a href="../site/home.php">Health Clinic</a></h2>
        </div>
    </div>
<!-- End-header -->
<!-- Main-login -->
    <div class="mx-auto bg-gradient-to-r from-green-100">
        <div class="grid place-content-center border-2-sm ">
            <div class="my-40 bg-[#2B4B62] rounded-lg font-['Roboto'] text-xl text-white w-[800px] h-[1000px] pt-[10%] text-center">
                <div class="title font-bold uppercase text-3xl py-8 pl-[75px] px-14">
                    <h2>Sửa thông tin</h2>
                </div>

                <div class="content-center font-bold text-black">
                    <form  method="POST" enctype="multipart/form-data" class="space-y-5">
                        <?php foreach ($doctor as $dt) :?>
                        <div>
                            <input name="name" type="text" placeholder="Nhập tên" class="rounded-lg w-[50%] p-2 py-4" value = "<?= $dt['name']?>">
                        </div>
                        <div class="password my-3">
                            <img class="pl-[200px]" src="img/<?= $dt['img']?>" alt="">
                            <input name="img" type="file" placeholder="Thêm ảnh"  class="rounded-lg w-[50%] p-2 py-4" value="">
                        </div>
                        <div>
                            <input type="text" name="information" class="rounded-lg w-[50%] p-2 py-4" value = "<?= $dt['information']?>" >
                        </div>
                        
                        <div class="button">
                          <button type="submit" name="btn-submit" class="bg-[#2B4B62] w-[20%] py-3 px-2  border rounded-lg text-white hover:bg-white hover:text-black">Update</button>
                        </div>
                        <?php endforeach?>
                      </form>
                </div>
            </div>
        </div>
    </div>
<!-- end-main-login -->
</div>
</body>
</html>