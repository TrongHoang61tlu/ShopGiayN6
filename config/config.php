<?php
//B1, kết nối với quản trị CSDL
$conn = mysqli_connect("localhost","root","", "shopbangiay");
if (!$conn){
    die("Kết nối thất bại");
}


//B2: thông báo ngôn ngữ sử dụng trong CSDL cho PHP

mysqli_query($conn , "SET NAME 'utf8'");

?>