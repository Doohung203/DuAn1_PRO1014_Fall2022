<?php
try {
    //code..
    $conn = new PDO("mysql:host=localhost; dbname=nha_khoa_x; charset = utf8;", "root", "");
} catch (\Throwable $th) {
    //throw $th;
    echo "Lỗi kết nối" . $th->getMessage();
}
