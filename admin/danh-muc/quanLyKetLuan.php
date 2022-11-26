<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang quản trị</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://kit.fontawesome.com/8ddf476500.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../../font-css/font-logo.css">
  </head>
  <body>
    <section class="admin mx-auto items-center ">
        <!--nav-bar-top-->
      <section class=" bg-[#2B4B62] border">
        <div class=" flex justify-between items-center ">
         <div class=" logo flex items-center">
           <img
            src="../images/zyro-mouth.png"
            alt=""
            width="20%"
            class="max-w-7xl md:inlne-flex"
          />
          <h2 class="p-4 font-bold text-2xl md:text-center text-white">Health Clinic</h2>
         </div>
         <div class="search">

         </div>
          <div class="notic-mail-admin ">
            <div class="flex justify-between items-center my-10 ">
              <div class="profile flex">
                <div class="notification">
                  <a class="text-white" href=""><i class="fa-2x p-8 fa-solid fa-bell"></i></i></a>
                </div>
                <div class="message">
                  <a class="text-white" href=""><i class="fa-2x p-8 fa-solid fa-envelope"></i></ac>
                </div>
                <div class="icon-user">
                  <a class="text-white" href=""><i class="fa-2x p-8 fa-solid fa-user-doctor"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<!-- Main -->
      <section class="manage grid grid-cols-5 gap-4 my-4 ">
      <div class="menu  leading-10 bg-[#30536D]">
            <a
              class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500"
              href="../layout/admin/showadmin.php"
              ><i class="fa-solid fa-user p-4"> </i> Quản lý tài khoản nhân sự</a
            >
            <a
              class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500"
              href="quanLyBenhNhan.php"
              ><i class="fa-solid fa-hospital-user p-4"></i> Quản lý bệnh nhân</a
            >
            <a
              class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500"
              href="quanLyHoSo.php"
              ><i class="fa-solid fa-file-pen p-4"></i> Quản lý hồ sơ</a
            >
            <a
              class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500"
              href="quanLyBinhLuan.php"
              ><i class="fa-solid fa-comments p-4"></i> Quản lý bình luận</a
            >
            <a
              class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500"
              href="quanLyBooking.php"
              ><i class="fa-solid fa-calendar-days p-4"></i> Quản lý booking</a
            >
            <a
              class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500"
              href="quanLyLichKham.php"
              ><i class="fa-sharp fa-solid fa-clock p-4"></i> Quản lý lịch khám</a
            >
            <a
              class="block py-[35px] font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-red-500"
              href="quanLyKetLuan.php"
              ><i class="fa-solid fa-comment-medical px-8"></i>Kết luận của bác sĩ</a
            >
          </div>
        <section class="col-span-4 border-2-sm bg-gray-200 shadow-inherit">
            <h2 class="py-6 font-bold text-3xl text-center text-gray-600 uppercase">Kết luận của bác sĩ</h2>
           
            
        </section>
      </section>
<!-- End-Main -->
    </section>
  </body>
</html>



