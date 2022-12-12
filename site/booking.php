<?php

require "../dao/connect.php";
include "../global.php";
require "../dao/pdo.php";


// $sql =" SELECT user.id as id_user, user.hoten,user.sex,user.birthday,user.username,user.sdt,schedule.id as id_schedule,schedule.time,service.id as id_service ,service.name as sv FROM booking INNER JOIN user on booking.id_user = user.id INNER JOIN schedule on booking.id_schedule = schedule.id INNER JOIN service on booking.id_service = service.id";
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$sql4 = "SELECT * FROM schedule ";
$stmt = $conn->prepare($sql4);
$stmt->execute();
$schedule = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql5 = "SELECT * FROM service ";
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
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../font-css/font-logo.css">
        <style>
            .dropdown:hover .dropdown-menu {
                display: block;
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
                    <?php if(empty($_SESSION['user'])){?>
                    <div class="home-doctument text-white font-bold">
                    <ul>
                        <li>
                            <a class="px-3 py-1 border rounded-md bg-green-400 hover:bg-white hover:border-green-400 hover:text-green-400" href="login.php">Đăng nhâp</a>
                            <a class="px-3 py-1 border rounded-md bg-green-400 hover:bg-white hover:border-green-400 hover:text-green-400" href="register.php">Đăng ký</a>
                        </li>
                    </ul>
                    </div>
                    <?php } else {?>
                    <div>
                        <div class="home-doctument text-white font-bold">
                        <ul>
                            <li>
                                <a class="px-3 py-1 border rounded-md bg-green-400 text-black-400" href=""><?= $_SESSION['user']['username']?></a>
                                <a class="px-3 py-1 border rounded-md bg-green-400 hover:bg-white hover:border-green-400 hover:text-green-400" href="logout.php">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <?php }?>
                </div>
            </div>
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
        </div> 
    <section class=" mx-auto py-10 bg-green-300 my-10">
        <div class="booking max-w-3xl mx-auto bg-green-500 px-4 rounded-md">
            <div class="logo1">
                <img src="../admin/images/zyro-mouth.png" alt="" width="100">
            </div>
            <h2 class="text-2xl text-center uppercase text-white font-bold font-['TimeNewRoman']">Đặt lịch khám</h2>

            <div class=" py-10">
                <form action="index.php?act=btn-submit" method="POST">     
                    <input type="hidden" name="id_user" id=""  class="w-full border rounded-md my-4 p-2" value="<?= $_SESSION['user']['id']?>">               
                    <input type="text" name="name" id="" placeholder="Họ tên bệnh nhân" class="w-full border rounded-md my-4 p-2" value="<?= $_SESSION['user']['hoten']?>">
                    <input  type="text" name="phone" id="" placeholder="Điện thoại" class="border rounded-md w-full my-4 p-2" value="<?= $_SESSION['user']['sdt']?>">
                    <input  type="text" name="address" id="" placeholder="địa chỉ" class="border rounded-md w-full my-4 p-2" value="<?= $_SESSION['user']['diachi']?>">
                    <span class="text-white text-lg">Thời gian hẹn: </span>
                    
                    <select name="time" id="" class=" w-full border rounded-md text-center my-3 px-4 p-2">
                        <option value="0">SÁNG-CHIỀU</option>
                        <?php foreach ($schedule as  $sch) : ?>  
                            <option name="time" value=""><?= $sch['time'] ?></option>
                        <?php endforeach ?>    
                    </select>
                    
                    <?php if (isset($errors['time'])) : ?>
                        <span style="color: red; font-size: 10px;"><?= $errors['time'] ?></span>
                    <?php endif ?>
                    <div>

                        <select class="w-full border rounded-md text-center my-3 px-4 p-2" name="service" id="">
                            <option value="0">-Chọn Dịch Vụ Khám-</option>
                            <?php foreach ($service as  $sv) : ?>
                
                                <option   name="service" value=" ">
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
                        <a href="" name='submit-booking' class="border rounded-md text-black bg-white hover:bg-white hover:text-green-600 hover:border-red-700 font-bold px-3 py-2">Đặt lịch</a>

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
    <!-- End-Footer -->
</body>

</html>