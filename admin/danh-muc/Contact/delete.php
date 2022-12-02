<?php
require_once "../../../dao/connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM contact WHERE id=$id";
$stmt=$conn->prepare($sql);
$stmt->execute();
header("location: ../quanLyContact.php");
setcookie("delete", "Đã hỗ trợ xong cho khách hàng.");
exit;