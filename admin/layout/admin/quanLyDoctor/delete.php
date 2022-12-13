<?php
require_once "../../../dao/connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM doctor WHERE id=$id";

$stmt = $conn->prepare($sql);
$stmt->execute();

header("location: ../showadmin.php");
setcookie("delete", "Xóa thành công");
exit;