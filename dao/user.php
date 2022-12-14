 
<?php
    require "../dao/pdo.php";
    require "../dao/connect.php";    

    function checkUser($username,$password)
  {
    $sql =  "select * from user where username='" . $username . "' and password='" . $password . "'";
    
    return pdo_query_all($sql);
   
  }



?>