<?php
require_once ("database.php");
class m_hang_hoa extends database {
    // xây dựng lấy danh sách hàng hoá 
    public function doc_hang_hoa(){
        $sql = "SELECT * FROM hang_hoa";// chuỗi câu truy vấn dữ liệu 
    }
}
?>