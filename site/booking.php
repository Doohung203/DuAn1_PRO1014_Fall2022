<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/8ddf476500.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../font-css/font-logo.css">
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
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
            <div>
                <img src="../admin/images/zyro-mouth.png" alt="" width="10%">
            </div>
            <h2 class="text-2xl text-center uppercase text-white font-bold font-['TimeNewRoman']">Đặt lịch khám</h2>
            <div class="form py-10">
                <form action="" method="POST">
                    <input type="text" name="" id="" placeholder="Họ tên bệnh nhân" class="w-full border rounded-md my-4 p-2 ">
                    <div class="flex justify-between space-x-4 w-full my-4">
                        <input datepicker type="text" name="" id="" placeholder="Ngày sinh" class="border rounded-md md:w-[50%] w-full p-2">
                        <select name="" id="" value ="Nam" class="border rounded-md md:w-[50%] w-full p-2">
                            <option value="" >Giới Tính</option>
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                        </select>
                    </div>
                    <input type="text" name="" id="" placeholder="Email" class="border rounded-md w-full my-4 p-2">     
                    <input type="text" name="" id="" placeholder="Điện thoại" class="border rounded-md w-full my-4 p-2">
                    <span class="text-white text-lg">Thời gian hẹn: </span>
                     <select name="" id="" class=" w-full border rounded-md text-center px-4 p-2">
                        <option value="">Sáng : 8:00 A.M - 11:00 A.M  </option>
                        <option value="">Chiều : 14:00 P.M - 17:00 P.M</option>
                    </select>            
                    <div class="text-center mt-8 ">
                    <a href="" class="border rounded-md text-white  hover:bg-white hover:text-green-600 hover:border-red-700  font-bold px-3 py-2">Đặt lịch</a>

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