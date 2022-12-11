<?php
session_start();
session_destroy();
header("location: home.php");
sleep(1);
exit;
