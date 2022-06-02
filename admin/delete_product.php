<?php


include ("../config/config.php");

if(isset($_GET['MaHang'])) {
    $id = $_GET['MaHang'];
    $sql = "delete from hang where MaHang = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: product.php');
    
}
?>
