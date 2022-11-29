<?php
    require_once "../global.php";
    require_once '../dao/pdo.php';

    if(isset($_GET['chi-tiet'])){
        $VIEW_NAME = 'chi-tiet.php';
    }elseif(isset($_GET['danh-muc'])){
        $VIEW_NAME = '../layout/admin/showadmin.php';
    }else{
        $VIEW_NAME = 'home.php';
    }

    include_once './layout.php';

?>