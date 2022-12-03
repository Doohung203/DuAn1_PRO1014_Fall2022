<?php
require_once "../dao/connect.php";

$sql = "SELECT * FROM doctor";

$stmt = $conn->prepare($sql);
$stmt->execute();

$doctor = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="container mx-auto">
        <!--Main-header -->
        <div class="contianer mx-auto">
            <div class="Header">
                <!-- location -->
                <div class="flex justify-between items-center">
                    <div class="location">
                        <p>Nơi ở hiện tại : Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                    </div>
                    <div class="home-doctument">
                        <ul>
                            <li>
                                <a class="px-2" href="index.html">Trang chủ</a>
                                <a class="px-2" href="document.html">Tài liệu văn bản</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- banner-top -->
                <div class="banner-top flex justify-between items-center">
                    <div class="phone flex my-4">
                        <img src="./svg/phone.svg" alt="" class="px-2">
                        <p>KHÁM CẤP CỨU 24/7 : <a href="" class="text-red-500 font-bold">098775423</a></p>
                    </div>
                    <div class="search">
                        <p class="border-b-2 ">Tìm kiếm</p>
                    </div>
                </div>
                <!-- Menu-top -->
                <div class="menu bg-green-500 rounded-md">
                    <div class="menu-nav max-w-5xl mx-auto relative ">
                        <ul>
                            <li class="flex justify-between items-center font-bold text-white">
                                <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500  hover:rounded-md" href="home.php">Trang chủ</a>
                                <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md" href="priceListService.php">Bảng giá dịch vụ</a>
                                <a style="font-family: Inter-font;" class="py-4 px-2 text-4xl uppercase hover:bg-sky-100 hover:text-green-500" href="home.php">Health Clinic</a>
                                <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md" href="dentist.php">Đội ngũ chuyên gia</a>
                                <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md" href="contact.php">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            <!-- End-Header -->
=======
            <div class="home-doctument">
                <ul>
                    <li>
                        <a class="px-2" href="index.html">Trang chủ</a>
                        <a class="px-2" href="document.html">Tài liệu văn bản</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- banner-top -->
        <div class="banner-top flex justify-between items-center">
            <div class="phone flex my-4">
                <img src="./svg/phone.svg" alt="" class="px-2">
                <p>KHÁM CẤP CỨU 24/7 : <a href="" class="text-red-500 font-bold">098775423</a></p>
            </div>
            <div class="search">
                <p class="border-b-2 ">Tìm kiếm</p>
            </div>
        </div>
        <!-- Menu-top -->
        <div class="menu bg-green-500 rounded-md">
            <div class="menu-nav max-w-5xl mx-auto relative ">
                <ul>
                    <li class="flex justify-between items-center font-bold text-white">
                        <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500  hover:rounded-md" href="home.php">Trang chủ</a>
                        <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md" href="priceListService.php">Bảng giá dịch vụ</a>
                        <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md" href="">Đăng ký dịch vụ</a>
                        <a style="font-family: Inter-font;" class="py-4 px-2 text-4xl uppercase hover:bg-sky-100 hover:text-green-500" href="home.php">Health Clinic</a>
                        <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md" href="dentist.php">Đội ngũ chuyên gia</a>
                        <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md" href="contact.php">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End-Header -->
>>>>>>> 3e9e35ddebd82f34dce9089ec6315ae10750c5f5

            <!--Main-content  -->
            <div class="container max-w-7xl mx-auto my-4">
                <h2 class="font-bold text-2xl border-b-2 uppercase">Đội ngũ chuyên gia</h2>
                <div class="grid grid-cols-4 gap-8 my-4 text-center">

                    <?php foreach ($doctor as $bs) : ?>
                        <a href="detailDentist.php?id=<?= $bs['id']?>" class="dentist">
                            <div href=""><img src="https://ranghammat.org.vn/Upload/Avartar/anh-bs1.jpg" alt=""></div>
                            <div class="text-green-500 font-bold text-[14px] " href=""><?= $bs['hoten'] ?></div>
                            <p class=""><?= $bs['chucvu'] ?></p>
                        </a>
                    <?php endforeach ?>

                    <!-- <div class="dentist">
                        <a href="detail.html"><img src="https://ranghammat.org.vn/Upload/Avartar/anh-bs1.jpg" alt=""></a>
                        <a class="text-green-500 font-bold text-[14px] " href="detail.html">PGS.TS.TRẦN HỮU HƯNG</a>
                        <p class="">Giám đốc Bệnh viện</p>
                    </div>
                    <div class="dentist">
                        <a href="detail.html"><img src="https://ranghammat.org.vn/Upload/Avartar/anh-bs2.jpg" alt=""></a>
                        <a class="text-green-500 font-bold text-[14px] " href="detail.html">TS. PHẠM THANH HÀ</a>
                        <p class="">Phó Giám đốc Bệnh viện</p>
                    </div>
                    <div class="dentist">
                        <a href="detail.html"><img src="https://ranghammat.org.vn/Upload/Avartar/anh-bs3.jpg" alt=""></a>
                        <a class="text-green-500 font-bold text-[14px] " href="detail.html">PGS.TS. NGUYỄN QUANG BÌNH</a>
                        <p class="">Phó Giám đốc Bệnh viện</p>
                    </div>
                    <div class="dentist">
                        <a href="detail.html"><img src="https://ranghammat.org.vn/Upload/Avartar/ts-nguyen-thi-van-anh.jpg" alt=""></a>
                        <a class="text-green-500 font-bold text-[14px] " href="detail.html">TS. NGUYỄN THỊ VÂN ANH</a>
                        <p class="">Trưởng khoa Răng Trẻ em</p>
                    </div> -->
                </div>
            </div>
            <!-- End-Main-content  -->

            <!-- Footer -->
            <div class="footer bg-[#eff7f9] my-6 ">
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
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end-Footer -->
    </section>
</body>

</html>