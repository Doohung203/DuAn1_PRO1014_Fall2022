<?php
require "../dao/connect.php";
require "../dao/pdo.php";
session_start();
$id = $_SESSION['user']['id'];

$sql = "SELECT user.id as id_user,user.hoten, schedule.time,booking.date, service.name as service,service.price,doctor.name as doctor, booking.comment FROM user INNER JOIN booking on user.id = booking.id_user INNER JOIN schedule on booking.id_schedule = schedule.id INNER JOIN service on booking.id_service =  service.id INNER JOIN doctor on booking.id_doctor = doctor.id where id_user = '$id'";
$stmt = $conn -> prepare($sql);
$stmt -> execute();
$calendar = $stmt->fetchAll(PDO::FETCH_ASSOC);



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
      <div class="block py-[35px] font-bold text-lg text-white to-yellow-300"><i class="fa-solid fa-comment-medical p-4"></i>Lịch khám</div>
      <a href="home.php" class="block py-[35px] font-bold text-lg text-white to-yellow-300 pl-[120px] hover:text-red-600" >Quay lại</a>
      </div>
      <section class="col-span-4 border-2-sm bg-gray-200 shadow-inherit">
            
            <div class="max-w-7xl mx-auto bg-white p-3">
              <table class="w-full texts-sm text-left p-3 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                  <tr>
                    <th class="py-3 px-6" >Họ Tên</th>
                    <th class="py-3 px-6" >ngày khám</th>
                    <th class="py-3 px-6" >giờ khám</th>
                    <th class="py-3 px-6" >Bác sĩ</th> 
                    <th class="py-3 px-6" >Dịch vụ</th>
                    <th class="py-3 px-6" >Giá</th>
                    <th class="py-3 px-6" >Kết luận</th>
                   
                  </tr>
                </thead>
                <tbody class="bg-white border-b dark:bg-gray-300 dark:border-gray-700">
                <?php foreach ($calendar as $index => $cld) : ?>
                  <tr>
                    <td class="py-4 px-6" ><?= $cld['hoten']?></td>
                    <td class="py-4 px-6" ><?= $cld['date']?></td>
                    <td class="py-4 px-6" ><?= $cld['time']?></td>
                    <td class="py-4 px-6" ><?= $cld['doctor']?></td>
                    <td class="py-4 px-6" ><?= $cld['service']?></td>
                    <td class="py-4 px-6" ><?= $cld['price']?></td>
                    <td class="py-4 px-6"><?= $cld['comment']?></td>
                    
                  </tr>
                  <?php endforeach?>
                  
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