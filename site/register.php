<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
          <h2 class="p-4 font-bold text-4xl md:text-center hover:text-white"><a href="home.php">Health Clinic</a></h2>
        </div>
    </div>
<!-- End-header -->
<!-- Main-register -->
    <div class="mx-auto bg-gradient-to-r from-green-100">
        <div class="grid place-content-center border-2-sm ">
            <div class="my-40 bg-[#2B4B62] rounded-lg font-['Roboto'] text-xl text-white w-[800px] h-[800px] pt-[10%] text-center">
                <div class="title font-bold uppercase text-4xl py-2 ">
                    <h2 class="py-4 text-center">Đăng ký tài khoản</h2>
                </div>
                <div class="py-8">
                    <p>Điền thông tin đăng kí tài khoản tại đây

                    </p>
                </div>
                <div class="content-center font-bold">
                    <form action="index.php" method="POST" class="space-y-8">
                        <div>
                            <input type="text" placeholder="Nhập tên đăng nhập" class="rounded-lg w-[70%] p-2 py-4">
                        </div>
                        <div class="password my-3">
                            <input type="password" placeholder="Nhập số điện thoại" class="rounded-lg w-[70%] p-2 py-4">
                        </div>
                        <div class="password my-3">
                            <input type="password" placeholder="Nhập email của bạn" class="rounded-lg w-[70%] p-2 py-4">
                        </div>
                        <div class="password my-3">
                            <input type="password" placeholder="Nhập password" class="rounded-lg w-[70%] p-2 py-4">
                        </div>
                       
                       
                        <div class="button">
                          <button type="submit" name="btn-dangky" class="bg-[#2B4B62] w-[20%] py-3 px-2  border rounded-lg hover:bg-white hover:text-black "> Đăng ký</button>
                        </div>
                        <div class=" pr-10 text-center" >
                          <a style="padding-left:80px" href="">Bạn đã có tài khoản? <a href="../admin/danh-muc/login.php" class="uppercase text-blue-400">Đăng nhập</a></a>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
<!-- end-main-login -->
</div>
</body>
</html>