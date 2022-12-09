<?php
    require_once "../global.php";
    require_once '../dao/pdo.php';
    

    if(isset($_GET['chi-tiet'])){
        $VIEW_NAME = 'chi-tiet.php';
    }elseif(isset($_GET['danh-muc'])){
        $VIEW_NAME = '../layout/admin/showadmin.php';
    }else{
        // var_dump($_SESSION['username']);
        // die;
        $VIEW_NAME = 'home.php';
    }

    include_once './layout.php';

?>