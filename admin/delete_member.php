<?php


include ("../config/config.php");

if(isset($_GET['MaNV'])) {
    $id = $_GET['MaNV'];
    $sql = "delete from nhanvien where MaNV = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: manage.php');
    
}
?>
