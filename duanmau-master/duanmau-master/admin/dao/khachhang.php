<?php
    // Sửa 
    function edit_user($name_new,$phone_new,$email_new,$pass_new,$active_new,$permission_new,$id){

        $sql ="UPDATE user SET name='$name_new', phone='$phone_new',email= '$email_new',password='$pass_new',active='$active_new',permission='$permission_new' WHERE id = '$id'";
        action($sql);
    }
?>