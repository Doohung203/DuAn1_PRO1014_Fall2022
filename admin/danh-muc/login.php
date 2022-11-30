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
            <div class="my-40 bg-[#2B4B62] rounded-lg font-['Roboto'] text-xl text-white w-[800px] h-[550px] pt-[10%] text-center">
                <div class="title font-bold uppercase text-3xl py-8 pl-[75px] px-14">
                    <h2>Bạn cần đăng nhập</h2>
                </div>
                <div class="content-center font-bold text-black">
                    <form action="login.php" method="POST" class="space-y-8">
                        <div>
                            <input type="text" placeholder="Enter username..." class="rounded-lg w-[50%] p-2 py-4">
                        </div>
                        <div class="password my-3">
                            
                            <input type="password" placeholder="Enter password..." class="rounded-lg w-[50%] p-2 py-4">
                        </div>
                        <div class="log-in grid grid-cols-2 px-10">
                          <div class="save-password">
                            <input type="checkbox" ><span style="padding-left:8px">Lưu mật khẩu</span></input>
                          </div>
                          <div>
                            <a>Bạn quên mật khẩu ?</a>
                          </div>
                        </div>
                        <div class="button">
                          <button type="submit" name="btn-dangnhap" class="bg-[#2B4B62] hover:bg-white hover:text-black w-[20%] py-3 px-2  border rounded-lg"> Đăng nhập</button>
                        </div>
                        <div class=" pr-10 text-center text-white">
                          <a style="padding-left:80px" href="">Chưa có tài khoản? <a href="../../site/register.php" class="uppercase text-blue-400">Đăng ký</a></a>
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