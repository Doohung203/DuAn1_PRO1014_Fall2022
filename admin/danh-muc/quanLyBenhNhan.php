<?php
require_once "../../dao/connect.php";
  $sql = "SELECT * FROM user where role = '1'";
  $stmt = $conn -> prepare($sql);
  $stmt -> execute();
  $user = $stmt->fetchAll(PDO::FETCH_ASSOC);


;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang quản trị</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/8ddf476500.js" crossorigin="anonymous"></script>
</head>

<body>
  <section class="admin mx-auto items-center ">
    <!--nav-bar-top-->
    <section class=" bg-[#2B4B62] border">
      <div class=" flex justify-between items-center ">
        <div class=" logo flex items-center">
          <img src="../images/zyro-mouth.png" alt="" width="20%" class="max-w-7xl md:inlne-flex" />
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
        <a class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500" href="../layout/admin/showadmin.php"><i class="fa-solid fa-user p-4"> </i> Quản lý tài khoản nhân sự</a>
        <a class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500" href="quanLyBenhNhan.php"><i class="fa-solid fa-hospital-user p-4"></i> Quản lý bệnh nhân</a>
        <!-- <a class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500" href="quanLyHoSo.php"><i class="fa-solid fa-file-pen p-4"></i> Quản lý hồ sơ</a> -->
        <a class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500" href="quanLyContact.php"><i class="fa-solid fa-comments p-4"></i> Quản lý bình luận</a>
        <a class="block py-[35px] px-4 font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-yellow-500" href="quanLyBooking.php"><i class="fa-solid fa-calendar-days p-4"></i> Quản lý booking</a>        <a class="block py-[35px] font-bold text-lg text-white to-yellow-300 hover:bg-white hover:text-green-300 hover:border hover:border-red-500" href="quanLyKetLuan.php"><i class="fa-solid fa-comment-medical p-4"></i>Kết luận của bác sĩ</a>
      </div>
      <section class="col-span-4 border-2-sm bg-gray-200 shadow-inherit">
        <h2 class="py-6 font-bold text-3xl text-center text-gray-600 uppercase">Quản lý bệnh nhân</h2>
        <div class="max-w-7xl mx-auto bg-white p-3">
          <h2 class="border-b-4 font-bold text-2xl py-3">Static voice</h2>
          <table class="w-full texts-sm text-left p-3 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
              <tr>
                <th class="py-3 px-6">STT</th>
                <th class="py-3 px-6">Họ Tên</th>
                <th class="py-3 px-6">Tài Khoản</th>
                <th class="py-3 px-6">Mật Khẩu</th>
                <th class="py-3 px-6">SĐT</th>
                <th class="py-3 px-6">Địa chỉ</th>
                <th class="py-3 px-6"> <a href="quanLyBenhNhan/add.php" class="border rounded-md px-4 py-2 bg-green-500 text-center text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300">Thêm tài khoản</a> </th>

              </tr>
            </thead>
            <tbody class="bg-white border-b dark:bg-gray-300 dark:border-gray-700">

              <?php foreach ($user as $index => $bn) : ?>
                <tr>
                  <td class="py-4 px-6"><?= $index + 1 ?></td>
                  <td class="py-4 px-6"><?= $bn['hoten'] ?></td>
                  <td class="py-4 px-6"><?= $bn['username'] ?></td>
                  <td class="py-4 px-6"><?= $bn['password'] ?></td>
                  <td class="py-4 px-6"><?= $bn['sdt'] ?></td>
                  <td class="py-4 px-6"><?= $bn['diachi'] ?></td>
                  <td class="py-4 px-6">
                    <a class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="quanLyBenhNhan/update.php?id=<?= $bn['id']?>">Sửa</a>
                    <a onclick="return confirm('Xác nhận xóa?')" class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="quanLyBenhNhan/delete.php?id=<?= $bn['id']?>">Xóa</a>
                  </td>

                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </section>
      <section class="col-span-4 border-2-sm bg-gray-200 shadow-inherit">
        <h2 class="py-6 font-bold text-3xl text-center text-gray-600 uppercase">Quản lý bệnh nhân</h2>
        <div class="max-w-[70%] mx-auto bg-white p-3">
          <h2 class="border-b-4 font-bold text-2xl py-3">Static voice</h2>
          <table class="w-full texts-sm text-left p-3 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
              <tr>
                <th class="py-3 px-6">STT</th>
                <th class="py-3 px-6">Họ Tên</th>
                <th class="py-3 px-6">Tài Khoản</th>
                <th class="py-3 px-6">Mật Khẩu</th>
                <th class="py-3 px-6">SĐT</th>
                <th class="py-3 px-6">Địa chỉ</th>
                <th class="py-3 px-6"> <a href="quanLyBenhNhan/add.php" class="border rounded-md px-4 py-2 bg-green-500 text-center text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300">Thêm tài khoản</a> </th>

              </tr>
            </thead>
            <tbody class="bg-white border-b dark:bg-gray-300 dark:border-gray-700">

              <?php foreach ($doctor as $index => $doctor) : ?>
                <tr>
                  <td class="py-4 px-6"><?= $index + 1 ?></td>
                  <td class="py-4 px-6"><?= $doctor['hoten'] ?></td>
                  <td class="py-4 px-6"><?= $doctor['username'] ?></td>
                  <td class="py-4 px-6"><?= $doctor['password'] ?></td>
                  <td class="py-4 px-6"><?= $doctor['sdt'] ?></td>
                  <td class="py-4 px-6"><?= $doctor['diachi'] ?></td>
                  <td class="py-4 px-6">
                    <a class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="quanLyBenhNhan/update.php?id=<?= $bn['id']?>">Sửa</a>
                    <a onclick="return confirm('Xác nhận xóa?')" class="border rounded-md px-4 py-2 bg-green-500 text-white font-bold hover:text-green-400 hover:bg-white hover:border-red-300" href="quanLyBenhNhan/delete.php?id=<?= $bn['id']?>">Xóa</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
    <!-- End-Main -->
  </section>
  <!-- End-Main -->
  </section>
</body>

</html>