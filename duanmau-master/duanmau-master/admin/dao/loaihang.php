<?php
    // hàm edit
    function edit_cate($name_new, $id){
    $sql = "UPDATE category SET name = '$name_new' WHERE id = '$id'";
    action($sql);
    }

?>