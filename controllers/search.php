<?php
include('../config/config.php');

if(isset($_POST['handleSearch'])) {
    $search =  $_POST['search'];
    $sql = "select TenHang from hang where TenHang like '%$search%'";
    $result = mysqli_query($conn,$sql);

    $searchResult = mysqli_fetch_assoc($result);

    echo $searchResult["TenHang"];
    

} else {
    header("location: ./index.php");
}

?>