 
<?php
    require "../dao/pdo.php";
    require "../dao/connect.php";    

  function checkUser($username,$password)
  {
        $conn = getConnect();
      $stmt = $conn ->prepare("SELECT * FROM username = '".$username."' and password = '.$password.' ");
      $stmt -> execute();
      $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
      $kq = $stmt -> fetchAll();
      return $kq[0]['role'];
  
  }



?>