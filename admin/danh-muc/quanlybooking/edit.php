<?php
    require "../../../dao/connect.php";

    if(isset($_POST['submit'])){
        $id = $_POST['id_user'];
        $name = $_POST['name'];
        $address = $_POST['diachi'];
        $time = $_POST['ca'];
        $time = $_POST['doctor'];
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
$sql = "SELECT user.id_user, user.name, user.sdt, user.diachi, time.ca, bacsi.name as doctor FROM (user INNER JOIN bacsi ON user.id_doctor = user.id_doctor) INNER JOIN time on bacsi.id_doctor = time.id_doctor where id_user = $id";
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