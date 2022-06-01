<?php


include ("../config/config.php");

if(isset($_GET['SoHD'])) {
    $id = $_GET['SoHD'];
    $sql = "delete from hoadon where SoHD = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
    
}
?>
