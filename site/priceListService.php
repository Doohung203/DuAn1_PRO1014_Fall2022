<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price List Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/8ddf476500.js" crossorigin="anonymous"></script>
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
        <div class="home-doctument text-white font-bold">
            <ul>
                <li>
                    <a class="px-3 py-1 border rounded-md bg-green-400 hover:bg-white hover:border-green-400 hover:text-green-400" href="../admin/danh-muc/login.php">Đăng nhâp</a>
                    <a class="px-3 py-1 border rounded-md bg-green-400 hover:bg-white hover:border-green-400 hover:text-green-400" href="register.php">Đăng ký</a>
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
<!-- Main-content -->
        <div class="container max-w-7xl mx-auto my-4">
            <div class="price-list">
                <div class="grid grid-cols-3 gap-8 my-4">
                    <div class="price-list col-span-2">
                        <h2 class="font-bold text-2xl">Bảng giá dịch vụ y tế</h2>
                        <img src="https://ranghammat.org.vn/Upload/Gia%20DV/gia_bv-dv-page-001.jpg" alt="">
                    </div>
                    <div class="news">
                      <h2 class="font-bold text-2xl border-b-2">Tin tức mới nhất</h2>
                        <div class="my-4 flex justify-between items-center space-x-4 border-b-2 py-4">
                            <img src="https://ranghammat.org.vn/Upload/News/img-tt-2.jpg" alt="" width="40%">
                            <a href="">Hỗ trợ phẫu thuật từ thiện tại Bệnh viện Răng Hàm Mặt Trung ương</a>
                        </div>
                        <div class="my-4 flex justify-between items-center space-x-4 border-b-2 py-4">
                            <img src="https://ranghammat.org.vn/Upload/News/tt1-2.jpg" alt="" width="40%">
                            <a href="">Bệnh viện Răng Hàm Mặt Trung ương Hà Nội: Khai trương Trung tâm khám chữa bệnh từ xa</a>
                        </div>
                        <div class="my-4 flex justify-between items-center space-x-4 border-b-2 py-4">
                            <img src="https://ranghammat.org.vn/Upload/News/tt3.jpg" alt="" width="20%">
                            <a href="">THƯ CẢM ƠN QUẬN ĐOÀN HOÀN KIẾM HÀ NỘI</a>
                        </div>
                        <div class="grid grid-rows-2 font-bold text-white">
                            <a href="" class="bg-[#0e814a] p-4">TÀI LIỆU VĂN BẢN</a>
                            <a href="" class=" bg-[#0b6137] p-4">DÀNH CHO NHÂN VIÊN</a>
                        </div>
                        <div class="video py-4">
                          <h2 class="font-bold text-2xl border-b-2">Video clip</h2>
                            <iframe class="my-4" width="394" height="294" src="https://www.youtube.com/embed/7s7oyVmLVmg" title="30 năm thành lập và phát triển" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- End-main-content -->
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
                <a href=""><img src="./svg/facebook.svg" alt=""></a>
                <a href=""><img src="./svg/instagram.svg" alt=""></a>
                <a href=""><img src="./svg/twitter.svg" alt=""></a>
                <a href=""><img src="./svg/youtube.svg" alt=""></a>
            </div>
        </div>
    </div>
</div>
<!-- end-Footer -->
</section>
</body>
</html>