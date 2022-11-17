<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/8ddf476500.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="admin mx-auto bg-green-500 items-center flex ">
        <img src="./images/zyro-mouth.png" alt="" width="10%">
        <h2 class="p-4 font-bold text-2xl font-">Health Clinic</h2>
        <div id="menu relative ">
            <a href="javascript:void(0);" class="icon" onclick="myFuntion()"><i class="fa fa-bars"></i></a>
            <a class=" md:hidden" href="">Quản lý tài khoản nhân sự</a>
            <a class=" md:hidden" href="">Quản lý bệnh nhân</a>
            <a class=" md:hidden" href="">Quản lý hồ sơ</a>
            <a class=" md:hidden" href="">Quản lý bình luận</a>
            <a class=" md:hidden" href="">Quản lý booking</a>
            <a class=" md:hidden" href="">Quản lý bình luận</a>
            <a class=" md:hidden" href="">Quản lý lịch trình</a>
            <a class=" md:hidden" href="">Quản lý kết luận</a>
        </div>
    </div>
</body>
    <script>
        function myFuntion(){
            let x = document.getElementById("menu")
            if(x.style.display === "block"){
                x.style.display = "none";
            }else{
                x.style.display = "block";
            }
        }
    </script>
</html>