<?php
function userBooking()
{
    $sql= "INSERT into user_booking (name,phone,address) values ('$name','$phone','$address')";
    return pdo_execute($sql);
}
function Booking()
{
    $sql = "INSERT INTO `booking`(`id_user`, `id_doctor`, `schedule`, `service`) VALUES ('$id_user','$id_user','$time','$service')";
    return pdo_execute($sql);

?>