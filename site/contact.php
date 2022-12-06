<?php
require_once "../dao/connect.php";

if (isset($_POST['save'])) {
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $noidung = $_POST['noidung'];

    $errors = [];

    if ($hoten == "") {
        $errors['hoten'] = "Nhập họ tên";
    }
    if ($sdt == "") {
        $errors['sdt'] = "Nhập sdt";
    }
    if ($noidung == "") {
        $errors['noidung'] = "Nhập nội dung";
    }

    if (!$errors) {
        $sql = "INSERT INTO `contact`(`hoten`, `email`, `sdt`, `noidung`) VALUES
            ('$hoten', '$email', '$sdt', '$noidung')";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location: contact.php");
        setcookie("save", "Vấn đề của bạn đã được gửi đi, nhân viên tư vấn sẽ sớm liên hệ và hỗ trợ cho bạn.", time() + 1);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
    <div class="Contact max-w-7xl mx-auto my-4">
        <h2 class="font-bold text-2xl uppercase border-b-2">Liên hệ</h2>
        <div class="grid grid-cols-3 gap-8 my-4">
            <div class="colums col-span-2">
                <img src="https://ranghammat.org.vn/resize/medium/img-lh-dXBsb2FkaW1hZ2Vz-medium.jpg" alt="" width="100%">
            </div>
            <div class="colums leading-10 p-4">
                <img src="./image/zyro-image.png" alt="">
                <p class="font-bold">BỆNH VIỆN RĂNG HÀM MẶT TRUNG ƯƠNG HÀ NỘI</p>
                <p> <i class="fas fa-map-marked-alt"></i> Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                <a href="tel: 0877432122"> <i class="fas fa-phone-alt"></i> (024) 3826.9722 - 3928.5172 - 3826.9275</a><br>
                <a href="tel: 113"> (024) 3826.9726 - 3826.9725</a>
                <p>Số điện thoại tư vấn: <a href="tel: 114">0867.732939</a></p>

            </div>
        </div>
        <div class="grid grid-cols-5 gap-8 my-4">
            <div class="form col-span-2 ">
                <form action="" method="post">
                    <h2 class="font-bold uppercase">GỬI THÔNG TIN LIÊN HỆ</h2>
                    <input class="border rounded-md my-2 p-2 w-full" type="text" name="hoten" id="" placeholder="Họ tên bệnh nhân">
                    <br>
                    <?php if (isset($errors['hoten'])) : ?>
                        <p style="color: red; font-size: 10px;"><?= $errors['hoten'] ?></p>
                    <?php endif ?>
                    <input class="border rounded-md my-2 p-2 w-full" type="email" name="email" id="" placeholder="Email">
                    <input class="border rounded-md my-2 p-2 w-full" type="text" name="sdt" id="" placeholder="Điện thoại">
                    <br>
                    <?php if (isset($errors['sdt'])) : ?>
                        <p style="color: red; font-size: 10px;"><?= $errors['sdt'] ?></p>
                    <?php endif ?>
                    <!-- <input class="border rounded-md my-2 p-2 w-full" type="text" name="" id="" placeholder="Vấn đề"> -->
                    <textarea class="border rounded-md my-2 p-2 w-full" name="noidung" id="" cols="30" rows="6" placeholder="Nội dung"></textarea>
                    <br>
                    <?php if (isset($errors['noidung'])) : ?>
                        <p style="color: red; font-size: 10px;"><?= $errors['noidung'] ?></p>
                    <?php endif ?>
                    <br>
                    <?php if (isset($_COOKIE['save'])) : ?>
                        <p style="color: green; font-size: 10px;"><?= $_COOKIE['save'] ?></p>
                    <?php endif ?>
                    <br>
                    <button name="save" class="w-full border rounded-md font-bold bg-green-500 hover:bg-green-700 hover:text-white py-2">Gửi đi</button>
                </form>
            </div>
            <div class="map ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7448.258938860648!2d105.846598!3d21.027505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9682de09f7%3A0xfa244bb8e0a6c1e!2zNDAgQiBUcsOgbmcgVGhpLCBIw6BuZyBCw7RuZywgSG_DoG4gS2nhur9tLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2sus!4v1668009926145!5m2!1svi!2sus" width="880" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--End-Main-content -->

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