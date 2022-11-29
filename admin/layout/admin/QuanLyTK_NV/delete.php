<?php
require_once "../../../../dao/connect.php";
$id = $_GET['id'];
$sql = "DELETE FROM admin WHERE id_admin=$id";
$stmt=$conn->prepare($sql);
$stmt->execute();

header("location: ../showadmin.php");
setcookie("xoa", "xóa thành công");
exit;
?>