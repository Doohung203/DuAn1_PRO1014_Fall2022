<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nha Khoa HealthClinic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/8ddf476500.js" crossorigin="anonymous"></script>
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
    <div class="container  mx-auto">
        <div class="mx-auto">
            <div class="Header">
                <!-- Lcation - SignIn - SignUp -->
                <div class="flex justify-between items-center px-4 py-6 border-b-2 h-4">
                    <div class="location">
                        <p> <i class="fa-regular fa-map"></i> Nơi ở hiện tại : Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                    </div>
                    <div class="home-doctument text-white font-bold">
                        <ul>
                            <li>
                                <div >
                                    <div class="dropdown inline-block relative">
                                        <button class="bg-green-400 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                                            <span class="mr-1"> <i class="fa-regular fa-user"></i></span>
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                            <li class=""><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap" href="login.php">Đăng nhập</a></li>
                                            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap" href="register.php">Đăng ký</a></li>
                                            <li class=""><a class="bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap" href="logout.php">Đăng xuất</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <!--  -->
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
                <!-- <div class="search relative block">
                    <i class="fas fa-search absolute inset-y-0 left-0 flex items-center pl-2 "></i>
                    <input type="search" placeholder="Tìm kiếm" class="w-[70%] placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-[3px] pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1">
                </div> -->
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
        <!-- End-Header -->
        <!-- Content -->
        <div class="content my-4">
            <div class="container max-w-7xl mx-auto ">
                <div class="grid grid-cols-4 gap-8">
                    <!-- Nav-left -->
                    <div class="nav-left">
                        <h2 class="border-b-2 font-bold text-center">CHUYÊN KHOA</h2>
                        <div class="content my-5 leading-8">
                            <ul>
                                <li>
                                    <a class="flex border-b-2 " href=""><img src="svg/arrow.svg" alt="" class="px-2"> Khoa Phẫu thuật trong miệng</a>
                                    <a class="flex border-b-2 " href=""><img src="svg/arrow.svg" alt="" class="px-2"> Khoa Phục hình răng</a>
                                    <a class="flex border-b-2 " href=""><img src="svg/arrow.svg" alt="" class="px-2"> Khoa Implant</a>
                                    <a class="flex border-b-2 " href=""><img src="svg/arrow.svg" alt="" class="px-2"> Khoa Nắn chỉnh răng</a>
                                    <a class="flex border-b-2 " href=""><img src="svg/arrow.svg" alt="" class="px-2"> Khoa Răng trẻ em</a>
                                    <a class="flex border-b-2 " href=""><img src="svg/arrow.svg" alt="" class="px-2"> Khoa Nha chu</a>
                                    <a class="flex border-b-2 " href=""><img src="svg/arrow.svg" alt="" class="px-2"> Khoa Điều trị răng người cao tuổi</a>
                                    <a class="flex border-b-2 " href=""><img src="svg/arrow.svg" alt="" class="px-2"> Khoa Phẩu thuật hàm mặt</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Nav-center -->
                    <div class="nav-center col-span-2">
                        <h2 class="border-b-2 font-bold text-center">ĐỘI NGŨ CHUYÊN GIA</h2>
                        <div class="grid grid-cols-3 gap-8 text-center">
                            <div class="columns">
                                <a href="chi-tiet.php"><img src="https://ranghammat.org.vn/Upload/Avartar/anh-bs1.jpg" alt=""></a>
                                <a class="text-green-500 font-bold text-[14px] " href="chi-tiet.php">PGS.TS.TRẦN HỮU HƯNG</a>
                                <p class="">Giám đốc Bệnh viện</p>
                            </div>
                            <div class="columns">
                                <a href=""><img src="https://ranghammat.org.vn/Upload/Avartar/anh-bs2.jpg" alt=""></a>
                                <a class="text-green-500 font-bold text-[14px] " href="">TS.MAI VĂN NAM</a>
                                <p class="">Phó Giám đốc Bệnh viện</p>
                            </div>
                            <div class="columns">
                                <a href=""><img src="https://ranghammat.org.vn/Upload/Avartar/a-binh.JPG" alt=""></a>
                                <a class="text-green-500 font-bold text-[13px] " href="">TS.LÝ TỰ LẪM</a>
                                <p class="">Phó Giám đốc Bệnh viện</p>
                            </div>

                        </div>
                    </div>
                    <!-- Nav-right -->
                    <div class="nav-right">
                        <h2 class="border-b-2 font-bold text-center">TIN TỨC</h2>
                        <div class="video border-b-2">Lớp tập huấn - Nâng cao kỹ năng giao tiếp của cán bộ y tế hướng tới sự hài lòng người bệnh</div>
                        <div class="news">
                            <ul>
                                <li>
                                    <a href=""> <i class="fa-solid fa-period"></i>Chương trình Workshop trải nghiệm 20/10/2022 Chủ đề “Phụ nữ và cuộc sống”</a><br>
                                    <a href=""> <i class="fa-solid fa-period"></i>CHƯƠNG TRÌNH KHÁM, ĐIỀU TRỊ VÀ GIÁO DỤC NHA KHOA CHO HỌC SINH TẠI TRƯỜNG TIỂU HỌC HIM LAM, THÀNH PHỐ ĐIỆN BIÊN PHỦ</a><br>
                                    <a href=""> <i class="fa-solid fa-period"></i>Đại hội chi hội điều dưỡng Bệnh viện Răng Hàm Mặt Trung ương Hà Nội, nhiệm kỳ 2022-2027</a><br>
                                    <a href=""> <i class="fa-solid fa-period"></i>KHAI MẠC KỲ TUYỂN DỤNG VÀ KIỂM TRA SÁT HẠCH VIÊN CHỨC ĐỢT 1 NĂM 2022</a><br>
                                    <a href=""> <i class="fa-solid fa-period"></i>Thông báo công nhận kết quả trúng tuyển kỳ xét tuyển vc đợt 1 năm 2022 BV RHM TW Hà Nội</a><br>
                                </li>
                            </ul>
                        </div>
                        <div class="video"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner-bottom -->
        <div class="banner-bottom bg-[#eff7f9] p-4 rounded-md">
            <h2 class="border-b-2 text-2xl font-bold ">PHÒNG CHỐNG COVID VÀ TIN TỨC TRONG NGÀNH</h2>
            <div class="grid grid-cols-4 gap-8 my-4">
                <div class="colum">
                    <img src="https://ranghammat.org.vn/resize/medium/2410cuonggg-4900-dXBsb2Fk-medium.jpg" alt="">
                    <a href="https://dangcongsan.vn/multimedia/infographic/khuyen-cao-cua-bo-y-te-ve-phong-chong-benh-cum-mua-623355.html">Khuyến cáo của Bộ Y tế về phòng chống bệnh cúm mùa</a>
                </div>
                <div class="colum">
                    <img src="https://ranghammat.org.vn/resize/medium/2410cuonggg-4900-dXBsb2Fk-medium.jpg" alt="">
                    <a href="https://dangcongsan.vn/multimedia/infographic/khuyen-cao-cua-bo-y-te-ve-phong-chong-benh-cum-mua-623355.html">Khuyến cáo của Bộ Y tế về phòng chống bệnh cúm mùa</a>
                </div>
                <div class="colum">
                    <img src="https://ranghammat.org.vn/resize/medium/2410cuonggg-4900-dXBsb2Fk-medium.jpg" alt="">
                    <a href="https://dangcongsan.vn/multimedia/infographic/khuyen-cao-cua-bo-y-te-ve-phong-chong-benh-cum-mua-623355.html">Khuyến cáo của Bộ Y tế về phòng chống bệnh cúm mùa</a>
                </div>
                <div class="colum">
                    <img src="https://ranghammat.org.vn/resize/medium/2410cuonggg-4900-dXBsb2Fk-medium.jpg" alt="">
                    <a href="https://dangcongsan.vn/multimedia/infographic/khuyen-cao-cua-bo-y-te-ve-phong-chong-benh-cum-mua-623355.html">Khuyến cáo của Bộ Y tế về phòng chống bệnh cúm mùa</a>
                </div>
            </div>
        </div>
        <!-- Menu-bottom -->
        <div class="menu-bottom grid grid-cols-3 font-bold text-white text-center my-4">
            <div class="colums bg-[#109756] py-4">
                <a href="">Góc Từ Thiện</a>
            </div>
            <div class="colums bg-[#0e814a] py-4">
                <a href="">Tài Liệu Văn Bản</a>
            </div>
            <div class="colums bg-[#0b6137] py-4">
                <a href="">Dành Cho Nhân Viên</a>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer bg-[#eff7f9] my-6 rounded-md">
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
        <!-- End-Footer -->
    </div>
</body>

</html>