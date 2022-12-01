<?php
session_start();
session_destroy();
//quay trở lại login
header("location: login.php");
sleep(1);
exit;
