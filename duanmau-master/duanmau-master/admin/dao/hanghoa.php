<?php
// Thêm hàng hoá
function add_hanghoa($name,$imgname,$price,$date,$details,$cate,$sale,$total,$intro,$view){
    $sql = "INSERT INTO product (name,images,price,date_add,detail,id_cate,sale,total,intro,view) VALUES 
    ('$name','$imgname','$price','$date','$details','$cate','$sale','$total','$intro','$view')";
    action($sql);
}

// Edit hàng hoá
function edit_hanghoa($name_new,$price_new,$sale_new,$total_new,$intro_new,$details_new,$date_new,$id){
    $sql = "UPDATE product SET name='$name_new', price= '$price_new',sale='$sale_new',total = '$total_new',
    intro='$intro_new',detail='$details_new',date_add='$date_new' WHERE id = '$id'";
    action($sql);
}


// Hàm xoá
function delete_hanghoa($id){
    $sql = "DELETE FROM product WHERE id = $id";
    action($sql);
}
?>