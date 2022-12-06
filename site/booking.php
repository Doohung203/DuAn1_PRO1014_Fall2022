<?php
// session_start();
require "../dao/connect.php";
require_once "login.php";
if (isset($_POST['btn-submit'])) {
    $id_user = $_POST['id'];
    $hoten = $_POST['hoten'];
    $birthday = $_POST['birthday'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $time = $_POST['time'];
    $id_service =
        $service = $_POST['service'];
    $errors = [];
    if ($hoten == "") {
        $errors['hoten'] = "Nhập họ tên";
    }
    if ($phone == "") {
        $errors['phone'] = "Nhập số điện thoại";
    }
    if ($time == "") {
        $errors['time'] = "Vui lòng chọn thời gian khám";
    }
    if ($service == "") {
        $service["service"] = "Vui lòng chọn chuyên khoa";
    }

    if (!$errors) {

        $sql3 = "INSERT 'user' ('hoten', 'sex','birthday', 'username', 'sdt' ) VALUES ('$hoten' ,  '$sex', '$birthday','$email', '$phone')";
        $sql1 = "INSERT 'schedule' ('time') VALUES ('$time')";
        $sql2 = "INSERT 'service' ('name') VALUES ('$service')";

        $stmt = $conn->prepare($sql3);
        $stmt->execute();
        $stmt = $conn->prepare($sql1);
        $stmt->execute();
        $stmt = $conn->prepare($sql2);
        $stmt->execute();

        exit;
    }
}
// $sql =" SELECT user.id as id_user, user.hoten,user.sex,user.birthday,user.username,user.sdt,schedule.id as id_schedule,schedule.time,service.id as id_service ,service.name as sv FROM booking INNER JOIN user on booking.id_user = user.id INNER JOIN schedule on booking.id_schedule = schedule.id INNER JOIN service on booking.id_service = service.id";
// $id_user = $_GET['id'];
// $sql = "SELECT * FROM user where id= $id_user";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $user = $stmt->fetch(PDO::FETCH_ASSOC);

$sql4 = "SELECT * FROM schedule";
$stmt = $conn->prepare($sql4);
$stmt->execute();
$schedule = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql5 = "SELECT * FROM service";
$stmt = $conn->prepare($sql5);
$stmt->execute();
$service = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/8ddf476500.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../font-css/font-logo.css">
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
    <style>
        .logo1 {
            padding-left: 320px;
        }
    </style>
</head>

<body>
    <!--Main-header -->
    <section class="mx-auto">
        <div class="Header">
            <!-- Lcation - SignIn - SignUp -->
            <div class="flex justify-between items-center px-4 py-6 border-b-2 h-4">
                <div class="location">
                    <p> <i class="fa-regular fa-map"></i> Nơi ở hiện tại : Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                </div>
                <div class="home-doctument text-white font-bold">
                    <ul>
                        <li>
                            <a class="px-3 py-1 border rounded-md bg-green-400 hover:bg-white hover:border-green-400 hover:text-green-400" href="index.html">Đăng nhâp</a>
                            <a class="px-3 py-1 border rounded-md bg-green-400 hover:bg-white hover:border-green-400 hover:text-green-400" href="document.html">Đăng ký</a>
                        </li>
                    </ul>
                </div>
            </div>
<<<<<<< HEAD
        </div>
        <!-- PhoneNumber - Search -->
        <div class="banner-top flex justify-between items-center px-4">
            <div class="phone flex my-4 uppercase">
                <p> <i class="fa-sharp fa-solid fa-phone-volume"></i> Khoa cấp cứu : <a href="" class="text-red-500 font-bold">098775423</a></p>
            </div>
            <div class="search relative block">
                <i class="fas fa-search absolute inset-y-0 left-0 flex items-center pl-2 "></i>
                <input type="search" placeholder="Tìm kiếm" class="w-[70%] placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-[3px] pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1">
            </div>
=======
        </div> <!-- login-logout -->
                    <div class="home-doctument text-white font-bold">
                        <ul>
                            <li>
                                <div >
                                    <div class="dropdown inline-block relative">
                                        <button class="bg-green-400 text-white font-semibold py-2 px-8 rounded inline-flex items-center">
                                            <span class="mr-1"> <i class="fa-regular fa-user"></i></span>
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                            <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-3 px-4 block whitespace-no-wrap" href="login.php">Đăng nhập</a></li>
                                            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-3 px-4 block whitespace-no-wrap" href="register.php">Đăng ký</a></li>
                                            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-3 px-4 block whitespace-no-wrap" href="logout.php">Đăng xuất</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--  End-login-logout -->
    </div>
<!-- PhoneNumber - Search -->
    <div class="banner-top flex justify-between items-center px-4">
        <div class="phone flex my-4 uppercase">
            <p> <i class="fa-sharp fa-solid fa-phone-volume"></i> Khoa cấp cứu : <a href="" class="text-red-500 font-bold">098775423</a></p>
>>>>>>> ddcc907c76c59ec86727d06187d2b2e252e33ae2
        </div>
        <!-- Menu-top -->
        <div class="menu bg-green-500 rounded-md">
            <div class="menu-nav max-w-5xl mx-auto relative">
                <ul>
                    <li class="flex justify-between items-center py-3 font-bold text-white">
                        <a href="">Trang chủ</a>
                        <a href="">Bảng giá dịch vụ</a>
                        <a href="">Dịch vụ</a>
                        <img src="./image/logomouth.png" alt="" width="20%" class="absolute left-[400px] bottom-[-44px]">
                        <a href="">Phòng ban</a>
                        <a href="">Đội ngũ chuyên gia</a>
                        <a href="">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End-Header -->
    <section class=" mx-auto py-10 bg-green-300 my-10">
        <div class="booking max-w-3xl mx-auto bg-green-500 px-4 rounded-md">
            <div class="logo1">
                <img src="../admin/images/zyro-mouth.png" alt="" width="100">
            </div>
            <h2 class="text-2xl text-center uppercase text-white font-bold font-['TimeNewRoman']">Đặt lịch khám</h2>

            <div class=" py-10">
                <form action="" method="POST">
                    <?php if (isset($admin['id'])) : ?>
                        <input type="text" name="hoten" id="" placeholder="Họ tên bệnh nhân" class="w-full border rounded-md my-4 p-2" value="<?= $admin['hoten'] ?>">
                        <?php if (isset($errors['hoten'])) : ?>
                            <span style="color: red; font-size: 10px;"><?= $errors['hoten'] ?></span>
                        <?php endif ?>
                        <div class="flex justify-between space-x-4 w-full my-4">
                            <input datepicker type="text" name="birthday" id="" placeholder="Ngày sinh" class="border rounded-md md:w-[50%] w-full p-2">

                            <select name="sex" id="" class="border rounded-md md:w-[50%] w-full p-2">
                                <option value="0">Giới Tính</option>
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>
                        </div>
                        <input type="text" name="email" id="" placeholder="Email" class="border rounded-md w-full my-4 p-2">
                        <input value="<?= $admin['sdt']?>" type="text" name="sdt" id="" placeholder="Điện thoại" class="border rounded-md w-full my-4 p-2">
                    <?php endif ?>

                    <span class="text-white text-lg">Thời gian hẹn: </span>
                    <select name="time" id="" class=" w-full border rounded-md text-center my-3 px-4 p-2">
                        <option value="0">SÁNG-CHIỀU</option>
                        <?php foreach ($schedule as  $sch) : ?>
                            <option value="<?= $sch['id'] ?>"><?= $sch['time'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <?php if (isset($errors['time'])) : ?>
                        <span style="color: red; font-size: 10px;"><?= $errors['time'] ?></span>
                    <?php endif ?>
                    <div>

                        <select class="w-full border rounded-md text-center my-3 px-4 p-2" name="service" id="">
                            <option value="0">-Chọn Dịch Vụ Khám-</option>
                            <?php foreach ($service as  $sv) : ?>
                                <option value="<?= $sv['id'] ?>">
                                    <?= $sv['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>

                        <?php if (isset($errors['service'])) : ?>
                            <span style="color: red; font-size: 10px;"><?= $errors['service'] ?></span>
                        <?php endif ?>
                    </div>

                    <div>
                        <textarea class="w-full h-20 border rounded-md my-3 px-4 p-2 " id="" name="" placeholder="Vấn đề của bạn"></textarea>
                    </div>
                    <div class="text-center mt-8 ">
                        <a href="" name='btn-submit' class="border rounded-md text-black bg-white hover:bg-white hover:text-green-600 hover:border-red-700 font-bold px-3 py-2">Đặt lịch</a>

                    </div>
                </form>
            </div>

        </div>
    </section>
    <!-- Footer -->
    <section class="footer bg-[#eff7f9] my-6 ">
        <div class="grid grid-cols-5 gap-8 text-center p-4">
            <div class="columns col-span-2">
                <h2 class="font-bold">BỆNH VIỆN NHA KHOA HEALTH CLINIC</h2>
                <p>Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                <p>(024) 3826.9722 - 3928.5172 - 3826.9275</p>
                <p>(024) 3826.9726 - 3826.9725</p>
                <p>Số Điện Thoại Tư Vấn: 0867.732939</p>
            </div>
            <div class="columns">
                <p>Chuyên Khoa</p>
                <p>Giới Thiệu</p>
                <p>Phòng Ban</p>
                <p>Liên Hệ</p>
            </div>
            <div class="columns">
                <p>Tài Liệu</p>
                <p>Đặt Lịch Khám</p>
                <p>Hướng dẫn khách hàng</p>
            </div>
            <div class="columns">
                <p>Video</p>
                <p>Dành Cho Nhân Viên</p>
                <p>Đội Ngũ Chuyên Gia</p>
                <p>Tin Tức</p>
            </div>
        </div>
        <div class="copyright bg-green-500 ">
            <div class="max-w-7xl mx-auto p-4 flex justify-between items-center">
                <div class="copy-right ">
                    <p>Copyright © RANGHAMMAT.ORG.VN. All rights reserved. Thiết kế website bởi ADC.</p>
                </div>
                <div class="internet flex justify-between space-x-4">
                    <a href=""><img src="./svg/facebook.svg" alt=""></a>
                    <a href=""><img src="./svg/instagram.svg" alt=""></a>
                    <a href=""><img src="./svg/twitter.svg" alt=""></a>
                    <a href=""><img src="./svg/youtube.svg" alt=""></a>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
    <!-- End-Footer -->
=======
>>>>>>> ddcc907c76c59ec86727d06187d2b2e252e33ae2
</body>

</html>