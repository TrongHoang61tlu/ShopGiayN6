<?php
    
    session_start();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email      =       $_POST["email"];
    $password   =       $_POST["password"];
    
    // QUY TRÌNH 4 bước:
    // Bước 01:
    include('../config/config.php');


    // Bước 02: Xử lý truy vấn
    $sql = "SELECT * FROM khach WHERE Emailkh='$email'";
    $result = mysqli_query($conn,$sql);
    $password2  =   md5($password);    

    if(mysqli_num_rows($result) > 0){
        // Lấy mật khẩu ra
        $row=mysqli_fetch_assoc($result);
        $pass_hash = $row['Passwordkh'];
        $activated = $row['activated'];
		$name 		= $row['TenKh'];
        if($activated ==1){
            $_SESSION['error'] = 'Đăng nhập thành công';
                header("location: ../cart.php");
        
            if( md5($password) == $pass_hash ){
                $_SESSION["account"] = $email;
                $_SESSION["name"] = $name;
				$_SESSION['MaKh'] = $row['MaKh'];
                header("location: ../cart.php");
            
            }else{
                $_SESSION['error'] = 'Kiểm tra lại Mật khẩu';
                header("location: ../login.php");
            }
            }else{
                $_SESSION['error'] = 'Tài khoản của bạn chưa được kích hoạt. Vui lòng đăng nhập gmail để kích hoạt tài khoản !';
                header("location: ../login.php");
            }
    }else{
                $_SESSION['error'] = 'Email không tồn tại!';
                header("location: ../login.php");
    }
}

?>