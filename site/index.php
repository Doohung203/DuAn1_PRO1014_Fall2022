<?php
    require_once "../global.php";
    require_once '../dao/pdo.php';
    

    if(isset($_GET['chi-tiet'])){
        $VIEW_NAME = 'chi-tiet.php';
    }elseif(isset($_GET['danh-muc'])){
        $VIEW_NAME = '../layout/admin/showadmin.php';
    
    }elseif (isset($_GET['act'])) {
        switch($_GET['act'])
        {
            case 'btn-submit':
                require_once "../dao/booking_dao.php";
                if(isset($_POST['submit-booking']))
                {
                    $id_user = $_POST['id_user']; 
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $schedule = $_POST['time'];
                    $service = $_POST['service'];
                    Booking($_SESSION['user']['id'],$_SESSION['user']['id'],$schedule,$service);
                    header ('location: index.php');
                }
        }
    }
    
    
    else{
        // var_dump($_SESSION['username']);
        // die;
        $VIEW_NAME = 'home.php';
    }

    include_once './layout.php';

?>