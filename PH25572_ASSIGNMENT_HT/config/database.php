<?php
define('HOST','localhost');
define('DBNAME','test');
define('USERNAME','root');
define('PASSWORD','');

try {
    $conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.'; charset=utf8',USERNAME,PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo 'Lỗi kết nối dữ liệu' . $e->getMessage();
    throw $e;
}