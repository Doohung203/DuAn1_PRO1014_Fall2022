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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
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
                                <div>
                                    <div class="dropdown inline-block relative">
                                        <button
                                            class="bg-green-400 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                                            <span class="mr-1"> <i class="fa-regular fa-user"></i></span>
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                            <li class=""><a
                                                    class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap"
                                                    href="login.php">Đăng nhập</a></li>
                                            <li class=""><a
                                                    class="bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap"
                                                    href="register.php">Đăng ký</a></li>
                                            <li class=""><a
                                                    class="bg-gray-200 hover:bg-gray-400 py-2 px-6 block whitespace-no-wrap"
                                                    href="logout.php">Đăng xuất</a></li>
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
                    <p> <i class="fa-sharp fa-solid fa-phone-volume"></i> Khoa cấp cứu : <a href=""
                            class="text-red-500 font-bold">098775423</a></p>
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
                            <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500  hover:rounded-md"
                                href="home.php">Trang chủ</a>
                            <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md"
                                href="priceListService.php">Bảng giá dịch vụ</a>
                            <a style="font-family: Inter-font;"
                                class="py-4 px-2 text-4xl uppercase hover:bg-sky-100 hover:text-green-500"
                                href="home.php">Health Clinic</a>
                            <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md"
                                href="dentist.php">Đội ngũ chuyên gia</a>
                            <a class="py-4 px-2 hover:bg-sky-100 hover:text-green-500 hover:rounded-md"
                                href="contact.php">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Main-login -->
        <div class="mx-auto bg-gradient-to-r from-green-100">
            <div class="grid place-content-center border-2-sm ">
                <div
                    class="my-40 bg-[#2B4B62] rounded-lg font-['Roboto'] text-xl text-white w-[800px] h-[550px] pt-[10%] text-center">
                    <div class="title font-bold uppercase text-3xl py-8 pl-[75px] px-14">
                        <h2>Bạn cần đăng nhập</h2>
                    </div>
                    <div class="content-center font-bold text-black">
                        <form method="POST" class="space-y-8">
                            <section>
                                <a href="" class="w-full">
                                    <button type="submit" name="btn-dangnhap"
                                        class="bg-[#2B4B62] text-white hover:bg-white hover:text-black w-[70%] py-3 px-2  border rounded-lg my-4">
                                        Đăng nhập dưới quyền quản trị viên</button>
                                </a>
                                <a href="login.php">
                                    <button type="submit" name="btn-dangnhap"
                                        class="bg-[#2B4B62] text-white hover:bg-white hover:text-black w-[70%] py-3 px-2  border rounded-lg my-4">
                                        Đăng nhập với tư cách người dùng</button>
                                </a>
                            </section>
                            <div class=" pr-10 text-center text-white">
                                <a style="padding-left:80px" href="">Chưa có tài khoản? <a href="register.php"
                                        class="uppercase text-blue-400">Đăng ký</a></a>
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