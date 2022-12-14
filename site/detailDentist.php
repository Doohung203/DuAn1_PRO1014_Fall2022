<?php
require_once "../dao/connect.php";
// require_once "dentist.php";
$sql = "SELECT * FROM doctor ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$doctor = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <section class="container mx-auto">
        <!--Main-header -->
        <div class="mx-auto">
            <div class="Header">
                <!-- Lcation - SignIn - SignUp -->
                <div class="flex justify-between items-center px-4 py-6 border-b-2 h-4">
                    <div class="location">
                        <p> <i class="fa-regular fa-map"></i> Nơi ở hiện tại : Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                    </div>
                    <div class="home-document text-white font-bold">
                        <ul>
                            <li>
                               <!-- login-logout -->
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
                                <!--  End-login-logout -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- PhoneNumber - Search -->
            <div class="banner-top flex justify-between items-center px-4">
                <div class="phone flex my-4 uppercase">
                    <p> <i class="fa-sharp fa-solid fa-phone-volume"></i> Khoa cấp cứu : <a href="" class="text-red-500 font-bold">098775423</a></p>
                </div>
            </div>
            <!-- Menu-top -->
            <div class="menu bg-green-500 rounded-md">
                <div class="menu-nav max-w-5xl mx-auto relative">
                    <ul>
                        <li class="flex justify-between items-center py-3 font-bold text-white">
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
        <!-- End-Header -->


        <!--Main-detail  -->
        <div class="Detail">
            <div class="container max-w-7xl mx-auto my-4">
                <h2 class="font-bold text-2xl border-b-2 uppercase">Thông tin bác sĩ</h2>
                <div class="grid grid-cols-3 gap-8 my-4">
                    <div class="image-detail ">
                            <img src="../admin/layout/admin/quanLyDoctor/img/<?= $doctor['img']?>" alt="" width="">            
                        <div class="booking text-center text-green-500 font-bold border-2 rounded-lg p-4 my-4  hover:bg-green-500 hover:text-white w-[88%]">
                            <a href="">Đặt lịch khám</a>
                        </div>
                    </div>
                    <div class="infomation-detail col-span-2">
                        <div class="name border-b-2 py-4">
                            <?php if (isset($doctor['id'])) : ?>
                                <p class="font-bold text-green-800 text-2xl"><?= $doctor['name'] ?></p>
                                <span><?= $doctor['information'] ?></span>
                                <br>
                            <?php endif ?>
                        </div>
                        <div class="position border-b-2 my-4 leading-8 text-[14px]">
                            <h2 class="font-bold text-[20px]">Chức Vụ</h2>
                            <p>Giám đốc Bệnh viện, kiêm Phụ trách Phòng Kế hoạch tổng hợp</p>
                            <p>Phó trưởng Bộ môn Nha cơ sở, Viện Đào tạo RHM, Đại học Y Hà Nội</p>
                            <p>Giảng viên thỉnh giảng Khoa RHM, Đại học Y Dược Hải Phòng</p>
                            <p>Giảng viên thỉnh giảng Bộ môn RHM, Khoa Y Dược, Đại học quốc gia Hà Nội</p>
                            <p>Nhận bằng BS chuyên khoa RHM năm 1994 tại Đại học Y Hà Nội</p>
                            <p>Nhận bằng ThS. chuyên khoa RHM năm 2002 tại Đại học Y Hà Nội</p>
                            <p>Nhận bằng TS chuyên khoa RHM năm 2012 tại Viện nghiên cứu khoa học, Y Dược lâm sàng 108, Bệnh viện TW QĐ 108</p>
                            <p>Nguyên Trưởng Khoa Chẩn đoán hình ảnh, Viện RHM Quốc gia</p>
                            <p>Nguyên Trưởng phòng Quản lý và Nghiên cứu khoa học, Bệnh viện RHMTW Hà Nội</p>
                            <p>Nguyên Trưởng Khoa Khám tổng hợp, Bệnh viện RHMTW Hà Nội</p>
                            <p>Tổng Thư ký Hội RHMVN</p>
                        </div>
                        <div class="specialist border-b-2 my-4 leading-8 text-[14px]">
                            <h2 class="font-bold text-[20px]">Khoa Chuyên Sâu</h2>
                            <p>Phục hình răng, Phẫu thuật trong miệng, Implant</p>
                        </div>
                        <div class="CV border-b-2 my-4 leading-8  text-[14px]">
                            <h2 class="font-bold text-[20px]">CV</h2>
                            <p>Nhận bằng BS chuyên khoa RHM năm 1994 tại Đại học Y Hà Nội</p>
                            <p>Nhận bằng ThS. chuyên khoa RHM năm 2002 tại Đại học Y Hà Nội</p>
                            <p>Nhận bằng TS chuyên khoa RHM năm 2012 tại Viện nghiên cứu khoa học, Y Dược lâm sàng 108, Bệnh viện TW QĐ 108</p>
                            <p>Nguyên Trưởng Khoa Chẩn đoán hình ảnh, Viện RHM Quốc gia</p>
                            <p>Nguyên Trưởng phòng Quản lý và Nghiên cứu khoa học, Bệnh viện RHMTW Hà Nội</p>
                            <p>Nguyên Trưởng Khoa Khám tổng hợp, Bệnh viện RHMTW Hà Nội</p>
                            <p>Tổng Thư ký Hội RHMVN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End-Main-detail  -->

        <!-- Footer -->
        <div class="footer bg-[#eff7f9] my-6">
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