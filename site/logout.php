<?php
session_start();
session_destroy();
header("location: login.php");
sleep(1);
exit;
