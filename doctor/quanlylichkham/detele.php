<?php
require_once "../../../dao/connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM time WHERE id=$id";

$stmt = $conn->prepare($sql);
$stmt->execute();

header("location: ../quanLyLichKham.php");
setcookie("delete", "Xóa thành công");
exit;