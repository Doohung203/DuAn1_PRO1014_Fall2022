<?php
    require "../../../dao/connect.php";

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $hoten = $_POST['hoten'];
        $address = $_POST['diachi'];
        $phone = $_POST['sdt']
        $time = $_POST['name'];
        $doctor = $_POST['doctor'];
        $service = $_POST['service'];
        $errors = [];
        
        if(!$errors)
        {
            $sql = "UPDATE 'user' SET name = '$name', diachi = '$address', sdt = '$sdt' where id_user = $id";
            $stmt = $conn ->prepare($sql);
            $stmt -> execute();
            $sql_1 = "UPDATE 'bacsi' set name = $doctor "
        }
    }

$id = $_GET['id_user'];
$sql = "SELECT booking.id, user.hoten, user.sdt,user.diachi, schedule.time, doctor.hoten as doctor, service.name as service FROM booking INNER JOIN user on booking.id_user = user.id INNER JOIN schedule on booking.id_schedule = schedule.id INNER JOIN doctor on booking.id_doctor = doctor.id INNER JOIN service on booking.id_service = service.id";
$stmt = $conn ->prepare($sql);
$stmt = $conn -> execute();
$user = $stmt -> fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/from-data " >
        Họ tên: <input type="text" name='name'><br>
        SĐT: <input type="number" name="sdt"><br>
        Địa chỉ: <input type="text" name='address'><br>
        Thời gian: <input type="date-time" name='time'><br>
        bác sĩ: <input type="text" name='doctor'><br>
        <input type="submit" name='submit'>

    </form>
</body>
</html>