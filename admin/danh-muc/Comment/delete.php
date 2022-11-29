<?php
require_once "../../../dao/connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM comment WHERE id=$id";

$stmt = $conn->prepare($sql);
$stmt->execute();

header("location: ../quanLyBinhLuan.php");
setcookie("delete", "Xóa thành công", time() + 1);
exit;
