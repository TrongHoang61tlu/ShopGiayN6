<?php
    
    session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email      =       $_POST["email"];
    $password   =       $_POST["password"];
    
    // QUY TRÌNH 4 bước:
    // Bước 01:
    include('../config/config.php');


    // Bước 02: Xử lý truy vấn
    $sql = "SELECT * FROM nhanvien WHERE EmailNV='$email'";
    $result = mysqli_query($conn,$sql);
    $password2  =   $password;    

    if(mysqli_num_rows($result) > 0){
        // Lấy mật khẩu ra
        $row=mysqli_fetch_assoc($result);
        $pass_hash = $row['PasswordNV'];
        $activated = $row['activated'];
		$name 		= $row['TenNV'];
        if($activated ==1){
            $_SESSION['pass'] = 'Đăng nhập thành công';
                header("location: index.php");           
            }else{
                $_SESSION['error'] = 'Tài khoản của bạn chưa được kích hoạt. Vui lòng đăng nhập gmail để kích hoạt tài khoản !';
                header("location: ../loginadmin.php");

            }
    }else{
                $_SESSION['error'] = 'Email không tồn tại!';
                header("location: ../loginadmin.php");
    }
}

?>