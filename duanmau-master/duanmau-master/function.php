<?php 
   $host = "localhost";
   $user = "root";
   $password = "";
   $db = "duanmau";
   $conn = null;
   try {
       $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$password);
   } catch (PDOException $e) {
       echo $e->getMessage();
   }
   function action($sql){
    global $conn;
    $conn->exec($sql);
   }

//    Hàm lấy dữ liệu
   function selectDb($sql){
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
   }
//    Hàm lấy 1 dữ liệu
   function total($sql){
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchColumn();
    return $result;
   }
?>