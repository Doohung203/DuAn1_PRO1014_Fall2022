<?php

function Booking($id_user,$id_doctor,$schedule,$service)
{
    $sql = "INSERT INTO `booking`(`id_user`, `id_doctor`, `schedule`, `service`) VALUES ('$id_user','$id_user','$schedule','$service')";
    return pdo_execute($sql);
}
?>