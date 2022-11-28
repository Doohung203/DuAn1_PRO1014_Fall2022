<?php
require_once "../../../dao/connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id=$id";

$stmt = $conn->prepare($sql);
$stmt->execute();

header("location: ../quanLyBooking.php");
setcookie("delete", "Xóa thành công");
exit;